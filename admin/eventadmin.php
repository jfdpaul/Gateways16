<?php
  session_start();
?>
<html>
  <script  src="../jquery.min.js"></script>
  <body>
    <div style="margin:auto;">
    <?php
      if( $_SESSION['privilege']<5 && $_REQUEST['e_id']==''){
        $_SESSION["message"]="Unauthorised Access Denied";
        header('Location: ./index.php');
      }
      echo "<h2>Welcome Organizer - ".$_SESSION['event_name']." </h2>";
      echo '<div><a href="./index.php" style="color:brown">Logout</a></div>';
    ?>
    <main>
            <!-- Display list of participants in event sorted by college and team -->
      <div id="participant_list" style="float:left;display:block;background:#AA99AA ;padding:15px;margin:10px;">
        <h2>Participant List</h2>
        <hr>
        <table>
          <tr>
            <td>Present</td><td>P_ID</td><td>Name</td><td>Team#</td><td>College</td><td>Score</td>
          </tr>

        <?php
            require_once('../libraries/db_connect.php');
            $res=$db->get_participants_for_event_id($_REQUEST['e_id']);
            foreach($res as $key => $value){
              echo "<tr>";
              echo "<td><input type='checkbox' name='participant_id' value='".$value['p_id']."'</td>";
              echo "<td>".$value['p_id']."</td>";
              echo "<td>".$value['first_name']." ".$value['last_name']."</td>";
              echo "<td>".$value['t_id']."</td>";
              echo "<td>".$value['name']."</td>";
              echo "<td>".$value['marks']."</td>";
              echo "</tr>";
            }
         ?>
       </table><br>
       <button id="mark_present">Mark Present</button>
      </div>

      <!-- Block to register teams -->
      <div id="add_participant" style="float:left;display:block;background:#99AA99 ;padding:15px;margin:10px;">
        <h2>Add Team (use Participant's ID)</h2>
        <hr>
        <div id="team">
          <input type="hidden" id="participant_count" value="0">
          <button id="add_button">+</button>
        </div>
        <input id="e_id" type="hidden" value="<?php echo $_REQUEST['e_id']?>">
        <button id="add_team_button">Add Team</button>
        <div id="insert_message"></div>
      </div>

      <!-- Section to register new teams for event-->
      <div id="add_score" style="float:left;display:block;background:#99AA99 ;padding:15px;margin:10px;">
        <h2>Set Score</h2>
        <hr>
        <div id="score_holder">
          <input placeholder="Team ID" id="teamID"><br>
          <input placeholder="score" id="scoreValue"><br>
          <button id="scoreButton">Save</button>
          <div id="score_message"></div>
        </div>
      </div>

      <!-- Helper to get information of participation in events-->
      <div style="background:#A4C;float:right;">
        <h3>Participant Helper</h3>
        <hr>
        <input id="p_id">
        <button id="get_details">Retrieve</button>
        <!-- Will hold ajax response of event details-->
        <div id="participant_details"></div>
      </div>
    </main>
  </div>
  </body>
</html>
<script type = "text/javascript" language = "javascript">
 $(document).ready(function() {
   //function to load asynchronously, details of a participant's events
   $("#get_details").click(function(event){
       var p_id = $("#p_id").val();
       if(!isNaN(p_id))
        $("#participant_details").load('../libraries/get_participants_events_for_id.php', {"p_id":p_id} );
    });

   //function to add a new input area for participant id, to add team
   $("#add_button").click(function(event){
     var count=$("#participant_count").val();
     var inputBox = $("<input>");
     inputBox.attr("id",++count);
     inputBox.attr("type","number");
     var label=$("<label></label>").text(count);
     var br=$("<br>");
     $("#team").append(br,label,inputBox);
     $("#participant_count").val(count);
   });

   //function to load asynchronously, details of a participant's events
   $("#add_team_button").click(function(event){
     var team_array=[];
     var count=$("#participant_count").val();
     for(id_count=1;id_count<=count;id_count++){
         team_array[id_count-1] = $("#"+id_count).val();
      }
      var e_id=$("#e_id").val();
      $("#insert_message").load('../libraries/add_team_to_db.php', {"team_members":team_array,"event_id":e_id} );
      location.reload();
   });

   //function to load asynchronously, details of a participant's events
   $("#scoreButton").click(function(event){
     var t_id=$("#teamID").val();
     var scoreval=$("#scoreValue").val();
     $("#score_message").load('../libraries/add_score_for_tid.php', {"score":scoreval,"t_id":t_id} );
     location.reload();
   });

    //function to load asynchronously, details of a participant's events
    $("#mark_present").click(function(event){
      var p_array=[];
      var e_id=$("#e_id").val();
      var checkboxes= document.getElementsByName('participant_id');
      for (var i=0, n=checkboxes.length,j=0;i<n;i++){
          if (checkboxes[i].checked){
              p_array[j++] =checkboxes[i].value;
          }
      }
      $("#insert_message").load('../libraries/mark_present.php', {"p_array":p_array,"event_id":e_id} );
    });
 });
</script>

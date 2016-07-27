<?php
  session_start();
?>
<html>
<head>
  <style>
  .list_holder{
    padding:5px;
    margin:25px;
    background-color: #989;
  }
  
  a {
    color:white;
    text-decoration: none;
  }
  </style>
</head>
  <?php
    if( $_SESSION['privilege']==''){
      $_SESSION["message"]="Don't act smart";
      header('Location: ./index.php');
    }
    echo '<h2>Welcome ADMIN</h2>';
  ?>

  <div style="width:99%;float:left;background:#456;padding:4px">
    <div id="college_menu">
      <!--
      <a class="menu_item" href="#">College Details</a>
      <a class="menu_item" href="#">Organizer Details</a>
      <a class="menu_item" href="#">Event Details</a>
      <a class="menu_item" href="#">Event Details</a>
      <br>

      -get number of colleges participating<br>
      -list colleges in ascending order of score, name (with no of participants)<br>
      -show details of organizers (contact,name,username,password)<br>
      -show event details (winners with college name,no of participants,venue,duration)<br>-->
      <div class="list_holder">
        <div>
          <h2><a href="#">College List</a></h2>
          <div id="college_list"></div>
        </div>
        <br>
        <div>
          <a href="#">Delete</a> <a href="#">Add</a><br>
          <input id="col_id">
        </div>
      </div>
      <div class="list_holder">
        <div>
          <h2><a href="#">Participant List</a></h2>
          <div id="participant_list"></div>
        </div>
        <br>
        <div>
          <a href="#">Delete</a> <a href="#">Add</a><br>
          <input id="p_id">
        </div>
      </div>
      <div class="list_holder">
        <div>
          <h2><a href="#">Organizer List</a></h2>
          <div id="organizer_list"></div>
        </div>
        <br>
        <div>
          <a href="#">Delete</a> <a href="#">Add</a><br>
          <input id="o_id">
        </div>
      </div>
    </div>
  </div>
</html>

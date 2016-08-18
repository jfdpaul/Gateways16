<?php
  session_start();
?>
<html>
<head>
  <script  src="../jquery.min.js"></script>
  <style>

  .list_holder{
    padding:5px;
    margin:25px;
    background-color: #989;
  }

  a {
    color:white;
    text-decoration: none;
    padding : 2px;
  }
  </style>
</head>

<div style="float:right;background:#3a4c4d;">
  <a href="./certificateadmin.php">Scores | </a>
  <a href="#">Coordinator |</a>
  <input id="event_id"><a href="#" onclick="goto_event()">GotoEvent</a>
  <script>
    function goto_event(){
      var e_id=document.getElementById('event_id').value;
      window.location='./eventadmin.php?e_id='+e_id;
    }
  </script>
</div>
  <?php
    if( $_SESSION['privilege']==''||$_SESSION['privilege']<15){
      $_SESSION["message"]="Don't act smart";
      header('Location: ./index.php');
    }
    echo '<h2>Welcome ADMIN</h2>';
    echo '<div><a href="./index.php" style="color:brown">Logout</a></div>';
  ?>
  <div style="width:99%;float:left;background:#456;padding:4px">
    <div id="college_menu">

<!-- Participants -->
      <div class="list_holder">
        <h1>Participants</h1>
        <div id="participant_message"></div>
        <div>
          <input id="update_p_id" placeholder="Participant Id">
          <input id="update_p_name" placeholder="Name">
          <input id="update_p_email_id" placeholder="Email">
          <input id="update_p_mobile" type="number" placeholder="Mobile">
          <input id="update_p_col_id" placeholder="College Id">
          <br><a href="#participant_message" onclick="update_participant()">Update</a>
          <hr>
          <br>
          <input id="add_p_name" placeholder="Name">
          <input id="add_p_email_id" placeholder="Email">
          <input id="add_p_mobile" type="number" placeholder="Mobile">
          <input id="add_p_col_id" placeholder="College Id">
          <br><a href="#participant_message" onclick="add_participant()">Add</a>
          <hr><br>
          <input id="delete_p_id" placeholder="Participant Id">
          <br><a href="#participant_message" onclick="delete_participant()">Delete</a>
          <hr>
        </div>
        <div>
          <h2><a href="#participant_list" onclick="get_participant_list()">Participant List</a></h2>
          <span onclick="printAPart('participant_list')">Print</span>
          <div id="participant_list"></div>
        </div>
      </div>

<!-- Events
      <div class="list_holder">
        <h1>Events</h1>
        <div id="event_message"></div>
        <div>
          <input id="update_e_id" placeholder="Event Id">
          <input id="update_e_name" placeholder="Name">
          <input id="update_e_description" placeholder="Description">
          <input id="update_e_start_time" placeholder="Start Time">
          <input id="update_e_end_time" placeholder="End Time">
          <br><a href="#event_message" onclick="update_event()">Update</a>
          <hr>
          <br>
          <input id="add_e_name" placeholder="Name">
          <input id="add_e_description" placeholder="Description">
          <input id="add_e_start_time" placeholder="Start Time">
          <input id="add_e_end_time" placeholder="End Time">
          <br><a href="#event_message" onclick="add_event()">Add</a>
          <hr><br>
          <input id="delete_e_id" placeholder="Event Id">
          <br><a href="#event_message" onclick="delete_event()">Delete</a>
          <hr>
        </div>
        <div>
          <h2><a href="#event_list" onclick="get_event_list()">Event List</a></h2>
          <div id="event_list"></div>
        </div>
      </div>
 -->

<!-- Organizers -->
      <div class="list_holder">
        <h1>Organizers</h1>
        <div id="organizer_message"></div>
        <div>
          <input id="update_o_id" placeholder="Organizer Id">
          <input id="update_o_name" placeholder="Name">
          <input id="update_o_mobile" type="number" placeholder="Mobile">
          <input id="update_o_email" placeholder="Email">
          <input id="update_o_username" placeholder="Username">
          <input id="update_o_password" placeholder="Password">
          <input id="update_o_privilege" placeholder="Privilege (15,10,5)">
          <br><a href="#organizer_message" onclick="update_organizer();">Update</a>
          <hr><br>
          <input id="add_o_name" placeholder="Name">
          <input id="add_o_mobile" type="number" placeholder="Mobile">
          <input id="add_o_email" placeholder="Email">
          <input id="add_o_username" placeholder="Username">
          <input id="add_o_password" placeholder="Password">
          <input id="add_o_privilege" placeholder="Privilege">
          <br><a href="#organizer_message" onclick="add_organizer()">Add</a>
          <hr><br>
          <input id="delete_o_id" placeholder="Organizer Id">
          <br><a href="#organizer_message" onclick="delete_organizer()">Delete</a>
          <hr>
        </div>
        <div>
          <h2><a href="#organizer_list" onclick="get_organizer_list()">Organizer List</a></h2>
          <span onclick="printAPart('organizer_list')">Print</span>
          <div id="organizer_list"></div>
        </div>
      </div>

<!-- Colleges -->
      <div class="list_holder">
        <h1>Colleges</h1>
        <span id="college_message" style="color:red;"></span>
        <div>
          <input id="update_col_id" placeholder="College Id">
          <input id="update_col_name" placeholder="College name">
          <input id="update_col_email" placeholder="email">
          <input id="update_col_password" placeholder="password">
          <input id="update_col_contact" placeholder="contact">
          <br><a href="#college_message" onclick="update_college()">Update</a>
          <hr>
          <br>
          <input id="add_col_name" placeholder="Name">
          <br><a href="#college_message" onclick="add_college()">Add</a>
          <hr><br>
          <input id="delete_col_id" placeholder="College Id">
          <br><a href="#college_message" onclick="delete_college()">Delete</a>
          <hr>
        </div>
        <div>
          <h2><a href="#college_list" onclick="get_college_list()">College List</a></h2>
          <span onclick="printAPart('college_list')">Print</span>
          <div id="college_list"></div>
        </div>
      </div>

    </div>
  </div>
</html>
<script>

/**PARTICIPANT Functions*/
function add_participant(){
    var p_first_name = $("#add_p_name").val();
    var p_email_id = $("#add_p_email_id").val();
    var p_mobile = $("#add_p_mobile").val();
    var p_col_id = $("#add_p_col_id").val();
    $("#participant_message").load('../libraries/add_new_participant.php', {"p_name":p_name,"p_email_id":p_email_id,"p_mobile":p_mobile,"p_col_id":p_col_id});
 }

function delete_participant(){
      var p_id = $("#delete_p_id").val();
      if(p_id!='')
        $("#participant_message").load('../libraries/delete_participant_by_id.php',{"p_id":p_id});
 }

 function update_participant(){
   var p_id = $("#update_p_id").val();
   var p_first_name = $("#update_p_first_name").val();
   var p_last_name = $("#update_p_last_name").val();
   var p_email_id = $("#update_p_email_id").val();
   var p_mobile = $("#update_p_mobile").val();
   var p_col_id = $("#update_p_col_id").val();
   if(p_id!='')
   $("#participant_message").load('../libraries/update_participant_by_id.php',{"p_id":p_id,"p_first_name":p_first_name,"p_last_name":p_last_name,"p_email_id":p_email_id,"p_mobile":p_mobile,"p_col_id":p_col_id});
 }

 function get_participant_list(){
      $("#participant_list").load('../libraries/get_participant_list.php');
  }

/**EVENT Functions*/
function add_event(){
    var e_name = $("#add_e_name").val();
    var e_description = $("#add_e_description").val();
    var e_start_time = $("#add_e_start_time").val();
    var e_end_time = $("#add_e_end_time").val();
    if(e_name!='')
     $("#event_message").load('../libraries/add_new_event.php', {"e_name":e_name,"e_description":e_description,"e_start_time":e_start_time,"e_end_time":e_end_time});
 }

function delete_event(){
      var e_id = $("#delete_e_id").val();
      if(e_id!='')
        $("#event_message").load('../libraries/delete_event_by_id.php',{"e_id":e_id});
 }

 function update_event(){
   var e_id = $("#update_e_id").val();
   var e_name = $("#update_e_name").val();
   var e_description = $("#update_e_description").val();
   var e_start_time = $("#update_e_start_time").val();
   var e_end_time = $("#update_e_end_time").val();
   if(e_id!='')
    $("#event_message").load('../libraries/update_event_by_id.php',{"e_id":e_id,"e_name":e_name,"e_description":e_description,"e_start_time":e_start_time,"e_end_time":e_end_time});
 }

 function get_event_list(){
      $("#event_list").load('../libraries/get_event_list.php');
  }

/**ORGANIZER Functions*/
function add_organizer(){
    var o_name = $("#add_o_name").val();
    var o_email = $("#add_o_email").val();
    var o_mobile = $("#add_o_mobile").val();
    var o_username = $("#add_o_username").val();
    var o_password = $("#add_o_password").val();
    var o_privilege = $("#add_o_privilege").val();
    if(o_name!='')
     $("#organizer_message").load('../libraries/add_new_organizer.php', {"o_name":o_name,"o_email":o_email,"o_mobile":o_mobile,"o_username":o_username,"o_password":o_password,"o_privilege":o_privilege});
 }

function delete_organizer(){
      var o_id = $("#delete_o_id").val();
      if(o_id!='')
        $("#organizer_message").load('../libraries/delete_organizer_by_id.php',{"o_id":o_id});
 }

 function update_organizer(){
   var o_id=$("#update_o_id").val();
   var o_name=$("#update_o_name").val();
   var o_mobile=$("#update_o_mobile").val();
   var o_email=$("#update_o_email").val();
   var o_username=$("#update_o_username").val();
   var o_password=$("#update_o_password").val();
   var o_privilege=$("#update_o_privilege").val();
   alert(o_id);
   if(o_id!='')
   $("#organizer_message").load('../libraries/update_organizer_by_id.php',{"o_id":o_id,"o_name":o_name,"o_email":o_email,"o_mobile":o_mobile,"o_username":o_username,"o_password":o_password,"o_privilege":o_privilege});
 }

 function get_organizer_list(){
      $("#organizer_list").load('../libraries/get_organizer_list.php');
  }

/**COLLEGE Functions*/
  function add_college(){
      var col_name = $("#add_col_name").val();
      if(col_name!='')
       $("#college_message").load('../libraries/add_new_college.php', {"col_name":col_name} );
   }

  function delete_college(){
        var col_id = $("#delete_col_id").val();
        if(col_id!='')
          $("#college_message").load('../libraries/delete_college_by_id.php',{"col_id":col_id});
   }

   function update_college(){
     var col_name=$("#update_col_name").val();
     var col_email=$("#update_col_email").val();
     var col_contact=$("#update_col_contact").val();
     var col_password=$("#update_col_password").val();
     var col_id=$("#update_col_id").val();
     console.log(col_name);
     if(col_id!='')
        $("#college_message").load('../libraries/update_college_by_id.php',{"col_id":col_id,"col_name":col_name,"col_contact":col_contact,"col_email":col_email,"col_password":col_password});
   }

   function get_college_list(){
        $("#college_list").load('../libraries/get_college_list.php');
    }

    function printAPart(divId){
      var prtContent = document.getElementById(divId);
      var WinPrint = window.open('', '', 'left=0,top=0,width=800,height=900,toolbar=0,scrollbars=0,status=0');
      WinPrint.document.write(prtContent.innerHTML);
      WinPrint.document.close();
      WinPrint.focus();
      WinPrint.print();
      WinPrint.close();
    }
</script>

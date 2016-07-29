<?php session_start(); ?>
<html>
  <?php
    require_once('../libraries/db_connect.php');

    //get username and password
    $uname=$_REQUEST['uname'];
    $password=$_REQUEST['password'];

    $res=$db->authenticate_organizer($uname,$password);   //authenticate user and return message

    //if match is found then start a session with privilege
    if($res["message"]=="match"){
      $_SESSION['privilege']=$res["privilege"];

      if($_SESSION['privilege']==15){   //send to admin page
        header('Location: ./admin.php');
      }
      else if($_SESSION['privilege']==5){   //send to eventadmin.php page with e_id from events_organizers using o_id

        $res=$db->get_organizer_details_for_uname_password($uname,$password); //authenticate user and return message
        if($res['message']=="success"){
          $_SESSION["e_id"]=$res["e_id"];
          $_SESSION["event_name"]=$res["event_name"];
        }
        header('Location: ./eventadmin.php?e_id='.$_SESSION["e_id"]);
      }
    }
    else{   //redirect to login
      $_SESSION["message"]="incorrect username or password";
      header('Location: ./index.php');
    }
  ?>
</html>

<?php session_start(); ?>
<html>
  <?php
    require_once('../libraries/db_connect.php');

    $uname=$_REQUEST['uname'];
    $password=$_REQUEST['password'];

    $res=$db->authenticate_organizer($uname,$password);
    if($res["message"]=="match"){
      $_SESSION['id']=$res["id"];
      header('Location: ./home.php');
    }
    else{
      $_SESSION["message"]="incorrect username or password";
      header('Location: ./index.php');
    }
  ?>
</html>

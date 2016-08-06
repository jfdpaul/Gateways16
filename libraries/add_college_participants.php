<?php
session_start();
error_reporting(E_ALL); 
  ini_set('display_errors', 1); 

require_once("db_connect.php");

if(isset($_SESSION['col_id'])){
  $c_id=$_REQUEST['college_id'];
  $name=$_REQUEST['name_array'];
  $email=$_REQUEST['email_array'];
  $phone=$_REQUEST['phone_array'];
  $c_id=$_SESSION['col_id'];
  $db->add_college_participants($c_id,$name,$email,$phone);
}
else
{
	header("Location: ./../index.php");
}
  //die('message'.$e_id) ;
 // $team_members=$_REQUEST['team_members'];
 // $res=$db->add_team_to_db($e_id,$team_members);
  //echo $c_id;

?>
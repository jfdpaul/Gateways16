<?php
session_start();
error_reporting(E_ALL); 
  ini_set('display_errors', 1); 
require_once("db_connect.php");

if(!isset($_SESSION['col_id'])){
	header('Location: ./../index.php');
}
else
{
if(isset($_GET['pid']) && isset($_GET['name']) && isset($_GET['email']) && isset($_GET['phone']) ){
	$p_id=$_GET['pid'];
	$name=$_GET['name'];
	$email=$_GET['email'];
	$phone=$_GET['phone'];
	echo "test".$name;
	if($name!='' && $email!='' && $phone!=''){
	$db->update_college_participants($_SESSION['col_id'],$p_id,$name,$email,$phone);
	header("Location: ./../profile.php");
  
	}
  else
  	header('Location: ./../profile.php?error=1');
	
}
}
//
?>
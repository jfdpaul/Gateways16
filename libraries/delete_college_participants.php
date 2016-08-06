<?php
error_reporting(E_ALL); 
  ini_set('display_errors', 1); 

require_once("db_connect.php");
if(isset($_GET['pid'])){
	$p_id=$_GET['pid'];
  $db->delete_college_participants($p_id);	
}
  header("Location: ./../profile.php");
?>
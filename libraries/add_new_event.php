<?php //ajax page
  require_once('db_connect.php');

  $e_name=$_REQUEST['e_name'];
  $e_description=$_REQUEST['e_description'];
  $e_start_time=$_REQUEST['e_start_time'];
  $e_end_time=$_REQUEST['e_end_time'];
  $res=$db->add_new_event($e_name,$e_description,$e_start_time,$e_end_time)or die(mysql_error());
?>

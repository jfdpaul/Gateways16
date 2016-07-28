<?php //ajax page
  require_once('db_connect.php');

  $o_name=$_REQUEST['o_name'];
  $o_email=$_REQUEST['o_email'];
  $o_mobile=$_REQUEST['o_mobile'];
  $o_username=$_REQUEST['o_username'];
  $o_password=$_REQUEST['o_password'];
  $o_privilege=$_REQUEST['o_privilege'];
  $res=$db->add_new_organizer($o_name,$o_email,$o_mobile,$o_username,$o_password,$o_privilege)or die(mysql_error());
?>

<?php //ajax page
  require_once('db_connect.php');

  $name=$_REQUEST['p_name'];
  $p_email=$_REQUEST['p_email_id'];
  $p_mobile=$_REQUEST['p_mobile'];
  $p_col_id=$_REQUEST['p_col_id'];
  $res=$db->add_new_participant($p_name,$p_email,$p_mobile,$p_col_id);
?>

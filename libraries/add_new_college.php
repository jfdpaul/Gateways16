<?php //ajax page
  require_once('db_connect.php');

  $col_name=$_REQUEST['col_name'];
  $res=$db->add_new_college($col_name);
?>

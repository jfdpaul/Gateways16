<?php //ajax page
  require_once('db_connect.php');

  $col_id=$_REQUEST['col_id'];
  if($col_id==null){
    echo "Null received";
  }
  else
  $res=$db->delete_college_by_id($col_id);
?>

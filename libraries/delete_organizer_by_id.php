<?php //ajax page
  require_once('db_connect.php');

  $o_id=$_REQUEST['o_id'];
  if($o_id==null){
    echo "Null received";
  }
  else
  $res=$db->delete_organizer_by_id($o_id);
?>

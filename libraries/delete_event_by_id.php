<?php //ajax page
  require_once('db_connect.php');

  $e_id=$_REQUEST['e_id'];
  if($e_id==null){
    echo "Null received";
  }
  else
  $res=$db->delete_event_by_id($e_id);
?>

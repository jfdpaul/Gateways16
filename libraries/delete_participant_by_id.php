<?php //ajax page
  require_once('db_connect.php');

  $p_id=$_REQUEST['p_id'];
  if($p_id==null){
    echo "Null received";
  }
  else
  $res=$db->delete_participant_by_id($p_id)or die(mysql_error());
?>

<?php //ajax page
  require_once('db_connect.php');

  $e_id=$_REQUEST['e_id'];
  $e_name=$_REQUEST['e_name'];
  $e_description=$_REQUEST['e_description'];
  $e_start_time=$_REQUEST['e_start_time'];
  $e_end_time=$_REQUEST['e_end_time'];
  if($e_id==null){
    echo "Null received";
  }
  else
  $res=$db->update_event_by_id($e_id,$e_name,$e_description,$e_start_time,$e_end_time)or die(mysql_error());
?>

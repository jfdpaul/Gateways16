<?php //ajax page
  require_once('db_connect.php');

  $e_id=$_REQUEST['event_id'];
  //die('message'.$e_id) ;
  $participant_array=$_REQUEST['p_array'];
  $res=$db->mark_participant_present_for_e_id($e_id,$participant_array);
?>

<?php //ajax page
  require_once('db_connect.php');

  $e_id=$_REQUEST['event_id'];
  //die('message'.$e_id) ;
  $team_members=$_REQUEST['team_members'];
  $res=$db->add_team_to_db($e_id,$team_members);
?>

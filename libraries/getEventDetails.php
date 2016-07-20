<?php
  require_once('db_connect.php');

  $eId=$_REQUEST['e_id'];
  $colId=$_REQUEST['col_id'];
  //$data = file_get_contents ("../data/event_details.json");

  $res=$db->get_event_participants_details_for_college($eId,$colId);
  if($res["message"]=="match"){

  }
  else{
    
  }
  echo $data;
?>

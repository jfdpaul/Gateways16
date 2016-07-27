<?php //ajax page
  require_once('db_connect.php');

  $p_id=$_REQUEST['p_id'];
  $res=$db->get_participants_events_for_pid($p_id);
  echo "<ul>";
  foreach($res as $key => $value){
    echo "<li>".$value['name']."</li>";
  }
  echo "</ul>";
?>

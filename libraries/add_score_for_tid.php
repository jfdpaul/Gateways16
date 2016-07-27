<?php //ajax page
  require_once('db_connect.php');

  $t_id=$_REQUEST['t_id'];
  $score=$_REQUEST['score'];
  $res=$db->add_score_for_tid($t_id,$score);
?>

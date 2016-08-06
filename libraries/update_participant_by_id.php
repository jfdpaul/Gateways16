<?php //ajax page
  require_once('db_connect.php');

  $p_id=$_REQUEST['p_id'];
  $p_first_name=$_REQUEST['p_first_name'];
  $p_last_name=$_REQUEST['p_last_name'];
  $p_email=$_REQUEST['p_email_id'];
  $p_mobile=$_REQUEST['p_mobile'];
  $p_col_id=$_REQUEST['p_col_id'];
  if($p_id==null){
    echo "Null received";
  }
  else
  $res=$db->update_participant_by_id($p_id,$p_first_name,$p_last_name,$p_email,$p_mobile,$p_col_id);
?>

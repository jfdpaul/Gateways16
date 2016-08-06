<?php //ajax page
  require_once('db_connect.php');

  $col_id=$_REQUEST['c_id'];
  $count=$_REQUEST['acc_count'];
  if($col_id==null||$count==null){
    echo "Null received";
  }
  else
  $res=$db->update_accomodation_count($col_id,$count);
?>

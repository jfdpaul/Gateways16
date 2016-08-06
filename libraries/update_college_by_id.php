<?php //ajax page
  require_once('db_connect.php');

  $col_id=$_REQUEST['col_id'];
  $col_name=$_REQUEST['col_name'];
  if($col_id==null||$col_name==null){
    echo "Null received";
  }
  else{
  	$res=$db->update_college_by_id($col_id,$col_name);
  	echo "success";	
  }
  

?>

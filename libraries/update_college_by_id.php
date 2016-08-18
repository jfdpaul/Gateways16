<?php //ajax page
  require_once('db_connect.php');

  $col_id=$_REQUEST['col_id'];
  $col_name=$_REQUEST['col_name'];
  $col_email=$_REQUEST['col_email'];
  $col_contact=$_REQUEST['col_contact'];
  $col_password=$_REQUEST['col_password'];
  if($col_id==null){
    echo "Null received";
  }
  else{
  	$res=$db->update_college_by_id($col_id,$col_name,$col_email,$col_password,$col_contact);
  	echo "success";
  }


?>

<?php
session_start();
error_reporting(E_ALL); 
  ini_set('display_errors', 1); 

require_once("db_connect.php");

if(isset($_SESSION['col_id'])){
  $c_id=$_REQUEST['college_id'];
  $name=$_REQUEST['name_array'];
  $email=$_REQUEST['email_array'];
  $phone=$_REQUEST['phone_array'];
  $c_id=$_SESSION['col_id'];
$db->add_college_participants($c_id,$name,$email,$phone);
$row=$db->get_college_participants($_SESSION['col_id']);
$l=count($row);
if(isset($row[0]['name'])){

     for($i=0;$i<$l;$i++){
  echo '<div id="wrapper" style="position:relative;">
  <label>Name:</label> 
<b><paper-input auto-validate id="name'.$row[$i]['pid'].'" type="text" value="'.$row[$i]['name'].'" disabled="true"></b>    
<label>Email:</label> 
<b><paper-input auto-validate id="email'.$row[$i]['pid'].'" type="email" value="'.$row[$i]['email'].'" disabled="true"></b> 
<label>Phone number:</label> 
<b><paper-input id="phone'.$row[$i]['pid'].'" type="number" maxlength=10 value="'.$row[$i]['mobile'].'" disabled="true"></b>';

 echo "<a href='libraries/delete_college_participants.php?pid=".$row[$i]['pid']."'><paper-button 'raised>delete</paper-button></a>&nbsp;"; 
echo "<paper-button noink raised onclick='edit(".$row[$i]['pid'].");' id='edit".$row[$i]['pid']."'  value='edit' alt='edit' title='edit' > Edit </paper-button></div>";
    }
  }
}
else
{
	header("Location: ./../index.php");
}
  //die('message'.$e_id) ;
 // $team_members=$_REQUEST['team_members'];
 // $res=$db->add_team_to_db($e_id,$team_members);
  //echo $c_id;

?>
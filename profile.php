<?php
session_start();
error_reporting(E_ALL); 
  ini_set('display_errors', 1); 
require_once('libraries/db_connect.php');

if(isset($_POST['email']) && isset($_POST['pass']) && $_POST['email']!='' && $_POST['pass']!=''){
    $col_id=$db->authenticate_college($_POST['email'],$_POST['pass']);
    $col_name=$db->get_college_name($col_id);
    if($col_id==-1){
      header("Location: index.php?error=1");
      }
      else{
        $_SESSION['col_id']=$col_id;
        $_SESSION['col_name']=$col_name;
    }
  }
else if(!isset($_SESSION['col_id']) || $_SESSION['col_id']==''){
    echo "test";
    header("Location: index.php");
}  
   //echo $_SESSION['col_id'];
?>

<!Doctype html>
<html onload="toast1.open();">
<head>
  <title>College Profile | Gateways</title>
  <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <script src="./bower_components/webcomponentsjs/webcomponents-lite.min.js"></script>
    <script  src="./jquery.min.js"></script>
    <link rel="import" href="./bower_components/polymer/polymer.html">
    <link rel="import" href="./bower_components/iron-selector/iron-selector.html">
    <link rel="import" href="./bower_components/paper-item/paper-item.html">
    <link rel="import" href="./bower_components/paper-listbox/paper-listbox.html">
    <link rel="import" href="./bower_components/paper-input/paper-input.html">
    <link rel="import" href="./bower_components/paper-toast/paper-toast.html">
    <link rel="import" href="./bower_components/paper-icon-button/paper-icon-button.html">
    <link rel="import" href="./bower_components/paper-button/paper-button.html">
    <link rel="import" href="./bower_components/paper-toolbar/paper-toolbar.html">
    <link rel="import" href="./bower_components/iron-icons/iron-icons.html">


   

   <style is="custom-style">
      * {
        font-family: 'Roboto', sans-serif;
        font-size:15px;

      }

      /**Overall scrollbars*/
        html {
          overflow-y: scroll;
          overflow-x: hidden;
        }

        body::-webkit-scrollbar {
          width: 3px;  /* remove scrollbar space */
          background: transparent;  /* optional: just make scrollbar invisible */
        }
        /* optional: show position indicator in red */
          body::-webkit-scrollbar-thumb {
          background: #FF00FF;
        }

        @font-face {
                font-family: custom-font;
                src: url(2589-ldr.regular.ttf);
        }

        paper-input {
          font-size: 10px;
        }
        paper-toolbar a {
          text-decoration: none;
          color:#fff;
        }
       #list_participants  paper-button {
          background-color: #0071BC;
          color:#fff;
        }
        a{
          text-decoration: none;
          color:#fff;
        }
       
    
    #label
    {
    background-color:#ccc;
    width: 100%;
    margin:0 auto;
    text-align:center;
    }
   #list_participants {
    float:left;
    width:98%;
    padding:10px;
    margin:0 auto;
    background-color:#ccc;
    text-align: center;
   }
 
   #main{
    text-align: center;
    margin:0 auto;
    width:50%;
    margin-top:5%;
   }
   #main paper-button{
    background-color: #29aba4;
    color:#fff;
   }
   #wrapper{
    text-align:center;
    background-color: #fff;
    padding:20px;
    float:left;
    width:20%;
    margin:0 auto;
    margin-left:10px;
    margin-top:10px;
   
   }


   </style>
</head>
<body onload="fielderror();">
<paper-toolbar>
  <span class="title">Profile: <?php echo $_SESSION['col_name']; ?></span>
  <a href="./"><paper-button >Home</paper-button></a>
  <a href="logout.php"><paper-button  >Logout</paper-button></a>
  </paper-toolbar>
 
   <div id="main">
	<paper-button name="add_participant" id="add">Add new participant</paper-button>
	<input type="hidden" id="participant_count" value="0"/>
	<div id="addParticipant">
		</div>
    	<paper-button name="Add" style="visibility:hidden;"  id="submit">Add</paper-button>
        <paper-button name="Clear" style="visibility:hidden;" onclick="location.reload();"  id="clear">Clear</paper-button>
   
	<div id="message">
	</div>
   <hr/>
  <div id="accomodation count">
  <label>How many participants need accomodation? </label>
  <paper-input  type="number" value="<?php echo $db->get_accomodation_count($_SESSION['col_id']); ?>"  style="width:100px;margin:0 auto;" id="acc_count" name="acc_count"></paper-input>
  <paper-button style="color:#fff;background-color:#0071BC;" onclick="updatecount();" name="update_acc" >Update</paper-button>
  </div>
  <hr/>
</div>


<div id="list_participants" style="width:100%;margin-left:-7px;" >   
 <?php
$row=$db->get_college_participants($_SESSION['col_id']);
$l=count($row);
if(isset($row[0]['name'])){
     for($i=0;$i<$l;$i++){
      ?>
  <div id="wrapper" style="position:relative;">
  <label>Name:</label> 
<b><paper-input auto-validate id="name<?php echo $row[$i]['pid']; ?>" type="text" value="<?php  echo $row[$i]['name'] ?>" disabled="true"></b>    
<label>Email:</label> 
<b><paper-input auto-validate id="email<?php echo $row[$i]['pid']; ?>" type="email" value="<?php echo $row[$i]['email'] ?>" disabled="true"></b> 
<label>Phone number:</label> 
<b><paper-input id="phone<?php echo $row[$i]['pid']; ?>" type="number" value="<?php echo $row[$i]['mobile'] ?>" disabled="true"></b>
 <?php echo "<a href='libraries/delete_college_participants.php?pid=".$row[$i]['pid']."'><paper-button 'raised>delete</paper-button></a>&nbsp;"; 
echo "<paper-button noink raised onclick='edit(".$row[$i]['pid'].");' id='edit".$row[$i]['pid']."'  value='edit' alt='edit' title='edit' > Edit </paper-button>";
 ?>
 </div>

<?php

}
}
else
echo "no participants registered yet.";
?>
</div>

<footer style="width:100%;background-color:#000;color:#fff;text-align:center;padding:20px;margin-left:-7px;">
<br/>
Copyright &copy; | Gateways 2016
</footer>

<paper-toast id="toast1" text="Update successful!">
</paper-toast>

<paper-toast  style="background-color:##ce3426;color:#fff; width:50%;text-align:center;" id="toast2" text="Fields cannot be empty">
</paper-toast>


<script>

function fielderror(){
  <?php
   if(isset($_GET['error']) && $_GET['error']==1 ){
    echo "toast2.open();";
  }
  ?>
  
}
 toast1.fitInto = main;
function updatecount(){

var count=$('#acc_count').val();  
    $("#message").load('libraries/update_accomodation_count.php', {"c_id":<?php echo $_SESSION['col_id']; ?>,"acc_count":count} );
     console.log(count);
     toast1.open();
}
 
//edit participant details
function edit(id){
    var name=$("#name"+id).val();
    var email=$("#email"+id).val();
    var phone=$("#phone"+id).val();
    var flag=$('#edit'+id).html().split(" ");
     console.log(flag[1]);
     
    if(flag[1]=="Edit"){
        $("#name"+id).prop('disabled', false);
        $("#email"+id).prop('disabled', false);
        $("#phone"+id).prop('disabled', false);
        $('#edit'+id).html('Save');
    }
    else if($('#edit'+id).html()=="Save"){
        window.location.href = "libraries/edit_college_participants.php?pid="+id+"&name="+name+"&email="+email+"&phone="+phone;
    }    
   }

   //add new participants
$("#add").click(function(event){

    $("#submit").css("visibility","visible");
    $("#clear").css("visibility","visible");
     var count=$("#participant_count").val();
     var inputName = $("<paper-input>");
     var inputEmail = $("<paper-input>");
     var inputPhone = $("<paper-input>");
     ++count;
     inputName.attr("id","name"+count);
     inputName.attr("type","text");
     inputName.attr("placeholder","Participant Name");
     inputName.attr("required","required");
     inputEmail.attr("id","email"+count);
     inputEmail.attr("type","email");
     inputEmail.attr("placeholder","Participant Email");
     inputPhone.attr("id","phone"+count);
     inputPhone.attr("type","tel");
     inputPhone.attr("placeholder","Phone Number");
   
     var label=$("<div id='label'></div>").text(count);
     var br=$("<br>");
     $("#addParticipant").append(br,label,inputName,br,inputEmail,br,inputPhone,br);
     $("#participant_count").val(count);
   });

//submit form  
$("#submit").click(function(event){
     var name_array=[];
     var email_array=[];
     var phone_array=[];
     var c_id=1;
     var count=$("#participant_count").val();
     for(id_count=1;id_count<=count;id_count++){
         name_array[id_count-1] = $("#name"+id_count).val();
         email_array[id_count-1] = $("#email"+id_count).val();
         phone_array[id_count-1] = $("#phone"+id_count).val();
      }
      
      $("#message").load('libraries/add_college_participants.php', {"name_array":name_array,"email_array":email_array,"phone_array":phone_array,"college_id":c_id} );
        location.reload();
   });
</script>


</body>
</html>

<?php
$db->disconnect();
?>
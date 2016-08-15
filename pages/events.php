<?php
session_start();
 ?>
<html lang="en">
  <head>
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="import" href="../bower_components/paper-dialog-scrollable/paper-dialog-scrollable.html">
    <link rel="import" href="../bower_components/paper-dialog/paper-dialog.html">
    <link rel="import" href="../bower_components/polymer/polymer.html">
    <link rel="import" href="../bower_components/iron-icon/iron-icon.html">
    <link rel="import" href="../bower_components/iron-icons/iron-icons.html">
    <link rel="import" href="../bower_components/iron-icons/communication-icons.html">
    <script src="../bower_components/webcomponentsjs/webcomponents-lite.min.js"></script>
    <style>

      * {
          font-family: 'Roboto', sans-serif;
          font-size:17px;

        }
      .event_block{
        background:#DDD;
        margin:4px;
        padding:4px;
        float:left;
        min-width: 200px;
        min-height: 200px;
      }
      body{
          background-color: #111122;
      }

      #event_holder{
        padding: 50px;
      }

      #menu{
        padding:7px;
        padding-top:20px;
        padding-bottom: 20px;
        float:left;
        width:99%;
        background:#007DAF;
      }

      #menu  a{
        text-decoration: none;
        color:white;
        padding:15px;
        font-size: 17px;
      }
      #left_menu{
        float:left;
      }
      #right_menu{
        float:right;
      }

      #title_holder{
        background-color: #007aa0;
        float:left;
        width:99%;
        max-height: 50%;
        padding: 5px;
      }

      #title{
        font-size:35px;
      }

      .anchor{
        font-family: 'Roboto', sans-serif;
        text-decoration:none;
        color:white;
      }

      .white{
        color:white;
      }

      .event_image{
        float:right;
      }

      footer{
        float:left;
        text-align:center;
        background:#FFF;
        padding-top:50px;
        padding-bottom:20px;
        width:100%;
        box-shadow: 0px -5px 5px #555;
      }

      .details{
        float:left;
        width:99%;
        background-color: #EEE;
        color: black;
        padding:5px;
      }

      .left{
        display:block;
        float:left;
      }

      .right{
        display:block;
        float:right;
      }
    </style>

      <style is="custom-style">
      .rules{
          @apply(--layout-vertical);
          max-height: 40%;
      }
        .rules paper-dialog-scrollable {
          @apply(--layout-flex);
        }
      </style>
      <title>Events | Gateways</title>
      <link rel="icon" type="image/png" href="../images/gateways-logo.png" />
  </head>
  <body>

    <nav id="menu">
    <center class="white" style="font-size:25px">EVENTS</center>
      <div id="left_menu">
        <a href="../index.php">HOME</a>
        <?php if(isset($_SESSION['col_id']))
                echo '<a href="./profile.php">PROFILE</a>';
        ?>
      </div>
      <div id="right_menu">
      <?php if(isset($_SESSION['col_id']))
              echo '<a href="logout.php"><paper-button  >LOGOUT</paper-button></a>';
      ?>

      </div>
    </nav>
    <center>
    <div id="event_holder">
    <?php
      require_once('../libraries/db_connect.php');
      $events=$db->get_event_organizers_rules_venue_time_details();
      /*$events=array("quiz"=>array("name"=>"Quiz","description"=>"THis is coding","rules"=>array("1"=>"No lappy","2"=>"No internet")),"web"=>array("name"=>"Web","description"=>"THis is coding","rules"=>array("1"=>"No lappy","2"=>"No internet")),
      "itmanager"=>array("name"=>"IT Manager","description"=>"THis is coding","rules"=>array("1"=>"No lappy","2"=>"No internet")));
      */
      foreach ($events as $key => $value) {
        ?>
        <div class="event_block" onclick="event<?php echo $key?>dialog.open()">
          <span><img  style="padding:30px" src="../images/<?php echo $value['code_name']?>.png" width="130px" height="130px"/></span>
        </div>
        <?php
      }
    ?>
    </div>
  </center>

    <footer>
        <div style="position:relative;">
          <span>
            <style is="custom-style">
            .big {
              top:-10px;
              --iron-icon-height: 32px;
              --iron-icon-width: 32px;
              }
            </style>
            <a href="mailto:gateways@cs.christuniversity.in" id="mail_icon" title="Contact us at gateways@christuniversity.in"><iron-icon class="big" icon="communication:mail-outline"></iron-icon></a>
          </span>
        <span>
          <a target="_blank" href="https://www.facebook.com/gateways2k16" title="Check our Facebook page"><img alt="Follow us on Facebook" src="https://c866088.ssl.cf3.rackcdn.com/assets/facebook30x30.png"></a>
        </span>
      </div>
        <div style="text-align:center;">
          <b style="font-size:15px;">&copy Gateways 2016</b>
          <br>
        </div>
    </footer>

  </body>
<?php
foreach ($events as $key => $value) {
?>
<paper-dialog id="event<?php echo $key?>dialog" style="height:80%;width:70%;padding:7px;background:rgba(10,10,10,0.95); color:#fff;">
  <div id="title_holder">
    <br><br>
    <div style="float:left;display:block;max-width:50%;color:white">
      <div id="title"><?php echo $value['e_name']?></div>
      <br><br>
      <article style="font-size:17px;">
        <?php
          echo $value["description"];
        ?>
      </article>
    </div>
    <img class="event_image" src="../images/<?php echo $value['code_name']?>.png" height="200" width="350"/>

  </div>
  <paper-dialog-scrollable>

  <div class="rules" style="position:relative;clear:both">
    <ul>
      <?php
        foreach($value["rules"] as $key => $val){
          echo "<li>".$val['rule']."</li>";
        }
      ?>
    </ul>
      <div class="details">
        <div class="left">
          <span><iron-icon icon="communication:location-on"></span><span><?php echo $value['v_name']." (".$value['block']." ,".$value['floor']." floor)"?></span><br>
          <span><iron-icon icon="icons:query-builder"></span><span><?php echo $value['start_time']." - ".$value['end_time'] ?> </span>
        </div>
        <div class="right">
          <span><?php echo $value['o_name']?></span>
          <span> <iron-icon icon="communication:contact-phone"></iron-icon> </span><span><?php echo $value['mobile']?></span>
        </div>
      </div>

  </div>
</paper-dialog-scrollable>
</paper-dialog>
<?php
}
?>


</html>

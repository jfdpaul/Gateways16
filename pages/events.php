<html>
  <head>
    <link rel="import" href="../bower_components/paper-dialog-scrollable/paper-dialog-scrollable.html">
    <link rel="import" href="../bower_components/paper-dialog/paper-dialog.html">
    <link rel="import" href="../bower_components/polymer/polymer.html">
    <link rel="import" href="../bower_components/iron-icon/iron-icon.html">
    <link rel="import" href="../bower_components/iron-icons/iron-icons.html">
    <link rel="import" href="../bower_components/iron-icons/communication-icons.html">
    <script src="../bower_components/webcomponentsjs/webcomponents-lite.min.js"></script>
    <style>
    *{
      font-size:20px;
      }
      .event_block{
        background:#DDD;
        margin:4px;
        padding:4px;
        float:left;
        min-width: 220px;
        min-height: 220px;
      }
      body{
        background-color: #111122;
      }

      #event_holder{
        padding: 50px;
      }

      #menu{
        padding:7px;
        padding-top:30px;
        padding-bottom: 30px;
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
        width:98%;
        padding: 10px;
      }

      #title{
        font-size:50px;
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

    </style>
  </head>
  <body>
    <nav id="menu">
      <div id="left_menu">
        <a href="../index.php">Home</a>
        <a href="../profile.php">Profile</a>
      </div>

      <div id="right_menu">
        <a href="../index.php">Logout</a>
      </div>
    </nav>
    <center>
    <div id="event_holder">
    <?php
      require_once('../libraries/db_connect.php');
      $events=$db->get_event_organizers_n_rules_details();
      /*$events=array("quiz"=>array("name"=>"Quiz","description"=>"THis is coding","rules"=>array("1"=>"No lappy","2"=>"No internet")),"web"=>array("name"=>"Web","description"=>"THis is coding","rules"=>array("1"=>"No lappy","2"=>"No internet")),
      "itmanager"=>array("name"=>"IT Manager","description"=>"THis is coding","rules"=>array("1"=>"No lappy","2"=>"No internet")));
      */
      foreach ($events as $key => $value) {
        ?>
        <div class="event_block" onclick="event<?php echo $key?>dialog.open()">
          <span><img src="../images/<?php echo $value['code_name']?>.png" width="230px" height="230px"/></span>
        </div>
        <?php
      }
    ?>
    </div>
  </center>
  </body>
<?php
foreach ($events as $key => $value) {
?>
<paper-dialog id="event<?php echo $key?>dialog" style="height:80%;width:70%;padding:7px;background:rgba(10,10,10,0.95); color:#fff;">
  <div id="title_holder">
    <br><br>
    <div style="float:left;display:block;max-width:40%;color:white">
      <div id="title"><?php echo $value['e_name']?></div>
      <br><br>
      <article style="font-size:17px;">
        <?php
          echo $value["description"];
        ?>
      </article>
    </div>
    <img class="event_image" src="../images/<?php echo $value['code_name']?>.png" height="200" width="400"/>

  </div>
  <paper-dialog-scrollable>
  <div id="rules">

    <ul>
      <?php
        foreach($value["rules"] as $key => $value){
          echo "<li>".$value['rule']."</li>";
        }
      ?>
    </ul>
  </div>
</paper-dialog-scrollable>
</paper-dialog>
<?php
}
?>

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

</html>

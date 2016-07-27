<html>
  <head>

    <link rel="import" href="../bower_components/paper-dialog/paper-dialog.html">
    <style>
      .event_block{
        background:#ac3;
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
        padding-top:50px;
        padding-bottom: 30px;
        float:left;
        width:99%;
        background:#007DAF;
      }
      #menu  a{
        text-decoration: none;
        color:white;
        padding:15px;
      }
      #left_menu{
        float:left;
      }
      #right_menu{
        float:right;
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
      $events=array("quiz"=>array("name"=>"Quiz","description"=>"THis is coding","rules"=>array("1"=>"No lappy","2"=>"No internet")),"web"=>array("name"=>"Web","description"=>"THis is coding","rules"=>array("1"=>"No lappy","2"=>"No internet")),
      "itmanager"=>array("name"=>"IT Manager","description"=>"THis is coding","rules"=>array("1"=>"No lappy","2"=>"No internet")));

      foreach ($events as $key => $value) {
        ?>
        <div style="" class="event_block" onclick="<?php echo $key?>dialog.open()">
          <span><?php echo $value['name']?></span>
          <article>
            <?php
              echo $value["description"];
            ?>
          </article>
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
<paper-dialog id="<?php echo $key?>dialog" style="height:80%;width:80%;">
  <!--<img src="../images/poster.jpg" height="95%"/>-->
  <div id="rules">
    <ul>
      <?php
        foreach($value["rules"] as $key => $value){
          echo "<li>".$value."</li>";
        }
      ?>
    </ul>
  </div>
</paper-dialog>
<?php
}
?>
</html>

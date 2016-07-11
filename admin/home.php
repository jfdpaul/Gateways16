<?php
  session_start();
?>
<html>
  <?php
    if( $_SESSION['id']==''){
      $_SESSION["message"]="Don't act smart";
      header('Location: ./index.php');
    }
  echo '<h2>Welcome ADMIN</h2>';
  <div id="menu">
    <a href="#">List of colleges</a>
  </div>
  ?>
</html>

<?php
  session_start();
?>
<html>
  <?php
    echo $_SESSION['message'];
    session_unset();
  ?>
  <form id="login-form" method="post" action="authenticate.php">
    <input name="uname" type="text" placeholder="username" required>
    <input name="password" type="password" placeholder="password" required>
    <br><input type="submit">
  </form>

</html>

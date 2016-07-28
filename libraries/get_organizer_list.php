<?php //ajax page
  require_once('db_connect.php');
  $res=$db->get_organizer_details();
  echo "<table border=1>";
  echo "<tr>";
  echo "<td>Organizer Id</td><td>Organizer Name</td><td>Mobile</td><td>Email</td><td>Username</td><td>Password</td><td>Privilege</td>";
  foreach($res as $key => $value){
    echo "<tr>";
    echo "<td>".$value['o_id']."</td>";
    echo "<td>".$value['name']."</td>";
    echo "<td>".$value['mobile']."</td>";
    echo "<td>".$value['email']."</td>";
    echo "<td>".$value['username']."</td>";
    echo "<td>".$value['password']."</td>";
    echo "<td>".$value['privilege']."</td>";
    echo "</tr>";
  }
  echo "</table>";

?>

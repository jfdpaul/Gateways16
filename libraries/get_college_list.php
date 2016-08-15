<?php //ajax page
  require_once('db_connect.php');
  $res=$db->get_college_details();
  echo "<table border='1'>";
  echo "<tr>";
  echo "<td>College Id</td><td>College Name</td><td>Password</td><td>Email</td><td>Contact</td><td>Accomodation</td><td>Address</td>";
  foreach($res as $key => $value){
    echo "<tr>";
    echo "<td>".$value['col_id']."</td>";
    echo "<td>".$value['name']."</td>";
    echo "<td>".$value['password']."</td>";
    echo "<td>".$value['email']."</td>";
    echo "<td>".$value['contact']."</td>";
    echo "<td>".$value['accomodation_count']."</td>";
    echo "<td>".$value['address']."</td>";
    echo "</tr>";
  }
  echo "</table>";

?>

<?php //ajax page
  require_once('db_connect.php');
  $res=$db->get_participant_details();
  echo "<table border=1>";
  echo "<tr>";
  echo "<td>participant Id</td><td>First Name</td><td>Last Name</td><td>Mobile</td><td>Email</td><td>Col ID</td>";
  foreach($res as $key => $value){
    echo "<tr>";
    echo "<td>".$value['p_id']."</td>";
    echo "<td>".$value['first_name']."</td>";
    echo "<td>".$value['last_name']."</td>";
    echo "<td>".$value['mobile']."</td>";
    echo "<td>".$value['email']."</td>";
    echo "<td>".$value['col_id']."</td>";
    echo "</tr>";
  }
  echo "</table>";

?>

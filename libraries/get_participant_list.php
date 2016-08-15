<?php //ajax page
  require_once('db_connect.php');
  $res=$db->get_participant_details();
  echo "<table border=1>";
  echo "<tr>";
  echo "<td>participant Id</td><td>Name</td><td>Mobile</td><td>Email</td><td>College</td>";
  foreach($res as $key => $value){
    echo "<tr>";
    echo "<td>".$value['p_id']."</td>";
    echo "<td>".$value['p_name']."</td>";
    echo "<td>".$value['mobile']."</td>";
    echo "<td>".$value['email']."</td>";
    echo "<td>".$value['col_name']."</td>";
    echo "</tr>";
  }
  echo "</table>";

?>

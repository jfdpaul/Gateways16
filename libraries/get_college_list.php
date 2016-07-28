<?php //ajax page
  require_once('db_connect.php');
  $res=$db->get_college_details();
  echo "<table border='1'>";
  echo "<tr>";
  echo "<td>College Id</td><td>College Name</td>";
  foreach($res as $key => $value){
    echo "<tr>";
    echo "<td>".$value['col_id']."</td>";
    echo "<td>".$value['name']."</td>";
    echo "</tr>";
  }
  echo "</table>";

?>

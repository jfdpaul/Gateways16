<?php //ajax page
  require_once('db_connect.php');
  $res=$db->get_event_details();
  echo "<table border=1>";
  echo "<tr>";
  echo "<td>Event Id</td><td>Event Name</td><td>Start time</td><td>End time</td><td>Description</td>";
  foreach($res as $key => $value){
    echo "<tr>";
    echo "<td>".$value['e_id']."</td>";
    echo "<td>".$value['name']."</td>";
    echo "<td>".$value['start_time']."</td>";
    echo "<td>".$value['end_time']."</td>";
    echo "<td>".$value['description']."</td>";
    echo "</tr>";
  }
  echo "</table>";

?>

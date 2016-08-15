<?php //ajax page
  require_once('db_connect.php');
  $res=$db->get_event_score_details_for_id($_REQUEST['e_id']);
  echo "<table border='1'>";
  echo "<tr>";
  echo "<td>Score</td><td>Team Id</td><td>Participant</td><td>College Name</td>";
  foreach($res as $key => $value){
    echo "<tr>";
    echo "<td>".$value['marks']."</td>";
    echo "<td>".$value['t_id']."</td>";
    echo "<td>".$value['p_name']"</td>";
    echo "<td>".$value['col_name']."</td>";
    echo "</tr>";
  }
  echo "</table>";

?>

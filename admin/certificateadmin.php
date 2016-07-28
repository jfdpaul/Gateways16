<html>
<head>
  <script  src="../jquery.min.js"></script>
  <style>
    body{
      color:white;
    }
    .menu_item{
      text-decoration: none;
      color:white;
      background-color:black;
      padding: 5px;
    }
    .holder{
      padding:9px;
      background-color: brown;

    }
  </style>
</head>
<body>

  <div class="holder">
    <div>
      <?php
        require_once('../libraries/db_connect.php');
        $res=$db->get_event_details();
        foreach($res as $key => $value){
          echo "<a class='menu_item' href='#' id='".$value["e_id"]."'>".$value["name"]."</a>";
        }

        echo "<script>";
        echo "$(document).ready(function() {";
        foreach($res as $key => $value){
          echo  " $('#".$value['e_id']."').click(function(event){";
          echo  "$('#event_details').load('../libraries/get_event_score_details_for_id.php', {'e_id':".$value['e_id']."} );";
          echo   "});";
          }
          echo  "});";
          echo "</script>";
       ?>
    </div>
    <div id="event_details">
    </div>
  </div>
  <hr>
  <div class="holder">
    <?php
      require_once('../libraries/db_connect.php');
      $res=$db->get_college_scores();
      echo "<table border='1'>";
      echo "<tr><td>Total Score</td><td>College Name</td></tr>";
      foreach($res as $key => $value){
        echo "<tr>";
        echo "<td>".$value['score']."</td>";
        echo "<td>".$value['name']."</td>";
        echo "</tr>";
      }
      echo "</table>";
    ?>
  </div>
</body>
</html>

<?php
?>

<html>
  <body>
    <table border="4">
      <?php
        $sch=array("start_time"=>"9","end_time"=>"17","events"=>array("Coding"=>array("start_time"=>"11","end_time"=>"13","venue"=>"LAB-A"),"Gaming"=>array("start_time"=>"12","end_time"=>"14","venue"=>"LAB-B")));

        $s_time=$sch["start_time"];
        $e_time=$sch["end_time"];
        $events=$sch["events"];

        echo "<tr><td></td>";
        for($i=$s_time;$i<$e_time;$i++){
          $from=(int)$i;
          $to=(int)$i+1;
          if($from>12)
            $from=$from-12;
          if($to>12)
            $to=$to-12;
          echo "<td>".$from." - ".$to."</td>";
        }
        echo "</tr>";
        foreach($events as $key => $value){
          echo "<tr><td>".$key."</td>";
          for($i=(int)$s_time;$i<(int)$value['start_time'];$i++){
            echo "<td>";
            echo "";
            echo "</td>";
          }

          echo "<td colspan=".(int)((int)$value['end_time'] - (int)$value['start_time']).">";
          echo $value['venue'];
          echo "</td>";

          for($i=(int)$value['end_time'];$i<(int)$e_time;$i++){
            echo "<td>";
            echo "";
            echo "</td>";
          }
          echo "</tr>";
        }
      ?>
    </table>
  </body>
</html>

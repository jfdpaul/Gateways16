<?php

class db_connect{
    // property declaration
    private $dbhost = 'localhost';
    private $dbuser = 'root';
    private $dbpass = 'root';
    private $conn;
    /*
    function __constructor(){
      $dbhost = 'localhost';
      $dbuser = 'root';
      $dbpass = 'root';
    }
    */

    public function connect(){

          $msg='';
          $this->conn = mysql_connect($this->dbhost, $this->dbuser, $this->dbpass,'gateways');
          if(! $this->conn ){
            $msg='Could not connect: ' . mysql_error();
          }
          else
          $msg= 'Connected successfully';
          return json_encode(array('message'=>$msg));
    }

    /*Function to authenticate username and password from organizers table*/
    public function authenticate_organizer($uname,$password){

      $sql = "SELECT privilege,password FROM organizers where username='$uname'";

      mysql_select_db( 'gateways' );
      $retval = mysql_query( $sql, $this->conn );
      if(! $retval ){
       die('Could not get data: ' . mysql_error());
      }

      $row = mysql_fetch_array($retval, MYSQL_ASSOC);
      if($password == $row['password']){
          return array("message"=>"match","privilege"=>$row['privilege']) ;
        }
      else
        return array("message"=>"no match") ;
    }

      /*Function to get organizer details (e_id) */
      public function get_organizer_details($uname,$password){

        $sql = "SELECT events.e_id,events.name FROM events,organizers,events_organizers where username='$uname' and password='$password' and organizers.o_id = events_organizers.o_id and events.e_id=events_organizers.e_id";

        mysql_select_db( 'gateways' );
        $retval = mysql_query( $sql, $this->conn );
        if(! $retval ){
         die('Could not get data: ' . mysql_error());
        }

        $row = mysql_fetch_array($retval, MYSQL_ASSOC);
        if($row['e_id']!=''){
            return array("message"=>"success","e_id"=>$row['e_id'],"event_name"=>$row['name']) ;
          }
        else
          return array("message"=>"failure") ;
      }

      /*Returns all participant names, team_id and college name for an event_id*/
      public function get_participants_for_event_id($e_id){

        $sql="SELECT teams.t_id,teams.p_id,first_name,last_name,colleges.name,teams_events.marks from colleges,participants,teams_events,teams where $e_id=teams_events.e_id and teams.t_id = teams_events.t_id and teams.p_id= participants.p_id and colleges.col_id=participants.col_id order by teams.t_id,colleges.col_id";

        mysql_select_db( 'gateways' );
        $retval = mysql_query( $sql, $this->conn );
        if(! $retval ){
         die('Could not get data: ' . mysql_error());
        }

        $rows=array();
        $count=1;
        while(($row = mysql_fetch_array($retval, MYSQL_ASSOC))!=null){

          //echo json_encode($row)."<br>";
          $rows=$rows+array($count=>$row);
          $count=$count+1;
        }
        return $rows;
      }

      /*Function to get list of events a participant is participating in*/
      public function get_participants_events_for_pid($p_id){

        $sql="SELECT events.name from events,teams_events,teams where $p_id=teams.p_id and teams.t_id=teams_events.t_id and teams_events.e_id=events.e_id";

        mysql_select_db( 'gateways' );
        $retval = mysql_query( $sql, $this->conn );
        if(! $retval ){
         die('Could not get data: ' . mysql_error());
        }

        $rows=array();
        $count=1;
        while(($row = mysql_fetch_array($retval, MYSQL_ASSOC))!=null){

          //echo json_encode($row)."<br>";
          $rows=$rows+array($count=>$row);
          $count=$count+1;
        }
        return $rows;
      }

      /* Function to add all team members in argument to a new team for an event (e_id) */
      public function add_team_to_db($e_id,$team_members){

        mysql_select_db( 'gateways' );
        $sql="INSERT into teams_events(e_id,marks) values($e_id,0)";

        $retval = mysql_query( $sql, $this->conn );
        if(! $retval ){
         die('Could not insert data 111: '.$sql.' ' . mysql_error());
        }

          //get newly created t_id
        $sql="SELECT max(t_id) t_id from teams_events";
        $retval = mysql_query( $sql, $this->conn );
        if(! $retval ){
         die('Could not insert data  max: ' . mysql_error());
        }
        else {
          $row=mysql_fetch_array($retval, MYSQL_ASSOC);
          $t_id=$row['t_id'];
        }

        //for each participant_id add a new entry with t_id to teams table
        foreach($team_members as $key => $value){
          $sql="INSERT into teams(t_id,p_id) values($t_id,$value)";
          $retval = mysql_query( $sql, $this->conn );
          if(! $retval ){
           die('Could not insert data '.$t_id.'sfd'.$value.' '.mysql_error());
          }
        }
      }



      /*Function to set score for a given team id*/
      public function add_score_for_tid($t_id,$score){
        $sql="UPDATE teams_events set marks = $score where t_id = $t_id";

        mysql_select_db( 'gateways' );
        $retval = mysql_query( $sql, $this->conn );
        if(! $retval ){
         die('Could not get data: ' . mysql_error());
        }
      }
}// end of class

$db=new db_connect();
$db->connect();
//$db->get_participants_events_for_id(5);
?>

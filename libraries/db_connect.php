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
      public function get_organizer_details_for_uname_password($uname,$password){

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
         die('Could not insert data : '.$sql.' ' . mysql_error());
        }

          //get newly created t_id
        $sql="SELECT max(t_id) t_id from teams_events";
        $retval = mysql_query( $sql, $this->conn );
        if(! $retval ){
         die('Could not insert data max: ' . mysql_error());
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

/**ADMIN PARTICIPANT*/
      /*Function to add a new college*/
      public function add_new_participant($first_name,$last_name,$email,$mobile,$col_id){
        $sql="INSERT into participants(first_name,last_name,email,mobile,col_id) values('$first_name','$last_name','$email','$mobile',$col_id)";

        mysql_select_db( 'gateways' );
        $retval = mysql_query( $sql, $this->conn );
        if(! $retval ){
         die('Could not insert data: ' . mysql_error());
        }
      }

      /*Function to show college details*/
      public function get_participant_details(){
        $sql="SELECT * from participants";

        mysql_select_db( 'gateways' );
        $retval = mysql_query( $sql, $this->conn );
        if(! $retval ){
         die('Could not insert data: ' . mysql_error());
        }

        $rows=array();
        $count=1;
        while(($row = mysql_fetch_array($retval, MYSQL_ASSOC))!=null){
          $rows=$rows+array($count=>$row);
          $count=$count+1;
        }
        return $rows;
      }

      /*Function to delete a college by its id*/
      public function delete_participant_by_id( $p_id ){
        $sql="DELETE from participants where p_id = $p_id";

        mysql_select_db( 'gateways' );
        $retval = mysql_query( $sql, $this->conn );
        if(! $retval ){
         die('Could not delete data: ' . mysql_error());
       }
      }

      /*Function to update a college by its id*/
      public function update_participant_by_id( $p_id, $first_name,$last_name,$email,$mobile,$col_id ){

        if($p_id!=null){
          mysql_select_db( 'gateways' );
          $sql="SELECT * from participants where p_id=$p_id";
          $retval = mysql_query( $sql, $this->conn );
          if(! $retval ){
           die('Could not delete data: ' . mysql_error());
          }
          $row = mysql_fetch_array($retval, MYSQL_ASSOC);
          if($first_name==null)
            $first_name=$row['first_name'];
          if($last_name==null)
            $last_name=$row['last_name'];
          if($email==null)
            $email=$row['email'];
          if($mobile==null)
            $mobile=$row['mobile'];
          if($col_id==null)
            $col_id=$row['col_id'];
          $sql="UPDATE participants SET first_name = '$first_name', last_name='$last_name', email='$email',mobile='$mobile',col_id=$col_id where p_id = $p_id";

          mysql_select_db( 'gateways' );
          $retval = mysql_query( $sql, $this->conn );
          if(! $retval ){
           die('Could not delete data: ' . mysql_error());
         }
       }
      }

/**ADMIN EVENTS*/
      //Function to add a new college
      public function add_new_event($name,$description,$start_time,$end_time){
        $sql="INSERT into events(name,description,start_time,end_time) values('$name','$description','$start_time','$end_time')";

        mysql_select_db( 'gateways' );
        $retval = mysql_query( $sql, $this->conn );
        if(! $retval ){
         die('Could not insert data: ' . mysql_error());
        }
      }

      //Function to show college details
      public function get_event_details(){
        $sql="SELECT * from events";

        mysql_select_db( 'gateways' );
        $retval = mysql_query( $sql, $this->conn );
        if(! $retval ){
         die('Could not insert data: ' . mysql_error());
        }

        $rows=array();
        $count=1;
        while(($row = mysql_fetch_array($retval, MYSQL_ASSOC))!=null){
          $rows=$rows+array($count=>$row);
          $count=$count+1;
        }
        return $rows;
      }

      //Function to delete a college by its id
      public function delete_event_by_id( $e_id ){
        $sql="DELETE from events where e_id = $e_id";

        mysql_select_db( 'gateways' );
        $retval = mysql_query( $sql, $this->conn );
        if(! $retval ){
         die('Could not delete data: ' . mysql_error());
       }
     }

      //Function to update a college by its id
      public function update_event_by_id( $e_id, $name,$description,$start_time,$end_time){
        if($e_id!=null){
          mysql_select_db( 'gateways' );
          $sql="SELECT * from events where e_id=$e_id";
          $retval = mysql_query( $sql, $this->conn );
          if(! $retval ){
           die('Could not delete data: ' . mysql_error());
          }
          $row = mysql_fetch_array($retval, MYSQL_ASSOC);
          if($name==null)
            $name=$row['name'];
          if($description==null)
            $description=$row['description'];
          if($start_time==null)
            $start_time=$row['start_time'];
          if($end_time==null)
            $end_time=$row['end_time'];

          $sql="UPDATE events SET name = '$name', description='$description', start_time='$start_time',end_time='$end_time' where e_id = $e_id";

          $retval = mysql_query( $sql, $this->conn );
          if(! $retval ){
           die('Could not delete data: ' . mysql_error());
         }
       }
     }

/**ADMIN COLLEGE*/
     /*Function to add a new college*/
     public function add_new_college($col_name){
       $sql="INSERT into colleges(name) values('$col_name')";

       mysql_select_db( 'gateways' );
       $retval = mysql_query( $sql, $this->conn );
       if(! $retval ){
        die('Could not insert data: ' . mysql_error());
       }
     }

     /*Function to show college details*/
     public function get_college_details(){
       $sql="SELECT * from colleges";

       mysql_select_db( 'gateways' );
       $retval = mysql_query( $sql, $this->conn );
       if(! $retval ){
        die('Could not insert data: ' . mysql_error());
       }

       $rows=array();
       $count=1;
       while(($row = mysql_fetch_array($retval, MYSQL_ASSOC))!=null){
         $rows=$rows+array($count=>$row);
         $count=$count+1;
       }
       return $rows;
     }

     /*Function to delete a college by its id*/
     public function delete_college_by_id( $col_id ){
       $sql="DELETE from colleges where col_id = $col_id";

       mysql_select_db( 'gateways' );
       $retval = mysql_query( $sql, $this->conn );
       if(! $retval ){
        die('Could not delete data: ' . mysql_error());
      }
     }

     /*Function to update a college by its id*/
     public function update_college_by_id( $col_id, $col_name ){

       if($col_id!=null){
         mysql_select_db( 'gateways' );
         $sql="SELECT * from colleges where col_id=$col_id";
         $retval = mysql_query( $sql, $this->conn );
         if(! $retval ){
          die('Could not delete data: ' . mysql_error());
         }
         $row = mysql_fetch_array($retval, MYSQL_ASSOC);
         if($col_name==null)
           $col_name=$row['name'];

         $sql="UPDATE colleges SET name = '$col_name' where col_id = $col_id";

         mysql_select_db( 'gateways' );
         $retval = mysql_query( $sql, $this->conn );
         if(! $retval ){
          die('Could not delete data: ' . mysql_error());
        }
      }
     }

/**ADMIN ORGANIZER*/
     //Function to add a new college
     public function add_new_organizer($o_name,$o_email,$o_mobile,$o_username,$o_password,$o_privilege){
       $sql="INSERT into organizers(name,email,mobile,username,password,privilege) values('$o_name','$o_email','$o_mobile','$o_username','$o_password',$o_privilege)";

       mysql_select_db( 'gateways' );
       $retval = mysql_query( $sql, $this->conn );
       if(! $retval ){
        die('Could not insert data: ' . mysql_error());
       }
     }

     //Function to show college details
     public function get_organizer_details(){
       $sql="SELECT * from organizers";

       mysql_select_db( 'gateways' );
       $retval = mysql_query( $sql, $this->conn );
       if(! $retval ){
        die('Could not insert data: ' . mysql_error());
       }

       $rows=array();
       $count=1;
       while(($row = mysql_fetch_array($retval, MYSQL_ASSOC))!=null){
         $rows=$rows+array($count=>$row);
         $count=$count+1;
       }
       return $rows;
     }

     //Function to delete a college by its id
     public function delete_organizer_by_id( $o_id ){
       $sql="DELETE from organizers where o_id = $o_id";

       mysql_select_db( 'gateways' );
       $retval = mysql_query( $sql, $this->conn );
       if(! $retval ){
        die('Could not delete data: ' . mysql_error());
      }
    }

     //Function to update a college by its id
     public function update_organizer_by_id( $o_id, $o_name,$o_email,$o_mobile,$o_username,$o_password,$o_privilege ){
       if($o_id!=null){
         mysql_select_db( 'gateways' );
         $sql="SELECT * from organizers where o_id=$o_id";
         $retval = mysql_query( $sql, $this->conn );
         if(! $retval ){
          die('Could not delete data: ' . mysql_error());
         }
         $row = mysql_fetch_array($retval, MYSQL_ASSOC);
         if($o_name==null)
           $o_name=$row['name'];
         if($o_email==null)
           $o_email=$row['email'];
         if($o_mobile==null)
           $o_mobile=$row['mobile'];
         if($o_username==null)
           $o_username=$row['username'];
         if($o_password==null)
           $o_password=$row['password'];
         if($o_privilege==null)
           $o_privilege=$row['privilege'];

         $sql="UPDATE organizers SET name = '$o_name', email ='$o_email', mobile='$o_mobile',username='$o_username',password='$o_password',privilege=$o_privilege where o_id = $o_id";

         $retval = mysql_query( $sql, $this->conn );
         if(! $retval ){
          die('Could not delete data: ' . mysql_error());
        }
      }
    }

    public function get_event_scores_by_event_id($e_id){
      $sql="SELECT marks,teams_events.t_id,first_name,last_name,colleges.name from teams_events,teams,participants,events,colleges where teams_events.t_id=teams.t_id and teams_events.e_id=events.e_id and participants.p_id=teams.p_id and participants.col_id=colleges.col_id and events.e_id =$e_id order by marks desc,teams_events.t_id ";

      mysql_select_db( 'gateways' );
      $retval = mysql_query( $sql, $this->conn );
      if(! $retval ){
       die('Could not delete data: ' . mysql_error());
     }

      $rows=array();
      $count=1;
      while(($row = mysql_fetch_array($retval, MYSQL_ASSOC))!=null){
        $rows=$rows+array($count=>$row);
        $count=$count+1;
      }
      return json_encode($rows);

    }

    public function get_college_scores(){
      $sql="SELECT sum(marks) score,colleges.name from teams_events,teams,participants,colleges where teams_events.t_id=teams.t_id and teams.p_id=participants.p_id and participants.col_id=colleges.col_id group by colleges.col_id order by score desc";

      mysql_select_db( 'gateways' );
      $retval = mysql_query( $sql, $this->conn );
      if(! $retval ){
       die('Could not delete data: ' . mysql_error());
     }

      $rows=array();
      $count=1;
      while(($row = mysql_fetch_array($retval, MYSQL_ASSOC))!=null){
        $rows=$rows+array($count=>$row);
        $count=$count+1;
      }
      return $rows;
    }

    public function get_event_score_details_for_id($e_id){
      $sql="SELECT marks,teams.t_id,participants.first_name,participants.last_name,colleges.name from teams_events,teams,participants,colleges where teams_events.t_id=teams.t_id and teams.p_id=participants.p_id and participants.col_id=colleges.col_id and teams_events.e_id = $e_id order by marks desc";

      mysql_select_db( 'gateways' );
      $retval = mysql_query( $sql, $this->conn );
      if(! $retval ){
       die('Could not delete data: ' . mysql_error());
     }

      $rows=array();
      $count=1;
      while(($row = mysql_fetch_array($retval, MYSQL_ASSOC))!=null){
        $rows=$rows+array($count=>$row);
        $count=$count+1;
      }
      return $rows;
    }

}// end of class

$db=new db_connect();
$db->connect();
//echo $db->get_event_score_details_for_id(1);
?>

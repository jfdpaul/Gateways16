<?php

error_reporting(E_ALL);
  ini_set('display_errors', 1);
class db_connect{
    // property declaration
    private $dbhost = 'localhost';
    private $dbuser = 'root';
    private $dbpass = 'root';
    private $conn;

    public function connect(){

          $msg='';
          $this->conn = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpass,'gateways');
          if(! $this->conn ){
            $msg='Could not connect: ' . mysqli_error($this->conn);
          }
          else
          $msg= 'Connected successfully';
          return json_encode(array('message'=>$msg));
    }
      public function disconnect(){

          @mysqli_close($this->conn) or die(mysqli_error($this->conn));
    }

     /*Function to authenticate username and password from college table*/
    public function authenticate_college($email,$password){

      $email=mysqli_real_escape_string($this->conn,$email);
      $password=mysqli_real_escape_string($this->conn,$password);

      $sql = "SELECT col_id,password FROM colleges where email='$email' AND password='$password'";

      //
      $retval = mysqli_query( $this->conn, $sql );
      if(! $retval ){
       die('Could not get data: ' . mysqli_error($this->conn));
      }

      $row = mysqli_fetch_array($retval,MYSQLI_ASSOC);
      if($password == $row['password']){
          return $row['col_id'] ;
        }
      else
        return -1 ;
    }

    public function get_college_name($col_id){
       $sql = "SELECT name FROM colleges where col_id=$col_id";


      $retval = mysqli_query( $this->conn, $sql );
      if(! $retval ){
       die('Could not get data: ' . mysqli_error($this->conn));
      }

      $row = mysqli_fetch_array($retval,MYSQLI_ASSOC);
          return $row['name'] ;

    }
    /*Function to authenticate username and password from organizers table*/
    public function authenticate_organizer($uname,$password){
      $uname=mysqli_real_escape_string($this->conn,$uname);
      $password=mysqli_real_escape_string($this->conn,$password);
      $sql = "SELECT privilege,password FROM organizers where username='$uname'";
      $retval = mysqli_query( $this->conn,$sql );
      if(! $retval ){
       die('Could not get data: ' . mysqli_error($this->conn));
      }

      $row = mysqli_fetch_array($retval, MYSQLI_ASSOC);
      if($password == $row['password']){
          return array("message"=>"match","privilege"=>$row['privilege']) ;
        }
      else
        return array("message"=>"no match") ;
    }

      /*Function to get organizer details (e_id) */
      public function get_organizer_details_for_uname_password($uname,$password){
        $uname=mysqli_real_escape_string($this->conn,$uname);
        $password=mysqli_real_escape_string($this->conn,$password);

        $sql = "SELECT events.e_id,events.name FROM events,organizers,events_organizers where username='$uname' and password='$password' and organizers.o_id = events_organizers.o_id and events.e_id=events_organizers.e_id";

        $retval = mysqli_query( $this->conn,$sql );
        if(! $retval ){
         die('Could not get data: ' . mysqli_error($this->conn));
        }

        $row = mysqli_fetch_array($retval, MYSQLI_ASSOC);
        if($row['e_id']!=''){
            return array("message"=>"success","e_id"=>$row['e_id'],"event_name"=>$row['name']) ;
          }
        else
          return array("message"=>"failure") ;
      }

      /*Returns all participant names, team_id and college name for an event_id*/
      public function get_participants_for_event_id($e_id){

        $sql="SELECT teams.t_id,teams.p_id,participants.name p_name,colleges.name col_name,teams_events.marks from colleges,participants,teams_events,teams where $e_id=teams_events.e_id and teams.t_id = teams_events.t_id and teams.p_id= participants.p_id and colleges.col_id=participants.col_id order by teams.t_id,colleges.col_id";

        $retval = mysqli_query( $this->conn,$sql );
        if(! $retval ){
         die('Could not get data: ' . mysqli_error($this->conn));
        }

        $rows=array();
        $count=1;
        while(($row = mysqli_fetch_array($retval, MYSQLI_ASSOC))!=null){

          //echo json_encode($row)."<br>";
          $rows=$rows+array($count=>$row);
          $count=$count+1;
        }
        return $rows;
      }

      /*Function to get list of events a participant is participating in*/
      public function get_participants_events_for_pid($p_id){

        $sql="SELECT events.name from events,teams_events,teams where $p_id=teams.p_id and teams.t_id=teams_events.t_id and teams_events.e_id=events.e_id";

        $retval = mysqli_query( $this->conn,$sql );
        if(! $retval ){
         die('Could not get data: ' . mysqli_error($this->conn));
        }

        $rows=array();
        $count=1;
        while(($row = mysqli_fetch_array($retval, MYSQLI_ASSOC))!=null){

          //echo json_encode($row)."<br>";
          $rows=$rows+array($count=>$row);
          $count=$count+1;
        }
        return $rows;
      }

      /* Function to add all team members in argument to a new team for an event (e_id) */
      public function add_team_to_db($e_id,$team_members){

        $sql="INSERT into teams_events(e_id,marks) values($e_id,0)";

        $retval = mysqli_query( $this->conn,$sql );
        if(! $retval ){
         die('Could not insert data : '.$sql.' ' . mysqli_error($this->conn));
        }

          //get newly created t_id
        $sql="SELECT max(t_id) t_id from teams_events";
        $retval = mysqli_query( $this->conn,$sql );
        if(! $retval ){
         die('Could not insert data max: ' . mysqli_error($this->conn));
        }
        else {
          $row=mysqli_fetch_array($retval, MYSQLI_ASSOC);
          $t_id=$row['t_id'];
        }

        //for each participant_id add a new entry with t_id to teams table
        foreach($team_members as $key => $value){
          $sql="INSERT into teams(t_id,p_id) values($t_id,$value)";
          $retval = mysqli_query( $this->conn,$sql );
          if(! $retval ){
           die('Could not insert data '.$t_id.'sfd'.$value.' '.mysqli_error($this->conn));
          }
        }
      }

      /*Function to set score for a given team id*/
      public function add_score_for_tid($t_id,$score){
        $sql="UPDATE teams_events set marks = $score where t_id = $t_id";

        $retval = mysqli_query( $this->conn,$sql );
        if(! $retval ){
         die('Could not get data: ' . mysqli_error($this->conn));
        }
      }

      public function update_accomodation_count($c_id,$count){
        $sql="UPDATE colleges set accomodation_count = $count where col_id = $c_id";

        $retval = mysqli_query( $this->conn,$sql );
        if(! $retval ){
         die('Could not get data: ' . mysqli_error($this->conn));
        }
      }

/**ADMIN PARTICIPANT*/
      /*Function to add a new college*/
      public function add_new_participant($name,$email,$mobile,$col_id){
        $sql="INSERT into participants(name,email,mobile,col_id) values('$name','$email','$mobile',$col_id)";

        $retval = mysqli_query( $this->conn,$sql );
        if(! $retval ){
         die('Could not insert data: ' . mysqli_error($this->conn));
        }
      }

      /*Function to show college details*/
      public function get_participant_details(){
        $sql="SELECT p_id,participants.name p_name,mobile,participants.email,colleges.name col_name from participants,colleges where participants.col_id =colleges.col_id ORDER BY colleges.col_id";

        $retval = mysqli_query( $this->conn,$sql );
        if(! $retval ){
         die('Could not insert data: ' . mysqli_error($this->conn));
        }

        $rows=array();
        $count=1;
        while(($row = mysqli_fetch_array($retval, MYSQLI_ASSOC))!=null){
          $rows=$rows+array($count=>$row);
          $count=$count+1;
        }
        return $rows;
      }

      /*Function to delete a college by its id*/
      public function delete_participant_by_id( $p_id ){
        $sql="DELETE from participants where p_id = $p_id";

        $retval = mysqli_query( $this->conn,$sql );
        if(! $retval ){
         die('Could not delete data: ' . mysqli_error($this->conn));
       }
      }

      /*Function to update a college by its id*/
      public function update_participant_by_id( $p_id, $name,$email,$mobile,$col_id ){


        if($p_id!=null){

          $sql="SELECT * from participants where p_id=$p_id";
          $retval = mysqli_query( $this->conn,$sql );
          if(! $retval ){
           die('Could not delete data: ' . mysqli_error($this->conn));
          }
          $row = mysqli_fetch_array($retval, MYSQLI_ASSOC);
          if($name==null)
            $name=$row['name'];
          if($email==null)
            $email=$row['email'];
          if($mobile==null)
            $mobile=$row['mobile'];
          if($col_id==null)
            $col_id=$row['col_id'];
          $sql="UPDATE participants SET name = '$name', email='$email',mobile='$mobile',col_id=$col_id where p_id = $p_id";


          $retval = mysqli_query( $this->conn,$sql );
          if(! $retval ){
           die('Could not delete data: ' . mysqli_error($this->conn));
         }
       }
      }

/**ADMIN EVENTS*/
      //Function to add a new college
      public function add_new_event($name,$description,$start_time,$end_time){
        $sql="INSERT into events(name,description,start_time,end_time) values('$name','$description','$start_time','$end_time')";

        $retval = mysqli_query( $this->conn,$sql );
        if(! $retval ){
         die('Could not insert data: ' . mysqli_error($this->conn));
        }
      }

      //Function to show details of event table
      public function get_event_details(){
        $sql="SELECT * from events";

        $retval = mysqli_query( $this->conn,$sql );
        if(! $retval ){
         die('Could not insert data: ' . mysqli_error($this->conn));
        }

        $rows=array();
        $count=1;
        while(($row = mysqli_fetch_array($retval, MYSQLI_ASSOC))!=null){
          $rows=$rows+array($count=>$row);
          $count=$count+1;
        }
        return $rows;
      }

      //Function to show all event related details
      public function get_event_organizers_n_rules_details(){
        $sql="SELECT events.e_id,events.code_name,events.name e_name,description from events";
        $retval = mysqli_query( $this->conn,$sql );
        if(! $retval ){
         die('Could not delete data: ' . mysqli_error($this->conn));
       }
       $rows=array();
       $count=1;
       while(($row = mysqli_fetch_array($retval, MYSQLI_ASSOC))!=null){
         $rows=$rows+array($count=>$row);
         $count=$count+1;
       }

       foreach($rows as $key=>$value){
         //echo json_encode($value);
         $sql="SELECT rule from rules where rules.e_id = ".$value['e_id'];

         $retval = mysqli_query( $this->conn,$sql );
         if(! $retval ){
          die('Could not delete data: ' . mysqli_error($this->conn));
        }
        $rule=array();
        $count=1;
        while(($row = mysqli_fetch_array($retval, MYSQLI_ASSOC))!=null){
          $rule=$rule+array($count=>$row);
          $count=$count+1;
        }
        $rows[$value['e_id']]=$rows[$value['e_id']]+array("rules"=>$rule);
        //echo json_encode($value);
      }
       return $rows;

      }


        //Function to show all event related details (including venue and time)
        public function get_event_organizers_rules_venue_time_details(){
          $sql="SELECT events.e_id,events.code_name,events.name e_name,events.description,rounds.start_time,rounds.end_time,venues.name v_name,venues.block,venues.floor,organizers.name o_name,organizers.mobile from events,events_organizers,organizers,venues,rounds where organizers.o_id=events_organizers.o_id and venues.v_id=rounds.v_id and events_organizers.e_id=rounds.e_id and rounds.round_id=1 and events.e_id=events_organizers.e_id";
          $retval = mysqli_query( $this->conn,$sql );
          if(! $retval ){
           die('Error: ' . mysqli_error($this->conn));
           }
           $rows=array();
           $count=1;
           while(($row = mysqli_fetch_array($retval, MYSQLI_ASSOC))!=null){
             $rows=$rows+array($count=>$row);
             $count=$count+1;
           }
           //echo json_encode($rows);

            foreach($rows as $key=>$value){
              //echo json_encode($value);
              $sql="SELECT rule from rules where rules.e_id = ".$value['e_id'];
              $retval = mysqli_query( $this->conn,$sql );
              if(! $retval ){
               die('Could not delete data: ' . mysqli_error($this->conn));
               }
               $rule=array();
               $count=1;
               while(($row = mysqli_fetch_array($retval, MYSQLI_ASSOC))!=null){
                 $rule=$rule+array($count=>$row);
                 $count=$count+1;
               }
               $rows[$value['e_id']]=$rows[$value['e_id']]+array("rules"=>$rule);
               //echo json_encode($value);
             }
            return $rows;
        }

      //Function to delete a college by its id
      public function delete_event_by_id( $e_id ){
        $sql="DELETE from events where e_id = $e_id";

        $retval = mysqli_query( $this->conn,$sql );
        if(! $retval ){
         die('Could not delete data: ' . mysqli_error($this->conn));
       }
     }

      //Function to update a college by its id
      public function update_event_by_id( $e_id, $name,$description,$start_time,$end_time){
        if($e_id!=null){

          $sql="SELECT * from events where e_id=$e_id";
          $retval = mysqli_query( $this->conn,$sql );
          if(! $retval ){
           die('Could not delete data: ' . mysqli_error($this->conn));
          }
          $row = mysqli_fetch_array($retval, MYSQLI_ASSOC);
          if($name==null)
            $name=$row['name'];
          if($description==null)
            $description=$row['description'];
          if($start_time==null)
            $start_time=$row['start_time'];
          if($end_time==null)
            $end_time=$row['end_time'];

          $sql="UPDATE events SET name = '$name', description='$description', start_time='$start_time',end_time='$end_time' where e_id = $e_id";

          $retval = mysqli_query( $this->conn,$sql );
          if(! $retval ){
           die('Could not delete data: ' . mysqli_error($this->conn));
         }
       }
     }

/**ADMIN COLLEGE*/
     /*Function to add a new college*/
     public function add_new_college($col_name){
       $sql="INSERT into colleges(name) values('$col_name')";

       $retval = mysqli_query( $this->conn,$sql );
       if(! $retval ){
        die('Could not insert data: ' . mysqli_error($this->conn));
       }
     }

     /*Function to show college details*/
     public function get_college_details(){
       $sql="SELECT * from colleges";

       $retval = mysqli_query( $this->conn,$sql );
       if(! $retval ){
        die('Could not insert data: ' . mysqli_error($this->conn));
       }

       $rows=array();
       $count=1;
       while(($row = mysqli_fetch_array($retval, MYSQLI_ASSOC))!=null){
         $rows=$rows+array($count=>$row);
         $count=$count+1;
       }
       return $rows;
     }

     /*Function to delete a college by its id*/
     public function delete_college_by_id( $col_id ){
       $sql="DELETE from colleges where col_id = $col_id";

       $retval = mysqli_query( $this->conn,$sql );
       if(! $retval ){
        die('Could not delete data: ' . mysqli_error($this->conn));
      }
     }

     /*Function to update a college by its id*/
     public function update_college_by_id( $col_id, $col_name ){

       if($col_id!=null){

         $sql="SELECT * from colleges where col_id=$col_id";
         $retval = mysqli_query( $this->conn,$sql );
         if(! $retval ){
          die('Could not delete data: ' . mysqli_error($this->conn));
         }
         $row = mysqli_fetch_array($retval, MYSQLI_ASSOC);
         if($col_name==null)
           $col_name=$row['name'];

         $sql="UPDATE colleges SET name = '$col_name' where col_id = $col_id";


         $retval = mysqli_query( $this->conn,$sql );
         if(! $retval ){
          die('Could not delete data: ' . mysqli_error($this->conn));
        }
      }
     }

/**ADMIN ORGANIZER*/
     //Function to add a new college
     public function add_new_organizer($o_name,$o_email,$o_mobile,$o_username,$o_password,$o_privilege){
       $sql="INSERT into organizers(name,email,mobile,username,password,privilege) values('$o_name','$o_email','$o_mobile','$o_username','$o_password',$o_privilege)";

       $retval = mysqli_query( $this->conn,$sql );
       if(! $retval ){
        die('Could not insert data: ' . mysqli_error($this->conn));
       }
     }

     //Function to show college details
     public function get_organizer_details(){
       $sql="SELECT * from organizers";

       $retval = mysqli_query( $this->conn,$sql );
       if(! $retval ){
        die('Could not insert data: ' . mysqli_error($this->conn));
       }

       $rows=array();
       $count=1;
       while(($row = mysqli_fetch_array($retval, MYSQLI_ASSOC))!=null){
         $rows=$rows+array($count=>$row);
         $count=$count+1;
       }
       return $rows;
     }

     //Function to delete a college by its id
     public function delete_organizer_by_id( $o_id ){
       $sql="DELETE from organizers where o_id = $o_id";

       $retval = mysqli_query( $this->conn,$sql );
       if(! $retval ){
        die('Could not delete data: ' . mysqli_error($this->conn));
      }
    }

     //Function to update a college by its id
     public function update_organizer_by_id( $o_id, $o_name,$o_email,$o_mobile,$o_username,$o_password,$o_privilege ){
       if($o_id!=null){

         $sql="SELECT * from organizers where o_id=$o_id";
         $retval = mysqli_query( $this->conn,$sql );
         if(! $retval ){
          die('Could not delete data: ' . mysqli_error($this->conn));
         }
         $row = mysqli_fetch_array($retval, MYSQLI_ASSOC);
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

         $retval = mysqli_query( $this->conn,$sql );
         if(! $retval ){
          die('Could not delete data: ' . mysqli_error($this->conn));
        }
      }
    }

    public function get_event_scores_by_event_id($e_id){
      $sql="SELECT marks,teams_events.t_id,participants.name p_name,colleges.name col_name from teams_events,teams,participants,events,colleges where teams_events.t_id=teams.t_id and teams_events.e_id=events.e_id and participants.p_id=teams.p_id and participants.col_id=colleges.col_id and events.e_id =$e_id order by marks desc,teams_events.t_id ";
      $retval = mysqli_query( $this->conn,$sql );
      if(! $retval ){
       die('Could not delete data: ' . mysqli_error($this->conn));
     }

      $rows=array();
      $count=1;
      while(($row = mysqli_fetch_array($retval, MYSQLI_ASSOC))!=null){
        $rows=$rows+array($count=>$row);
        $count=$count+1;
      }
      return json_encode($rows);

    }

    public function get_college_scores(){
      $sql="SELECT sum(marks) score,colleges.name col_name from teams_events,teams,participants,colleges where teams_events.t_id=teams.t_id and teams.p_id=participants.p_id and participants.col_id=colleges.col_id group by colleges.col_id order by score desc";
      $retval = mysqli_query( $this->conn,$sql );
      if(! $retval ){
       die('Could not delete data: ' . mysqli_error($this->conn));
     }

      $rows=array();
      $count=1;
      while(($row = mysqli_fetch_array($retval, MYSQLI_ASSOC))!=null){
        $rows=$rows+array($count=>$row);
        $count=$count+1;
      }
      return $rows;
    }

    public function get_event_score_details_for_id($e_id){
      $sql="SELECT marks,teams.t_id,participants.name p_name,colleges.name col_name from teams_events,teams,participants,colleges where teams_events.t_id=teams.t_id and teams.p_id=participants.p_id and participants.col_id=colleges.col_id and teams_events.e_id = $e_id order by marks desc";
      $retval = mysqli_query( $this->conn,$sql );
      if(! $retval ){
       die('Could not delete data: ' . mysqli_error($this->conn));
     }

      $rows=array();
      $count=1;
      while(($row = mysqli_fetch_array($retval, MYSQLI_ASSOC))!=null){
        $rows=$rows+array($count=>$row);
        $count=$count+1;
      }
      return $rows;
    }

    /* Function to mark all participants in argument present for an event (e_id) */
    public function mark_participant_present_for_e_id($e_id,$participant_array){

      //for each participant_id add a new entry with t_id to teams table
      for($i=0; $i<count($participant_array) ;$i=$i+1){
        $sql="UPDATE teams,teams_events set teams.present = 1 where teams_events.e_id =$e_id and teams.p_id = $participant_array[$i]";
        $retval = mysqli_query( $this->conn,$sql );
        if(! $retval ){
         die('Could not insert data '.mysqli_error($this->conn));
        }
      }
    }

    public function add_college_participants($c_id,$name,$email,$phone){
        $i=0;
        foreach ($name as $key => $value) {
          $name[$i]=mysqli_escape_string($this->conn,$name[$i]);
          $email[$i]=mysqli_escape_string($this->conn,$email[$i]);
          $phone[$i]=mysqli_escape_string($this->conn,$phone[$i]);
        $sql="INSERT INTO  participants(name,email,mobile,col_id) VALUES('".$name[$i]."','".$email[$i]."',".$phone[$i].",".$c_id.")";
        $retval = mysqli_query( $this->conn,$sql );
        if(! $retval ){
         return -1;
        }

        $i++;
      }
      return 0;
    }

        public function delete_college_participants($p_id){
        $sql="DELETE FROM  participants WHERE p_id=".$p_id;
        $retval = mysqli_query( $this->conn,$sql );
        if(! $retval ){
         die('Could not get data: ' . mysqli_error($this->conn));
        }
        return 0;
      }

        public function update_college_participants($c_id,$p_id,$name,$email,$phone){

              $name=mysqli_escape_string($this->conn,$name);
              $email=mysqli_escape_string($this->conn,$email);
              $phone=mysqli_escape_string($this->conn,$phone);
              $sql="UPDATE participants set name = '$name',email = '$email', mobile=$phone WHERE p_id = $p_id AND col_id = $c_id";
              $retval = mysqli_query( $this->conn,$sql );
              if(! $retval ){
            die('Could not get data: ' . mysqli_error($this->conn));
            }
          }





      public function get_college_participants($c_id){
        $i=0;

        $sql="SELECT * FROM participants WHERE col_id = ".$c_id." ORDER BY p_id DESC";
        $retval = @mysqli_query( $this->conn,$sql )or die('Could not get data: ' . mysqli_error($this->conn));
        $result[][]=array();
        while($row=mysqli_fetch_array($retval,MYSQLI_ASSOC)){
         $result[$i]['pid']=$row['p_id'];
         $result[$i]['name']=$row['name'];
         $result[$i]['email']=$row['email'];
         $result[$i]['mobile']=$row['mobile'];
          $i++;
        }
        return $result;
    }

      public function get_accomodation_count($c_id){
        $sql="SELECT accomodation_count FROM colleges WHERE col_id = ".$c_id;
        $retval = @mysqli_query( $this->conn,$sql )or die('Could not get data: ' . mysqli_error($this->conn));
        $row=mysqli_fetch_array($retval,MYSQLI_ASSOC);
        return $row['accomodation_count'];

      }

}// end of class

$db=new db_connect();
$db->connect();
//echo json_encode($db->get_event_organizers_rules_venue_time_details());
?>

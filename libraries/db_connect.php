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

      $sql = 'SELECT o_id,email, password FROM organizers where email=\''.$uname.'\'';

      mysql_select_db( 'gateways' );
      $retval = mysql_query( $sql, $this->conn );
      if(! $retval ){
       die('Could not get data: ' . mysql_error());
      }

      $row = mysql_fetch_array($retval, MYSQL_ASSOC);
      if($password == $row['password']){
          return array("message"=>"match","id"=>$row['o_id']) ;
        }
      else
        return array("message"=>"no match") ;
    }

    /*Function to return list of participants from a college in an event from event_participants table*/
    public function get_event_participants_details_for_college($eId,$colId){

      $sql = 'SELECT o_id,email, password FROM organizers where email=\''.$uname.'\'';

      mysql_select_db( 'gateways' );
      $retval = mysql_query( $sql, $this->conn );
      if(! $retval ){
       die('Could not get data: ' . mysql_error());
      }

      $row = mysql_fetch_array($retval, MYSQL_ASSOC);
      if($password == $row['password']){
          return array("message"=>"match","id"=>$row['o_id']) ;
        }
      else
        return array("message"=>"no match") ;
    }
}

$db=new db_connect();
$db->connect();
?>

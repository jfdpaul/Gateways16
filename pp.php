<html>
<head>
<title>Connecting MySQL Server</title>
</head>
<body>
<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = 'root';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   if(! $conn )
   {
     die('Could not connect: ' . mysql_error());
   }
   echo 'Connected successfully::';

	   mysql_select_db( 'gateways' );
	$sql = 'SELECT p_id, first_name FROM participants';

	$retval = mysql_query( $sql, $conn );
	if(! $retval )
	{
	  die('Could not get data: ' . mysql_error());
	}

	while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
	{
	    echo "<br>Tutorial ID :{$row['p_id']}  <br> ".
		 "Name: {$row['first_name']} <br> ".
		 "--------------------------------<br>";
	}
	echo "Fetched data successfully\n";


   mysql_close($conn);
?>
</body>
</html>

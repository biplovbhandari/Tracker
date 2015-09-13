<?php
        //for local mysql
	// $dbhost="localhost";
	// $dbuser="root@localhost";
	// $dbpass="nahsop";
	// $db = "test123";
	// $con=mysqli_connect($dbhost,$user,$dbpass);
	
	//for 000webhost mysql dbase
	
         
    $mysql_host = ""; //host name
	$mysql_database = ""; //database name
	$mysql_user = ""; //user
	$mysql_password = ""; //password
	
	$con = mysqli_connect($mysql_host,$mysql_user,$mysql_password,$mysql_database);
    	if (!$con){
		// echo json_encode('I am done');
		echo "Failed to connect to MySQL: " . mysqli_connect_errno();
    		exit();
  	}
    	return $con;  
?>

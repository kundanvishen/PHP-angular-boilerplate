<?php
	session_start(); 

	// Turn off warning and notices
	error_reporting(E_ERROR);

	$servername = "servername";
	$username 	= "username";
	$password 	= "password";
	$dbname		= "db_name";
	

	$mysqli = new mysqli($servername, $username, $password, $dbname) or die(mysqli_error());
	/* check connection */
	if($mysqli->connect_errno) 
	{
		printf("Connection failed: %s\n", $mysqli->connect_error);
		exit();
	}
	
	
	/* check if server is alive */
	/*if ($mysqli->ping()) {
		printf ("Our connection is ok!\n");
	} else {
		printf ("Error: %s\n", $mysqli->error);
	}*/
	
	$baseurl		 		= "http://localhost/";

	//global response for unexpected error
	$AuthResponse  = array(
							"status"	=> 1,
							"msg"		=> "An error occured!",
							"details" 	=> []
						  );
						  
	global $AuthResponse;
?> 
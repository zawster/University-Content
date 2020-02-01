<?php
	$server = "localhost";
	$user = "root";
	$pswd = "admin123";
	$dbname = "university";

// Create connection
	$con = new mysqli($server, $user, $pswd,$dbname);

// Check connection
	if ($con->connect_error) {
    	echo "Connection failed: ".$con->connect_error;
	}
	else{
		//echo "Connected successfully <br>";
	}
?> 




	
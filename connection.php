<?php

$server = "localhost";
$user = ""; #INSERT YOUR USERNAME
$password = "";#INSERT YOUR DBPASSWORD
$database = "facemash";

$conn = mysqli_connect($server, $user, $password, $database);
		
	if (!$conn) {
	
		die("Connection failed!: " . mysqli_connect_error());

	}
	

?>
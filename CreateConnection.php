<?php 
	$servername = "db4free.net";
	$port = "3306";
	$username = "hoangdxgch16435";
	$password = "10111998@";
	$dbname = "hoangdxgch16435";

	
	$conn = new mysqli($servername . ":". $port , $username, 
		$password, $dbname);
	
	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	}	 

	echo "done";

 ?>
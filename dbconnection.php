<?php
	
	$servername = "localhost";
	//$username = "hemal";
	 $username = "root";
	$password = "";
	$dbname = "ttrack";

	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
								}
?>
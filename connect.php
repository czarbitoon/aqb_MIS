<?php

	$servername = "localhost";
	$user = "root";
	$pass = "";
	$db = "aquabest_db";
	$conn = mysqli_connect($servername, $user, $pass, $db);
	if($conn->connect_error) {
		die("Connection failed". $conn->connect_error);
	}
	session_start();
?>
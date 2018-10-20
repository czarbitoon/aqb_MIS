<?php
	$servername = "localhost";
	$user = "root";
	$pass = "";
	$db = "aqb_db";
	$conn = mysqli_connect($servername, $user, $pass, $db);
	date_default_timezone_set("ASIA/MANILA");
	if($conn->connect_error) {
		die("Connection failed". $conn->connect_error);
	}
?>
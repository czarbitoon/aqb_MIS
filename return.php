<?php
require 'connect.php';
include('header.php');
session_start();
?>

<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>RETURN</title>
</head>
<body>
<div class="container">
	<form method="POST"action="return_controller.php">
		<p><label class="field" for="Number of Gallons"><b>Number of gallons returned</b></label>
		<input type="number" placeholder="Number of Gallons" name="quantity" required></p>
		<p><button type="submit" name="submit">Submit</button></p>
</body>
</html>
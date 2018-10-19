<?php
require 'connect.php';
include('header.php');
session_start();
?>

<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>ADD</title>
</head>
<body>

	<div class="container">
		<form method="POST" action="add_controller.php">
			<p><label class="field"><b>Full Name:</b></label>
			<input type="text" placeholder="Full Name" name="name" required></p>
			<p><label class="field"><b>Address: </b></label>
			<input type="text" placeholder="Address" name="address" required></p>
			<p><label class="field"><b>Contact number</b></label>
			<input type="text" placeholder="Contact Number" name="contact" required></p>
			<button type="submit" name="submit">Save</button>
		</form>
	</div>
</body>
</html>
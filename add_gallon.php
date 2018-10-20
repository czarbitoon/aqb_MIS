<?php
require 'connect.php';
include('header.php');
session_start();
?>

<!DOCTYPE html>
<head>
	<title>ADD Gallon</title>
</head>
<body>

	<div class="container">
		<form method="POST" action="add_gallon_controller.php">
			<p><label class="field"><b>Enter number of gallons:</b></label>
			<input type="number" placeholder="No. of gallons" name="quantity" required></p>
			<button type="submit" name="submit">Save</button>
		</form>
	</div>
</body>
</html>
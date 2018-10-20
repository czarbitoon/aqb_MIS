<?php
require 'connect.php';
include('header.php');
session_start();
?>

<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>PURCHASE</title>
</head>
<body>
	<div class="container">
	<form method="POST"action="purchase_controller.php">
		<p><label class="field" for="Number of Gallons"><b>Number of gallons</b></label>
		<input type="number" placeholder="Number of Gallons" name="quantity" required></p>
		<p><label class="field" for="Payment"><b>Amount</b></label>
		<input type="number" placeholder="Amount" name="payment" required></p>
		<p><label class="field" for="Remin"><b>No. of gallons returned</b></label>
		<input type="number" placeholder="Quantity" default= name="remit" value="0"></p>
		<p><button type="submit" name="submit">Submit</button></p>
	</form>
</div>

</body>
</html>
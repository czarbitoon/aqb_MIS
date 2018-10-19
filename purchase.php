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
	
	<?php
	echo $_SESSION["id"];
		$sql = "SELECT * customer_t where id ='" . $_SESSION["id"] . "'";
		$query = mysqli_query($conn,$sql);
		if($query){
			if(mysqli_num_rows($query) > 0){
				while($row = mysqli_fetch_array($query)){
					if($_SESSION['id'] == $row['id']){
					$_SESSION['name'] = $row['name'];
					$_SESSION['address'] = $row['address'];
					$_SESSION['contact'] = $row['contact'];
					echo "</script>alert(" . $_SESSION['name'] .  " " . $_SESSION['address'] . " " .  $_SESSION['contact'] . ")</script>";
					}
				}
			}
		}
	?>

<div class="container">
	<form method="POST" action="payment_action.php">
		<label for="quantity"><b>Quantity</b></label>
		<input type="number" name="quantity" placeholder="quantity" required>
		<label for="payment"><b>Payment</b></label>
		<input type="number" name="payment" placeholder="payment" required>

		<button type="submit" name="submit">Submit</button>
	</form>
</div>

</body>
</html>
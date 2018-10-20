<?php
require 'connect.php';
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<!-- <meta charset="utf-8"> -->
	<!-- <meta name="viewport" content="width=device-width,initial-scale=1">
	<script src="jquery-3.3.1.js"></script> -->
	<script src="customers_script.js"></script>
	<title>Customers</title>
</head>
<body>
	<?php
	include ('header.php');
	?>
	<div>
		<table id="customer" class="customer">
			<thead>
				<th>Name</th>
				<th>Address </th>
				<th>Phone number</th>
				<th><a href = "add.php">Add Customer</a></th>
			</thead>
			<?php
				$sql = "SELECT * from customer_t";
				$query = mysqli_query($conn,$sql);
				if($query) {
					if(mysqli_num_rows($query)>0){
						while($row = mysqli_fetch_array($query)) {
							echo "<tr>";
							echo "<td>" . $row['name'] . "</td>";
							echo "<td>" . $row['address'] . "</td>";
							echo "<td>" . $row['contact'] . "</td>";
							echo "<form method='POST' action='customers_fix.php'>";
							echo "<td><button type='submit' name='purchase' value=" . $row['id'] . ">PURCHASE</button></td>";
							echo "<td><button type='submit' name='return' value=" . $row['id'] . ">RETURN</button></td>";
							echo "<td><button type='submit' name='edit' value=" . $row['id'] . ">EDIT</button></td>";
							echo "<td><button type='submit' name='delete' value=" . $row['id'] . ">DELETE</button></td>";
							echo "</form>";
							echo "<tr>";
						}
					}
				}	
			?>

		</table>
	</div>
</body>
</html>
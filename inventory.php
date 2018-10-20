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
	<title>Inventory</title>
</head>
<body>
	<?php
	include ('header.php');
	?>
	<div>
		<table id="inventory" class="inventory">
			<thead>
				<th>Gallon in stock</th>
				<th>Pending return</th>
				<th><a href = "add_gallon.php">Add Gallon</a></th>
			</thead>
			<?php
				echo "<tr>";
				$sql = "SELECT * from inventory_t";
				$query = mysqli_query($conn,$sql);
				if($query) {
					if(mysqli_num_rows($query)>0){
						while($row = mysqli_fetch_array($query)) {
							echo "<td>".$row['stock']."</td>";
						}
					}
				}



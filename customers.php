<?php
require 'connect.php';
include ('header.php');
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<!-- <meta charset="utf-8"> -->
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<script src="jquery-3.3.1.js"></script>
	<script src="customers_script.js"></script>
	<title>Customers Website</title>
</head>
<body>
<table id="customer">
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
					echo "<script> getData('" . $row['id'] . "','" . $row['name'] . "','" . $row['contact'] . "'); </script> ";
					// $_SESSION['id'] = $row['id'];
					// echo "<tr><td contenteditable='true'>".$row["name"]."</td><td contenteditable='true'>".$row["address"].
					// 	"</td><td contenteditable='true'>".$row["contact"]."</td></tr>";
					// echo "<tr><td contenteditable='true'>".$row["name"]."</td><td>".$row["address"].
					// 	"</td><td>".$row["contact"]."</td></tr>";
					// echo '<tr>';
					// echo '<td>'.$row["name"].'</td>';
					// echo '<td>'.$row["address"].'</td>';
					// echo '<td>'.$row["contact"].'</td>';
					// echo '<td><a href="purchase.php">PURCHASE<?php $_SESSION["edit_id"] = </a></td>';
					// echo '<td><a href="return.php" id="'.$_SESSION['id'].'">RETURN</a></td>';
					// echo '<td><a href="edit.php" id="'.$_SESSION['id'].'">EDIT</a></td>';
					// echo '<td><a href="delete.php" id="'.$_SESSION['id'].'">DELETE</a></td>';
					// echo '</tr>';
					// }
					// echo "</table>";
				}
			}
			else{
				echo "0 result";
			}
		}	
	?>

</table>
</body>
</html>
<?php
include ('connect.php');
include ('header.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Customers</title>
</head>
<body>
<table>
	<tr>
		<th>Name</th>
		<th>Phone number</th>
		<th>Address</th>
	</tr>
	<?php
		$sql = "SELECT name, address, contact from customer_t";

		$query = mysqli_query($conn,$sql);

		if($query) {
			if(mysqli_num_rows($query)>0){
				while($row = mysqli_fetch_array($query)) {
				echo "<tr><td>".$row["name"]."</td><td>".$row["address"].
					"</td><td>".$row["contact"]."</td></tr>";
				}
				echo "</table>";
			}
			else{
				echo "0 result";
			}
		}
	?>
</table>
</body>
</html>

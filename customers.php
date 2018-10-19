<?php
include ('connect.php');
include ('header.php');

?>
<script>
$(document).ready(function(){

	$('#customer tr').click(function(){
		var href = $(this).find("a").attr("href");
		if(href){
			window.location = href;
		}
	});
});	
</script>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<script src="jquery-3.3.1.js"></script>
	<title>Customers Website</title>
</head>
<body>
<table id="customer">
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
<<<<<<< HEAD
				echo "<tr><td contenteditable='true'>".$row["name"]."</td><td contenteditable='true'>".$row["address"].
					"</td><td contenteditable='true'>".$row["contact"]."</td></tr>";
=======
				echo "<tr><td contenteditable='true'>".$row["name"]."</td><td>".$row["address"].
					"</td><td>".$row["contact"]."</td></tr>";
>>>>>>> 52798e3fe2eeff79fc574a0708cb3e0cbeeeeb68
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

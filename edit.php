<?php
require 'connect.php';
session_start();

// $_SESSION['id'] = $_POST['']
$sql = "SELECT * FROM customer_t where id ='" . $_SESSION['id'] . "'";
$query = mysqli_query($conn,$sql);
if($query) {
	if(mysqli_num_rows($query)>0){
		while($row = mysqli_fetch_array($query)){
			if($_SESSION['id'] == $row['id']){
				$_SESSION['name'] = $row['name'];
				$_SESSION['address'] = $row['address'];
				$_SESSION['contact'] = $row['contact'];
				echo "<script>alert(" . $_SESSION['name'] .  " " . $_SESSION['address'] . " " .  $_SESSION['contact'] . ")</script>";
			}
			else{

			}
		}
	}
}

// if(isset($_POST['save']))
// {
// 	$name = $_POST['name'];
// 	$address = $_POST['address'];
// 	$contact = $_POST['contact'];

// 	$sql2 = "UPDATE customer_t SET name = '$name', 
// 			address = '$address', contact = '$contact' WHERE id = $id";
// 	$query = mysqli_query($conn,$sql2);
// 	if(!($query = mysqli_query($conn,$sql2))){
// 		echo "<script>alert('error')</script>";
// 	}
// 	header("Location:edit.php");

// }

?>

<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<script src="customers_script.js"></script>
	<title>EDIT</title>
</head>
<body>
	<?php include('header.php'); ?>
	<div class="container">
	<form method="POST">
		<p><label class="field" for="name"><b>Full Name:</b></label>
		<input type="text" placeholder="Full Name" name="name" value="<?php echo $_SESSION['name']; ?>" required></p>
		<p><label class="field" for="address"><b>Address: </b></label>
		<input type="text" placeholder="Address" name="address" value="<?php echo $_SESSION['address']; ?>" required></p>
		<p><label class="field" for="contact"><b>Contact number</b></label>	
		<input type="text" placeholder="Contact Number" name="contact" value="<?php echo $_SESSION['contact']; ?>" required></p>
		<p><button type="submit" name="save">Save</button></p>
	</form>
</div>

</body>
</html>
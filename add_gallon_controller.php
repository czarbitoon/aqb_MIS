<?php
require 'connect.php';
session_start();

if(isset($_POST['submit'])){
 $add = $_POST['quantity'];

$sql = "UPDATE inventory_t SET stock = stock + '".$add."' WHERE id=1 ";

	if(!($query = mysqli_query($conn,$sql))){
		echo "<script>alert('error')</script>";
	}
}
header("Location:inventory.php");
?>
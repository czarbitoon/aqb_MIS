<?php
require 'connect.php';
session_start();

if(isset($_POST['submit'])){
$remit = $_POST['quantity'];

$sql = "UPDATE inventory_t SET stock = stock + '".$remit."' WHERE id=1 ";

	if(!($query = mysqli_query($conn,$sql))){
		echo "<script>alert('error')</script>";
	}
}
header("Location:customers.php");
?>
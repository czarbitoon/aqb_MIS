<?php
require 'connect.php';
session_start();

if(isset($_POST['submit'])){

	$name = $_POST['name'];
	$address = $_POST['address'];
	$contact = $_POST['contact'];

	$sql = "INSERT INTO customer_t (name, address, contact)VALUES ('" . $name . "', '" . $address . "', '" . $contact . "')";

	if(!($query = mysqli_query($conn,$sql))){
		echo "<script>alert('error')</script>";
	}
	header("Location:customers.php");
}
?>
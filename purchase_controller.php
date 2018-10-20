<?php
require 'connect.php';
session_start();

if(isset($_POST['submit']))
{
	$datetime = date("Y/m/d") . " " . date('H:i:s');;
	$quantity = $_POST['quantity'];
	$payment = $_POST['payment'];
	$remit = $_POST['remit'];
	$total = $quantity-$remit;
	$sql = "INSERT INTO transaction_t (created_at, gallon_used, remit, payment) VALUES ('".$datetime."','".$quantity."','".$remit."','".$payment."')";
	if(!($query = mysqli_query($conn,$sql))){
		echo "<script>alert('error')</script>";
	}

	$sql2 = "UPDATE inventory_t SET stock = stock - '".$total."' WHERE id=1 ";

	if(!($query2 = mysqli_query($conn,$sql2))){
		echo "<script>alert('error')</script>";
	}
}
header("Location:customers.php");
?>
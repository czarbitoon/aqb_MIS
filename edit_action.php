<?php
require 'connect.php';
session_start();

if(isset($_POST['save']))

$sql = "UPDATE customer_t SET name = '".$_POST['name']."', address = '".$_POST['address']."', contact = '".$_POST['contact']."' WHERE id = '".$_SESSION['id']."'";
$query = mysqli_query($conn,$sql);
if(!($query = mysqli_query($conn,$sql))){
		echo "<script>alert('error')</script>";
	}
	header("Location:customers.php");
?>
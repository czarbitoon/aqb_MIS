<?php
include('connect.php');
session_start();

$sql = "DELETE FROM customer_t where id = '".$_SESSION['id']."'";
$query = mysqli_query($conn,$sql);
header("location:customers.php");
?>
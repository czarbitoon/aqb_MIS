<?php
include('connect.php');

$id = $_POST['id'];

$sql = "DELETE FROM customer_t where id = $id";
$query = mysqli_query($conn,$sql);
header("location:customers.php");
?>
<?php
require 'connect.php';
session_start();
$message = '';

	if(isset($_POST['submit']))
	{
	$username = $_POST["username"];
	$password = $_POST["password"];
	$sql = "SELECT * from admin_t where username = '".$username."' AND password = '".$password."'";
	$query = mysqli_query($conn,$sql);

	if($query){
		if(mysqli_num_rows($query)>0){
			while ($row = mysqli_fetch_array($query)) {
				$_SESSION['id'] = row['id'];
				$_SESSION['username'] = row['username']; 
				header("location: main.php");
			}
		}else 
		echo "<script>alert('Wrong Username or Password!');window.location.href='login.php';</script>";
	}
}
?>

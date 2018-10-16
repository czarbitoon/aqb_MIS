<?php
include('connect.php');

$message = '';

	if(isset($_POST['submit']))
	{
	$username = $_POST["username"];
	$password = $_POST["password"];
	$sql = "SELECT * from admin_t where user = '".$username."' AND pass = '".$password."'";
	$query = mysqli_query($conn,$sql);

	if($query){
		if(mysqli_num_rows($query)>0){
			while ($row = mysqli_fetch_array($query)) {
				$_SESSION['admin_id'] = row['admin_id'];
				$_SESSION['username'] = row['username']; 
				header("location: main.php");
			}
		}else 
		echo "<script>alert('Wrong Username or Password!');window.location.href='login.html';</script>";
	}
}
?>

<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="css/style.css"/>

</head>
<body>

		<div class="container">
			<form method="POST">
				<?php echo $message; ?>
			<label for="username"><b>Username</b></label>
			<input type="text" placeholder="Username" name="username" required>

			<label for="password"><b>Password</b></label>
			<input type="password" placeholder="Password" name="password" required>

			<button type="submit" name="submit">Login</button>
	</form>
	
</div>
</body>
</html>
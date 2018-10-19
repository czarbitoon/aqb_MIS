<?php
require 'connect.php';
session_start();
?>
<!DOCTYPE html>
<head>
	<link rel="stylesheet" type="text/css" href="login.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Login</title>

</head>
<body>

		<div id="container">
			<form method="POST" action="login_control.php">	
			<label for="username"><b>Username</b></label>
			<input type="text" placeholder="Username" name="username" required>

			<label for="password"><b>Password</b></label>
			<input type="password" placeholder="Password" name="password" required>

			<button type="submit" name="submit">Login</button>
	</form>
	
</div>
</body>
</html>
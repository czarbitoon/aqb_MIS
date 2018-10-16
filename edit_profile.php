<?php 
 include ('connection.php');

if (isset($_POST['username']))
{
	if($_POST['new_password'] != '')
	{
		$sql = "UPDATE admin_t SET 
		username = '".$_POST["username"]."',
		email = '".$_POST['email']."',
		password = '".$_POST['password']."'
		WHERE admin_id = '".$_SESSION["admin_id"]."'";
	}
	else
	{
		$sql = "UPDATE admin_t SET
		username = '".$_POST["username"]."',
		email = '".$_POST['email']."',
		WHERE admin_id = '".$_SESSION["admin_id"]."'";
	}	
$result=mysqli_query($conn,$sql);
mysqli_fetch_all($result,MYSQLI_ASSOC);
	if(isset($result))
	{
		echo '<div class="alert alert-success">Profile edited</div>';
	}

}
 ?>
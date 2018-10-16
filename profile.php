<?php

include('connect.php');

$sql = "SELECT * from admin_t where admin_id= '".$_SESSION["admin_id"]."'";

$result=mysqli_query($conn,$sql);
mysqli_fetch_all($result,MYSQLI_ASSOC);
$username = '';
$name = '';
$email = '';

foreach ($result as $row) {
	$username = $row['username'];
	$name = $row['name'];
	$email = $row['email'];
}
 include('header.php');
?>
	<div class="panel panel-default">
		<div class="panel-heading">Edit Profile</div>
		<div class="panel-body">
			<form method="POST" id="edit_profile_form">
				<span id="message"></span>
				<div class="form-group">
					<label>username</label>
					<input type="text" name="username" id="username" class="form-control" value="<?php echo $username; ?>" required />
				</div>
				<div class="form-group">
					<label>name</label>
					<input type="text" name="name" id="name" class="form-control" value="<?php echo $name; ?>" required />
				</div>
				<div class="form-group">
					<label>email</label>
					<input type="text" name="email" id="email" class="form-control" value="<?php echo $email; ?>" required />
				</div>

				<hr />
				<label>Leave blank if you do not want to change password</label>
				<div class="form-group">
					<label>New Password</label>
					<input type="password" name="new_password" id="new_password" class="form-control" />
					<label>Re-enter Password</label>
					<input type="password" name="re_enter_password" id="re_enter_password" class="form-control" />
					<span id="error_password"></span>
				</div>
				<div class="form-group">
					<input type="submit" name="edit_profile" id="edit_profile" value="Edit" class="btn btn-info" />
				</div>
			</form>
		</div>
	</div>
<script>
	$(document).ready(function()){
		$('#edit_profile_form').on('submit',function(event)){
			event.preventDefault();
			if ($('#new_password').val() != '')
			{
				if($('#new_password').val() != $('#re_enter_password').val())
				{
					$('#error_password').html('<label class="text-danger">Password not match</label>');
				}
				else
				{
					$('#error_password').html('');
				}
			}
			$('edit_profile').attr('disabled', 'disabled');
			var form_data = $(this).serialize();
			$.ajax({
				url:"edit_profile.php",
				method: "POST",
				data:form_data,
				success:function(data)
				{
					$('#edit_profile').attr('disabled', false)
		 			$('#new_password').val('');
					$('#re_enter_password').val('')
					$('message').html(data); 
				}
			})
		}
	}
</script>
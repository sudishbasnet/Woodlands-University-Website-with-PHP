<div class="panel panel-info">
	<div class="panel-heading">
		<h2>My Profile</h2>
		<img class="img-thumbnail" src="../images/profile.jpg" alt="">
		<div style="float: right; margin-top: -40px;">
			<a class="profilebutton" href="">
				<button type="button" class="btn btn-primary">Request Change In Profile</button>
			</a>
		</div>
	</div>
	<div class="panel-body profile_details">
		<strong>First Name:</strong> <?php echo $fetch_current_user['first_name']; ?>
		<br>
		<strong>Last Name:</strong> <?php echo $fetch_current_user['surname']; ?>
		<br>
		<strong>Username:</strong> <?php echo $fetch_current_user['username'] ?>
		<br>
		<strong>Email:</strong>  <?php echo $fetch_current_user['email'] ?>
		<br>
		<strong>Contact:</strong>  <?php echo $fetch_current_user['phone_number'] ?>
		<br>
		<strong>Role:</strong>  <?php echo $fetch_current_user['role'] ?>
		<br>
		<strong>Date of birth:</strong>  <?php echo $fetch_current_user['date_of_birth'] ?>
		<br>
	</div>
</div>

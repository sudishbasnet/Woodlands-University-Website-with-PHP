<div class="panel panel-info">
	<div class="panel-heading">
		<img class="img-thumbnail" src="../../images/profile.jpg" alt="">
		<h2><?php echo $fetch_current_user['first_name']; ?>  <?php echo $fetch_current_user['surname']; ?></h2>
	</div>
	<div class="panel-body profile_details">
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

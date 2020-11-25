<div class="panel panel-info">
	<div class="panel-heading">
	<a href="newstudent_form&studentId=<?php echo $selectOneStudent['student_id'];?>"><button class="btn btn-primary">Edit</button></a>
	<?php if($selectOneStudent['passed_out'] == 0) {?>
		<a href="students&archiveStdId=<?php echo $selectOneStudent['student_id']; ?>"><button class="btn btn-primary">Archive</button></a>
	<?php } ?>
	</div>
</div>
<!-- <h2 class="text-center"> <strong><?php echo $selectOneStudent['first_name']; ?> </strong></h2> -->
<div>
	<div class="row">
		<div class="col-md-6">
			<div class="well"><h5><strong>Username:</strong> <?php echo $selectOneStudent['username']; ?></h5></div>	
		</div>	
		<div class="col-md-6">
			<div class="well"><h5><strong>First Name:</strong> <?php echo $selectOneStudent['first_name']; ?></h5></div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="well"><h5><strong>Middle Name:</strong> <?php echo $selectOneStudent['middle_name']; ?></h5></div>
		</div>
		<div class="col-md-6">
			<div class="well"><h5><strong>Surname:</strong> <?php echo $selectOneStudent['surname']; ?></h5></div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="well"><h5><strong>Date of Birth:</strong> <?php echo $selectOneStudent['date_of_birth']; ?></h5></div>
		</div>
		<div class="col-md-6">
			<div class="well"><h5><strong>Phone Number:</strong> <?php echo $selectOneStudent['phone_number']; ?></h5></div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="well"><h5><strong>Email Id:</strong> <a href="https://www.gmail.com/" target="_blank"><?php echo $selectOneStudent['email']; ?></a></h5></div>
		</div>
		<div class="col-md-6">
			<div class="well"><h5><strong>Course Assigned:</strong> <?php echo $selectOneStudent['course_assign']; ?></h5></div>
		</div>
		<div class="col-md-6">
			<div class="well"><h5><strong>Modules Enrolled:</strong> 
				<ul><?php 
				foreach ($module as $key ) {
				  	echo '<li>'.$key['module_code'].' ' .$key['module_name'].'</li>';
				  		}
				  		?>
				  	</ul>
				 </div>
		</div>
	</div>

</div>
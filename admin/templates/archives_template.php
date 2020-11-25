<h1 class="text-center"><strong>Archived Datas</strong></h1>
<div class="row">
	<div class="col-sm-6">
		<div class="panel panel-primary">
			<div class="panel-heading">Total Students Archive</div>
			<div class="panel-body">
				<h1>
					<i class="fa fa-address-book-o" style="color: #000B14;"></i>
					<?php 
						echo $students['COUNT(student_id)'];
					?>
				</h1>
			</div>
		</div>
	</div>
	<div class="col-sm-6">
		<div class="panel panel-primary">
			<div class="panel-heading">Total Staff Archive</div>
			<div class="panel-body">
				<h1>
					<i class="fa fa-male" style="color: #000B14;"></i>
					<?php 
						echo $staff['COUNT(staff_id)'];
					?>
				</h1>
			</div>
		</div>
	</div>
	<div class="col-sm-6">
		<div class="panel panel-primary">
			<div class="panel-heading">Total Module Archive</div>
			<div class="panel-body">
				<h1>
					<i class="fa fa-book" style="color: #000B14;"></i>
					<?php 
						echo $modules['COUNT(module_id)'];
					?>
				</h1>
			</div>
		</div>
	</div>
	<div class="col-sm-6">
		<div class="panel panel-primary">
			<div class="panel-heading">Total Course Archive</div>
			<div class="panel-body">
				<h1>
					<i class="fa fa-book" style="color: #000B14;"></i>
					<?php 
						echo $courses['COUNT(course_id)'];
					?>
				</h1>
			</div>
		</div>
	</div>
	<div class="col-sm-6">
		<div class="panel panel-primary">
			<div class="panel-heading">Total Attendance Archive</div>
			<div class="panel-body">
				<h1>
					<i class="fa fa-book" style="color: #000B14;"></i>
					<?php 
						echo $attendance['COUNT(attendance_id)'];
					?>
				</h1>
			</div>
		</div>
	</div>
</div>

<!-- ARCHIVED STUDENTS -->
<h3>Archived Students</h3>
<?php 
	$table->setHeading(['S.N.', 'First Name', 'Email', 'Year', 'Visibility', 'Action']);
	$sn = 1;
	foreach ($viewAllStudents as $viewAllStudentRow) {
		if($viewAllStudentRow['passed_out']==1) $visibility = "Archived";

		$table->setRow([
			$sn++,
			$viewAllStudentRow['first_name'],
			$viewAllStudentRow['email'],
			$viewAllStudentRow['year'],
			$visibility,
			'<a href="viewstudent_data&stdId='.$viewAllStudentRow['student_id'].'">View</a>'
		]);
	}
	$table->generateHTML();
?>
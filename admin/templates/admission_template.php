<div class="panel panel-info">
	<div class="panel-heading">
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#uploaducasFile">Upload UCAS File</button>
		<?php require 'uploaducasfile.php'; ?>
		<span class="dropdown">
			<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" style="color:white;">Sort By <span class="caret"></span></button>
			<ul class="dropdown-menu">
				<li><a href="admission&letterstatus=unconditional">Unconditional</a></li>
				<li><a href="admission&letterstatus=conditional">Conditional</a></li>
				<li><a href="admission">View All</a></li>
			</ul>
		</span>
	</div>
</div>
<h3 class="text-center">Admission Process</h3>
<?php 
	//creating admission table
	$table->setHeading([
		'Actions',
		'S.N',
		'Case Paper',
		'Record Status', 
		'Reason For Dormant', 
		'Letter Status',
		'First Name', 
		'Middle Name', 
		'Surname', 
		'Email Id', 
		'Address', 
		'Phone Number', 
		'Course Enrolled', 
		'Date of Birth',
		'Gender',
		'Father`s Name',
		'Mother`s Name',
		'Parent`s Contact',
		'Father`s Email',
		'Year Assigned',
		]);
	$sn = 1;
	
if(isset($_GET['letterstatus'])){
	foreach ($letterStatus as $addStudentRow) {
		if($addStudentRow['record_status'] == "live") $link = 'Already Verified';
		else $link = '<a href="verify_student&verificationId='.$addStudentRow['admission_id'].'" title="Verify only if the student submit the required documents">Verify Student</a> ';

			$table->setRow([
			$link,			
			$sn++,
			'<a href="casepaper&admissionId='.$addStudentRow['admission_id'].'">Case Paper</a>',		 	
		 	$addStudentRow['record_status'],
		 	$addStudentRow['reason_for_dormant'],
		 	$addStudentRow['letter_status'],
		 	$addStudentRow['first_name'],
		 	$addStudentRow['middle_name'],
		 	$addStudentRow['surname'],
		 	$addStudentRow['email'],
		 	$addStudentRow['address'],
		 	$addStudentRow['phone_number'],
		 	$addStudentRow['course_assign'],
		 	$addStudentRow['date_of_birth'],
		 	$addStudentRow['gender'],
		 	$addStudentRow['father_name'],
		 	$addStudentRow['mother_name'],
		 	$addStudentRow['parent_contact'],
		 	$addStudentRow['father_email'],
		 	$addStudentRow['year_assign'],
			]);
	}
}else{
	foreach ($admissionStudents as $addStudentRow) {
		if($addStudentRow['record_status'] == "live") $link = 'Already Verified';
		else $link = '<a href="verify_student&verificationId='.$addStudentRow['admission_id'].'" title="Verify only if the student submit the required documents">Verify Student</a> ';

			$table->setRow([
			$link,			
			$sn++,
			'<a href="casepaper&admissionId='.$addStudentRow['admission_id'].'">Case Paper</a>',		 	
		 	$addStudentRow['record_status'],
		 	$addStudentRow['reason_for_dormant'],
		 	$addStudentRow['letter_status'],
		 	$addStudentRow['first_name'],
		 	$addStudentRow['middle_name'],
		 	$addStudentRow['surname'],
		 	$addStudentRow['email'],
		 	$addStudentRow['address'],
		 	$addStudentRow['phone_number'],
		 	$addStudentRow['course_assign'],
		 	$addStudentRow['date_of_birth'],
		 	$addStudentRow['gender'],
		 	$addStudentRow['father_name'],
		 	$addStudentRow['mother_name'],
		 	$addStudentRow['parent_contact'],
		 	$addStudentRow['father_email'],
		 	$addStudentRow['year_assign'],
			]);
	}
}
	$table->generateHTML();
?>
<div class="panel panel-info">
	<div class="panel-heading">
		<a href="newstudent_form"><button type="button" class="btn btn-primary">Manually Add Student</button></a>
		<span class="dropdown">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" style="color:white;">List By Year<span class="caret"></span></button>
            <ul class="dropdown-menu" style="margin: 0;">
                <li><a href="students&year=1">First Year</a></li>
                <li><a href="students&year=2">Second Year</a></li>
                <li><a href="students&year=3">Third Year</a></li>
                <li><a href="students">View All Students</a></li>
            </ul>
        </span>
	</div>
</div>

<h3 class="text-center">ALL STUDENT RECORDS</h3>
<div>
	<?php 
	$table->setHeading([
		'S.N',
		'ID',
		'First Name', 
		'Middle Name', 
		'Surname', 
		'Phone Number', 
		'Email Id',
		'Course Assigned',
		'Visibility',
		'Actions',
		'Full Details'
	]);
	$sn = 1;
	foreach ($allStudent as $userRow) {
		if($userRow['passed_out']==0) $visibility = "Visible"; 
		else $visibility = "Archived";

		$table->setRow([
			$sn++,
			$userRow['user_id'], 
			$userRow['first_name'], 
			$userRow['middle_name'], 
			$userRow['surname'], 
			$userRow['phone_number'], 
			'<a href="https://www.gmail.com/" target="_blank">'.$userRow['email'] .'</a>',
			$userRow['course_assign'], 
			'<a href="newstudent_form&studentId='.$userRow['student_id'].'">Edit</a>',
			$visibility,
			'<a href="viewstudent_data&stdId='.$userRow['student_id'].'">View</a>'
		]);
	}
	$table->generateHTML();
	?>
</div>
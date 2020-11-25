<h1 class="text-center">Enrolled Students</h1>
<?php
	$table->setHeading([
		'S.N',
		'username',
		'First Name',
		'Surname',
		'Email Id',
		'Gender',
		'Year Assigned',
		'Course Assigned',
		'Grade'
	]);
	$sn = 1;
	foreach ($student as $userRow) {
		$grade =$grades_tb->select('student_id',$userRow['student_id']);
		$fetch =$grade->fetch();
		$table->setRow([
			$sn++,
			$userRow['username'], 
			$userRow['first_name'], 
			$userRow['surname'],
			$userRow['email'], 
			$userRow['gender'],
			$userRow['year'], 
			$userRow['course_assign'], 
			$fetch['grade_name']
		]);
	}
	$table->generateHTML();
?>


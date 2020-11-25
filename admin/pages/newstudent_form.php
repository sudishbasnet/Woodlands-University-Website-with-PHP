<?php 
	$courseName = $courses_tb->select('course_archive', 0);

	if(isset($_GET['studentId'])){
		$showStudents = $students_tb->selectJoinWithAnd('users_tb', 'user_id', 'student_id', $_GET['studentId']);
		$fetchedStudent = $showStudents->fetch();

		$sendVars = [
			'users_tb' => $users_tb,
			'students_tb' => $students_tb,
			'fetchedStudent' => $fetchedStudent,
			'courseName' => $courseName
		];
	}else{
		$sendVars = [
			'users_tb' => $users_tb,
			'students_tb' => $students_tb,
			'courseName' => $courseName
		];
	}

	$wissTitle = "Student From -WISS";
	$wissContent = loadTemplates('../templates/forms/newstudent_form_template.php', $sendVars);
?>
<?php 
	require '../model/archiveAttendance.php';

	if (isset($_GET['module'])&& isset($_GET['student'])) 
		$attendance =$attendance_tb->select2('student_id',$_GET['student'],'module_id',$_GET['module']);

	else if (isset($_GET['module'])) 
		$attendance =$attendance_tb->Group('student_id','module_id',$_GET['module']);



	else
		$attendance =$attendance_tb->Group('student_id','module_id','module_id');
		
		$modules =$attendance_tb->groupOrder('module_id','module_id');

		$sendVars = [
		'attendance' =>$attendance,
		'table' =>$table,
		'attendance_tb' =>$attendance_tb,
		'users_tb' =>$users_tb,
		'students_tb' =>$students_tb,
		'modules' =>$modules,
		'modules_tb' =>$modules_tb
	];

	$wissTitle = "Attendance Records - WISS";
	$wissContent = loadTemplates('../templates/attendance_template.php', $sendVars);
?>





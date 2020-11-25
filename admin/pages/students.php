<?php 
	require '../model/archiveStudent.php';
	if (isset($_GET['year'])) 
		$allStudent =$students_tb->selectJoinWithAnd1('users_tb','user_id','year',$_GET['year']);
	
	else
	$allStudent = $students_tb->selectJoin('users_tb', 'user_id');

	$sendVars = [
		'table' => $table,
		'allStudent' => $allStudent
	];

	$wissTitle = "Student Records - WISS";
	$wissContent = loadTemplates('../templates/student_record_template.php', $sendVars);
?>
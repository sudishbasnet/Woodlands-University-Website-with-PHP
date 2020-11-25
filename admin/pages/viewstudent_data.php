<?php 
	$allStudent = $students_tb->selectJoinWithAnd('users_tb', 'user_id', 'student_id', $_GET['stdId']);
	$selectOneStudent = $allStudent->fetch();
	$module = $modules_tb->select('module_year',$selectOneStudent['year']);
	$sendVars = [
		'table' => $table,
		'selectOneStudent' => $selectOneStudent,
		'module' => $module
	];

	$wissTitle = "Individual  Student Records - WISS";
	$wissContent = loadTemplates('../templates/viewstudent_data_template.php', $sendVars);
?>
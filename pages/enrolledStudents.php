<?php
	$staffId =$_SESSION['staff_session_id'];

	$findStaff =$staffs_tb->select('user_id',$staffId);
	$FetchStaff =$findStaff->fetch();
	$moduleId =$FetchStaff['module_id'];


   	$fetchModule =$modules_tb->select('module_id',$moduleId);
   	$fetch =$fetchModule->fetch();
   	$findCourse =$fetch['course_id'];
   	$year =$fetch['module_year'];


   	
   	$student =$students_tb->selectJoinWithAnd2('users_tb', 'user_id', 'course_assign', $findCourse,'year',$year);




$sendVars = [
	'student'=>$student,
	'table' => $table,
	'grades_tb' => $grades_tb
];

$wissTitle = "Enrolled Students";
$wissContent = loadTemplates('../templates/enrolled_template.php',$sendVars);

?>
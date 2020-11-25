<?php
   	$staffId =$_SESSION['staff_session_id'];

	$findStaff =$staffs_tb->select('user_id',$staffId);
	$FetchStaff =$findStaff->fetch();
	$moduleId =$FetchStaff['module_id'];
	$staff =$FetchStaff['staff_id'];


   	$fetchModule =$modules_tb->select('module_id',$moduleId);
   	$fetch =$fetchModule->fetch();
   	$year =$fetch['module_year'];
   	$findCourse =$fetch['course_id'];
   	
   	$student =$students_tb->selectJoinWithAnd('users_tb', 'user_id', 'course_assign', $findCourse);

$sendVars = [
	'student'=>$student,
	'table' => $table,
	'FetchStaff' =>$FetchStaff,
	'attendance_tb' =>$attendance_tb,
	'moduleId' =>$moduleId,
	'staff' =>$staff,
	'year' =>$year
];

$wissTitle = "Enrolled Students";
$wissContent = loadTemplates('../templates/attendance_template.php',$sendVars);

?>
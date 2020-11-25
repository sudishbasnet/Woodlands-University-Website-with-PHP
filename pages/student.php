<?php 
	$userId =$_SESSION['student_session_id'];
	$student =$students_tb->select('user_id',$userId);
	$fetch =$student->fetch();
	$year =$fetch['year'];
	$announcementThree = $announcements_tb->selectLimitDesc(3, 'announcement_id');
	$showModules = $modules_tb->select2('module_archive', 0,'module_year',$year);
	$sendArray = [
		'showModules' => $showModules,
		'announcementThree' => $announcementThree
	];
	$wissTitle = "Welcome To WISS";
	$wissContent = 	loadTemplates('../templates/userpage_template.php', $sendArray);
?>
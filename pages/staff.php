<?php
	$announcementThree = $announcements_tb->selectLimitDesc(3, 'announcement_id');
	$showStaff =$staffs_tb->select('user_id',$_SESSION['staff_session_id']);
	$FindStaff =$showStaff->fetch();
	$showModules = $modules_tb->select('module_id', $FindStaff['module_id']);	
	$sendArray = [
		'showModules' => $showModules,
		'announcementThree' => $announcementThree
	];
	$wissTitle = "Welcome To WISS";
	$wissContent = 	loadTemplates('../templates/userpage_template.php', $sendArray);


?>
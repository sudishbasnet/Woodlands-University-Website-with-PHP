<?php 
	$announcementThree = $announcements_tb->selectLimitDesc(3, 'announcement_id');
	$sendArray = [
		'table' =>$table,
		'announcementThree' => $announcementThree
	];
	$wissTitle = "Admin Panel - WISS";
	$wissContent = loadTemplates('../templates/admin_template.php', $sendArray);
?>
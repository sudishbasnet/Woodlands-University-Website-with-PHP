<?php 
	$announcementAll = $announcements_tb->selectAll();
	$sendArray = [
		'table' =>$table,
		'announcementAll' => $announcementAll
	];

	$wissTitle = "Announcements- WISS";
	$wissContent = loadTemplates('../templates/announcements_template.php', $sendArray);
?>
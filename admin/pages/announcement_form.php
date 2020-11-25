<?php
	if(isset($_GET['annId'])){
		$selectAnnouncementId = $announcements_tb->select('announcement_id', $_GET['annId']);
		$fetchAnnounce = $selectAnnouncementId->fetch();
		$sendArray = [
			'fetchAnnounce' => $fetchAnnounce,
		];
	}else{
		$sendArray = [];
	}

	$wissTitle = "Announcements Form- WISS";
	$wissContent = loadTemplates('../templates/forms/announcement_form_template.php', $sendArray);
?>
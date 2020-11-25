<?php 
	$announcements_tb = new DatabaseTable('announcements_tb');
	if(isset($_POST['save'])){
		$checkerror = "";
		if($_POST['announcement_date'] == "") $checkerror .= '<h3 class="alert alert-success">Please enter the announcement date</h3>';
		if($_POST['announcement_description'] == "") $checkerror .= '<h3 class="alert alert-success">Please enter the Announcement description</h3>';

		if(empty($checkerror)){
			$sendCriteriaValue = [
				'announcement_id' => $_POST['announcement_id'],
				'announcement_description' => $_POST['announcement_description'],
				'announcement_date' => $_POST['announcement_date'],
				'announcement_visible' => $_POST['announcement_visible']
			];
			$saveAnnouncement = $announcements_tb->saveData($sendCriteriaValue, 'announcement_id');
			if($saveAnnouncement == true){
				echo '<script>alert("Announcement updated");document.location="announcements";</script>';
			}else{
				echo '<script>alert("Announcement Updation Failed");</script>';
			}
		}else{
			echo $checkerror;
		}
	}
?>
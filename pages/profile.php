<?php
	if(isset($_SESSION['staff_session_id'])){
		$current_user = $users_tb->select('user_id', $_SESSION['staff_session_id']);
		$fetch_current_user = $current_user->fetch();
		$sendVars = [
			'fetch_current_user' => $fetch_current_user
		];
	}else{
		$current_user = $users_tb->select('user_id', $_SESSION['student_session_id']);
		$fetch_current_user = $current_user->fetch();
		$sendVars = [
			'fetch_current_user' => $fetch_current_user
		];
	}

	$wissTitle = "Profile";
	$wissContent = 	loadTemplates('../templates/profilepage_template.php', $sendVars);
?>
<?php 
	$current_user = $users_tb->select('user_id', $_SESSION['admin_session_id']);
	$fetch_current_user = $current_user->fetch();
	// print_r($fetch_current_user);

	$datas = [
		'fetch_current_user' =>$fetch_current_user
	];

	$wissTitle = "Profile Page - WISS";
	$wissContent = loadTemplates('../templates/profile_template.php', $datas);
?>
<?php
#https://www.pexels.com/photo/accomplishment-ceremony-education-graduation-267885/
	session_start(); 
	require '../includes/init.php';

	if(isset($_GET['getpage'])){
		if(isset($_SESSION['student_session_id']) || isset($_SESSION['staff_session_id']) || isset($_SESSION['admin_session_id'])){
			require '../pages/' . $_GET['getpage'] . '.php';
		}else{
			require '../pages/home.php';
		}
	}else{
		require '../pages/home.php';
	}

	$sendVariablesArray = [
		'wissTitle' => $wissTitle,
		'wissContent' => $wissContent,
	];

	$loadHTML = loadTemplates('../templates/layout.php', $sendVariablesArray);
	echo $loadHTML;
?>
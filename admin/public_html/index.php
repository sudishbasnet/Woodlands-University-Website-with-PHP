<?php 
	session_start();
	#Single point of entry
	#including the all the connection and 
	require '../includes/init.php';

	#get every page
	if(isset($_GET['getpage'])){
		require '../pages/' . $_GET['getpage'] . '.php';
	}else{
		require '../pages/home.php';
	}

	$sendVariablesArray = [
		'wissTitle' => $wissTitle,
		'wissContent' => $wissContent,
	];

	#layout
	$loadHTML = loadTemplates('../templates/layout.php', $sendVariablesArray);
	echo $loadHTML;

?>
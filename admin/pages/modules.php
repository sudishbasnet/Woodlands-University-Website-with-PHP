<?php 
	require '../model/deleteModule.php';
	require '../model/archiveModule.php';
	
	$showCourse = $courses_tb->selectAll();
	$allModule = $modules_tb->selectJoin('courses_tb', 'course_id');

	$dataArray = [
		'table'=> $table,
		'allModule' => $allModule,
		'showCourse' => $showCourse
	];

	$wissTitle = "Modules Records - WISS";
	$wissContent = loadTemplates('../templates/modules_template.php', $dataArray);
?>
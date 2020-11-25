<?php 
	require '../model/deleteCourse.php';
	require '../model/archiveCourse.php';

	$allCourses = $courses_tb->selectAll();
	
	$dataArray  = [
		'table' => $table,
		'allCourses' => $allCourses
	];

	$wissTitle = "Courses Records - WISS";
	$wissContent = loadTemplates('../templates/courses_template.php', $dataArray);
?>
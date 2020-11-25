<?php 	
	if(isset($_GET['courseId'])){
		$selectedCourse = $courses_tb->select('course_id', $_GET['courseId']);
		$fetchCourse = $selectedCourse->fetch();
		$dataValues = [
			'courses_tb' => $courses_tb,
			'fetchCourse' => $fetchCourse
		];
	}else{
		$dataValues = [
			'courses_tb' => $courses_tb
		];
	}

	$wissTitle = "Courses From -WISS";
	$wissContent = loadTemplates('../templates/forms/newcourse_form_template.php', $dataValues);
?>
<?php 	
	$allCourses = $courses_tb->selectAll();

	if(isset($_GET['moduleId'])){
		$selectedModule = $modules_tb->select('module_id', $_GET['moduleId']);
		$fetchModule = $selectedModule->fetch();
		$dataArray = [
			'allCourses' => $allCourses,
			'modules_tb' => $modules_tb,
			'fetchModule' => $fetchModule
		];
	}else{
		$dataArray = [
			'allCourses' => $allCourses,
			'modules_tb' => $modules_tb
		];
	}

	$wissTitle = "Modules From -WISS";
	$wissContent = loadTemplates('../templates/forms/newmodule_form_template.php', $dataArray);
?>
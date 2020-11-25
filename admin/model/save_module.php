<?php 
	if(isset($_POST['submit'])){
		$checkerror = "";
		if($_POST['module_code'] == "") $checkerror .= '<h3 class="alert alert-success">Please enter the module code</h3>';
		if($_POST['module_name'] == "") $checkerror .= '<h3 class="alert alert-success">Please enter the module name</h3>';
		if($_POST['module_description'] == "") $checkerror .= '<h3 class="alert alert-success">Please enter the module description</h3>';

		if(empty($checkerror)){
			$add_module_data = [
				'module_id' => $_POST['module_id'],
				'module_code' => $_POST['module_code'],
				'module_name' => $_POST['module_name'],
				'module_year' => $_POST['module_year'],
				'module_description' => $_POST['module_description'],
				'course_id' => $_POST['course_id']
			];
			$add_module = $modules_tb->saveData($add_module_data, 'module_id');

			if($add_module == true){
				global $pdo;
				echo '<div class="alert alert-success"><strong>New Module added</strong></div>';
				if (isset($_POST['module_id'])==null) {
				mkdir('../../activities/module '.$pdo->lastInsertId().'');
				mkdir('../../assignment_info/module '.$pdo->lastInsertId().'');
				mkdir('../../assignment_submission/module '.$pdo->lastInsertId().'');
			}
			}else{
				echo '<div class="alert alert-danger"><strong>Error Adding The Module</strong></div>';
			}
		}else{
			echo $checkerror;
		}
	}
?>
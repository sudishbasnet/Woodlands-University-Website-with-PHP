<?php 
	if(isset($_POST['save'])){		
		$checkerror = "";

		if($_POST['course_name'] == "") $checkerror .= '<h3 class="alert alert-success">Please enter the course name</h3>';
		if($_POST['course_description'] == "") $checkerror .= '<h3 class="alert alert-success">Please enter the course description</h3>';
		if(empty($checkerror)){
			$course_data = [
				'course_id'	=>$_POST['course_id'],
				'course_name' => $_POST['course_name'],
				'course_description' => $_POST['course_description'],
			];

			$add_course = $courses_tb->saveData($course_data, 'course_id');
			if($add_course == true){
				header("Location:courses");
			}else{
				echo '<div class="alert alert-danger">Error Saving The Course</div>';
			}
		}else{
			echo $checkerror;
		}
	}
?>
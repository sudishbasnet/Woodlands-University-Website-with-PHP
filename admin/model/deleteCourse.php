<?php 
	if(isset($_GET['deleteCourse_id'])){
		$deleteCourse = $courses_tb->deleteData('course_id', $_GET['deleteCourse_id']);
		if($deleteCourse == true){
			echo "<script>alert('Course Deleted')</script>";
		}
	}
?>
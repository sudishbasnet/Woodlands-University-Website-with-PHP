<?php 
	if(isset($_GET['archiveCoursesId'])){
		$sendData = [
			'course_id' => $_GET['archiveCoursesId'],
			'course_archive' => 1
		];
		$archiveCourse = $courses_tb->updateData($sendData, 'course_id');
		if($archiveCourse == true){
			echo "<script>alert('Module Archived')</script>";
		}
	}

	if(isset($_GET['noArchiveCoursesId'])){
		$sendData = [
			'course_id' => $_GET['noArchiveCoursesId'],
			'course_archive' => 0
		];
		$archiveCourse = $courses_tb->updateData($sendData, 'course_id');
		if($archiveCourse == true){
			echo "<script>alert('Module Unarchived')</script>";
		}
	}
?>
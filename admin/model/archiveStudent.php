<?php 
	if(isset($_GET['archiveStdId'])){
		$sendData = [
			'student_id' => $_GET['archiveStdId'],
			'passed_out' => 1
		];
		$archiveStudent = $students_tb->updateData($sendData, 'student_id');
		if($archiveStudent == true){
			echo "<script>alert('Student Archived')</script>";
		}
	}
?>
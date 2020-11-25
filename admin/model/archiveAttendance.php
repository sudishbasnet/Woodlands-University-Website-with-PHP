<?php 
	if(isset($_GET['archiveAttendance'])){
		$sendData = [
			'attendance_id' => $_GET['archiveAttendance'],
			'attendance_archive' => 1
		];
		$archiveThisAttendance = $attendance_tb->updateData($sendData, 'attendance_id');
		if($archiveThisAttendance == true){
			echo "<script>alert('Attendance Archived')</script>";
		}
	}
	if(isset($_GET['noArchiveAttendance'])){
		$sendData = [
			'attendance_id' => $_GET['noArchiveAttendance'],
			'attendance_archive' => 0
		];
		$archiveThisAttendance = $attendance_tb->updateData($sendData, 'attendance_id');
		if($archiveThisAttendance == true){
			echo "<script>alert('Attendance Unarchived')</script>";
		}
	}
?>
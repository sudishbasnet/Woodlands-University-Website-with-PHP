<?php 
	if(isset($_GET['archiveModuleId'])){
		$sendData = [
			'module_id' => $_GET['archiveModuleId'],
			'module_archive' => 1
		];
		$archiveModule = $modules_tb->updateData($sendData, 'module_id');
		if($archiveModule == true){
			echo "<script>alert('Module Archived')</script>";
		}
	}
	if(isset($_GET['noArchiveModuleId'])){
		$sendData = [
			'module_id' => $_GET['noArchiveModuleId'],
			'module_archive' => 0
		];
		$archiveModule = $modules_tb->updateData($sendData, 'module_id');
		if($archiveModule == true){
			echo "<script>alert('Module Unarchived')</script>";
		}
	}
?>
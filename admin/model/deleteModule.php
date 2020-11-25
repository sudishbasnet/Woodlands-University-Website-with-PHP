<?php 
	if(isset($_GET['deleteModule_id'])){
		$deleteModule = $modules_tb->deleteData('module_id', $_GET['deleteModule_id']);
		if($deleteModule == true){
			echo "<script>alert('Module Deleted')</script>";
		}
	}
?>
<?php
	$assign =$assignments_tb->select('module_id',$_GET['module']);



	if (isset($_POST['saveFile'])) {
		$is_error = "";
		if($_POST['fileName'] == ""){
			echo '<script>alert("Please Enter the name")</script>';
		}
		else if(empty($is_error)){
			$cri =[
				'assignment_file' =>$_POST['fileName'],
				'assignment_name' =>$_POST['assignment_name'],
				'module_id' => $_GET['module']

			];
			$insert =$assignments_tb->saveData($cri);
			if ($_FILES['file']['error'] == 0) {
				$fileName = $_POST['fileName']. '.docx';
				move_uploaded_file($_FILES['file']['tmp_name'], '../assignment_info/module '.$_GET['module'].'/' . $fileName);
			}
			header ('location:module&module='.$_GET['module'].'&info='.$_GET['module'].'');
			
		}else{
			echo $is_error;
		}
	}

	if (isset($_POST['delete'])) {
		$dir = $_POST['location'];
		$file =$_POST['file'];
		unlink($dir.$file.'.docx');
		$delete =$assignments_tb->deleteData('assignment_name',$_POST['delFile']);
		header ('location:module&module='.$_GET['module'].'&info='.$_GET['module'].'');
	}
?>
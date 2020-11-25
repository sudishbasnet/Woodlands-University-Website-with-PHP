<?php 
	if (isset($_POST['saveFile'])) {
		if (isset($_SESSION['student_session_id'])) {
		$cri =[
			'student_id' => $fetchStd['student_id'],
			'module_id'	=> $_GET['submission'],
			'assignment_id'	=>  $_POST['assignment_id'],
			'submission_filename'	=>$_POST['fileName']
		];

		$assignment_submission_tb->insertData($cri);
		global $pdo;

		$cri1 =[
			'student_id' => $fetchStd['student_id'],
			'assignment_id'	=>  $_POST['assignment_id'],
			'submission_id'	=>$pdo->lastInsertId()
			];
		$submit =$grades_tb->insertData($cri1);
		if ($_FILES['file']['error'] == 0) {
				$fileName = $_POST['fileName'].$fetchStd['student_id'].'.docx';
				move_uploaded_file($_FILES['file']['tmp_name'], '../assignment_submission/module '.$_GET['module'].'/' . $fileName);

			echo '<script>alert("File submitted")</script>';
		}
	}
		else
			echo '<h4>Only students can submit</h4>';
	}

	if (isset($_POST['visibility'])) {
		if ($fetchAssignments['submission_visibility']=='yes') 
			$cri =[
			'module_id' =>$_GET['module'],
			'submission_visibility' =>'no'
		];
		
		else
		$cri =[
			'module_id' =>$_GET['module'],
			'submission_visibility' =>'yes'
		];
		$assignments_tb->updateData($cri,'module_id');
		header ('location:module&module='.$_GET['module'].'&submission='.$_GET['submission'].'');
		
	}
?>
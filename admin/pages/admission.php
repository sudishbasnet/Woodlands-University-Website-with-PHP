 <?php 
	$admission_tb = new DatabaseTable('admission_tb');
	
	require '../model/admission_process.php';
	$admissionStudents = $admission_tb->selectAll();

	if(isset($_GET['letterstatus'])){
		$letterStatus = $admission_tb->select('letter_status', $_GET['letterstatus']);

		$sendValues = [
			'users_tb' => $users_tb,
			'table' => $table,
			'admissionStudents' => $admissionStudents,
			'letterStatus' => $letterStatus
		];
	}else{
		$sendValues = [
			'users_tb' => $users_tb,
			'table' => $table,
			'admissionStudents' => $admissionStudents
		];
	}
	
	$wissTitle = "Admission - WISS";
	$wissContent = loadTemplates('../templates/admission_template.php', $sendValues);
?>
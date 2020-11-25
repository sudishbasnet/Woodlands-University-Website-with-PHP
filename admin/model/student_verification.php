<?php 
	if(isset($_GET['verifyStudent']))
	{
		$admission_tb = new DatabaseTable('admission_tb');
		//inserting into the users and student table
		
		$admissionData = $admission_tb->select('admission_id', $_GET['verifyStudent']);
		$fetchAdmissionData = $admissionData->fetch();

		$generatePassword = password_hash($fetchAdmissionData['admission_id'], PASSWORD_DEFAULT);

		$sendUserData = [
			'username' 	=> $fetchAdmissionData['admission_id'],
			'password' 	=> $generatePassword,
			'first_name' => $fetchAdmissionData['first_name'],
			'middle_name' => $fetchAdmissionData['middle_name'],
			'surname' => $fetchAdmissionData['surname'],
			'date_of_birth' => $fetchAdmissionData['date_of_birth'],
			'phone_number' => $fetchAdmissionData['phone_number'],
			'email' => $fetchAdmissionData['email'],
			'gender' => $fetchAdmissionData['gender'],
			'status' => 0,
			'role' => "student"
		];

		$sendToUsers = $users_tb->insertData($sendUserData);

		$lastId =  $users_tb->selectLast('user_id') ;
		$lastIdFetch = $lastId->fetch();

		$sendStudentData = [
			'father_name' => $fetchAdmissionData['father_name'],
			'mother_name' => $fetchAdmissionData['mother_name'],
			'parent_contact' => $fetchAdmissionData['parent_contact'],
			'year' => $fetchAdmissionData['year_assign'],
			'passed_out' => "no",
			'father_email' => $fetchAdmissionData['father_email'],
			'course_assign' => $fetchAdmissionData['course_assign'],
			'user_id' => $lastIdFetch['MAX(user_id)']
		];
		$sendToStudents = $students_tb->insertData($sendStudentData);

		$sendAdmissionData = [
			'admission_id' => $_GET['verifyStudent'],
			'record_status' => 'live'
		];
		$setStudentLive = $admission_tb->updateData($sendAdmissionData, 'admission_id');

		if($sendToUsers==true && $sendToStudents==true && $setStudentLive==true){
			echo '<script>alert("Student Saved");document.location="students"</script>';
		}
	}
?>
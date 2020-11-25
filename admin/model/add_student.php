<?php 
	if(isset($_POST['submit'])){
		// $tableStudentsData = [
		// 	'father_name' => $_POST['father_name'],
		// 	'mother_name' => $_POST['mother_name'],
		// 	'date_of_birth' => $_POST['date_of_birth'],
		// 	'level' => $_POST['level'],
		// 	'passed_out' => $_POST['passed_out'],
		// ];

		// $add_student_table = $tb_students->insertData($tableStudentsData);

		$tableUsersDatas = [
			'user_id' => $_POST['user_id'],
			'username' => $_POST['username'],
			'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
			'first_name' => $_POST['first_name'],
			'last_name' => $_POST['last_name'],
			'date_of_birth' => $_POST['date_of_birth'],
			'email' => $_POST['email'],
			'phone_number' => $_POST['phone_number'],
			'status' => $_POST['status'],
			'role' => $_POST['role']
		];
		$add_user = $users_tb->insertData($tableUsersDatas);

		$tableStudentsData = [
			'father_name' => $_POST['father_name'],
			'mother_name' => $_POST['mother_name'],
			'parent_contact' => $_POST['parent_contact'],
			'year' => $_POST['year'],
			'passed_out' => $_POST['passed_out'],
			'father_email' => $_POST['father_email'],
			'user_id' => $_POST['user_id']
		];

		$add_student_table = $students_tb->insertData($tableStudentsData);
//
		if( $add_user==true && $add_student_table==true){
			echo '<script>alert("New Student added");</script>';
		}else{
			echo '<script>alert("Not Added! Please Check The Value ")</script>';
		}
	}
?>
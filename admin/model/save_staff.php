<?php 
	if(isset($_POST['submit'])){		
		#generate the password
		$generatePassword = password_hash(strtolower($_POST['username']), PASSWORD_DEFAULT);

		#validating the staff form
		$checkerror = "";
		if($_POST['username'] == "") $checkerror .= '<h3 class="alert alert-success">Please enter username</h3>';
		if($_POST['first_name'] == "") $checkerror .= '<h3 class="alert alert-success">Please enter the first name</h3>';	
		if($_POST['surname'] == "") $checkerror .= '<h3 class="alert alert-success"">Please enter the surname</h3>';
		if($_POST['email'] == "") $checkerror .= '<h3 class="alert alert-success"">Please enter the email</h3>';

		#if everything is validated then only insert into the table
		if(empty($checkerror)){
			$sendUserRecord = [
				'user_id' => $_POST['user_id'],
				'username' => $_POST['username'],
				'password' => $generatePassword,
				'first_name' => $_POST['first_name'],
				'middle_name' => $_POST['middle_name'],
				'surname' => $_POST['surname'],
				'date_of_birth' => $_POST['date_of_birth'],
				'phone_number' => $_POST['phone_number'],
				'email' => $_POST['email'],
				'gender' => $_POST['gender'],
				'status' => $_POST['status'],
				'role' => $_POST['role']
			];
			$insertToUsers = $users_tb->saveData($sendUserRecord, 'user_id');

			$lastId =  $users_tb->selectLast('user_id');
			$lastIdFetch = $lastId->fetch();

			$sendStaffRecord = [
				'staff_id' => $_POST['staff_id'],
				'year' => $_POST['year'],
				'archive_status' => $_POST['archive_status'],
				'reason_for_dormant' => $_POST['reason_for_dormant'],
				'user_id' => $lastIdFetch['MAX(user_id)'],
				'module_id' => $_POST['module_id']
			];
			$insertToStaff = $staffs_tb->saveData($sendStaffRecord, 'staff_id');		

			if($insertToUsers == true && $insertToStaff == true){
				echo '<script>alert("Staff Saved");document.location="staff"</script>';
			}
		}else{
			echo $checkerror;
		}
	}
?>
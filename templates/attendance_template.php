<h1 class="text-center">Student Attendance Record</h1>
<?php
	if (isset($_POST['attend_yes'])) {
			$cri =[
				'attendance' =>'1',
				'attendance_total' =>$_POST['totalAttendance'], 
				'student_id'=>$_POST['studentid'],
				'staff_id' =>$staff,
				'module_id' =>$moduleId
			];

			$attendance_tb->insertData($cri);
			header ('location:index.php?getpage=attendance');
		}
	else if(isset($_POST['absent'])){
			$cri =[
				'attendance' =>'0',
				'attendance_total' =>$_POST['totalAttendance'],
				'student_id'=>$_POST['studentid'],
				'staff_id' =>$staff,
				'module_id' =>$moduleId
			];

			$attendance_tb->insertData($cri);
			header ('location:index.php?getpage=attendance');
		
	}

	else if(isset($_POST['reverse'])){
			$cri =[
				'attendance' =>'-1',
				'attendance_total' =>$_POST['totalAttendance'],
				'student_id'=>$_POST['studentid'],
				'staff_id' =>$staff,
				'module_id' =>$moduleId
			];

			$attendance_tb->insertData($cri);
			header ('location:index.php?getpage=attendance');
		
	}


	$attend_start = '<form action="" method="POST">';
	$attend ='<input type="submit" name="attend_yes" value="Add 1 to attendance">
				<input type="submit" name="reverse" value="Reverse Attendance">
				<input type="submit" name="absent" value="Absent">';
	$attend_end = '</form>';

	$table->setHeading([
		'S.N',
		'First Name',
		'Surname',
		'Attend Student',
		'Total Attendance'
		
	]);
	$sn = 1;
	
	foreach ($student as $userRow) {
		if ($userRow['year'] == $year) {
		if($userRow['passed_out'] == 0){
			$total1 =$attendance_tb->selectGroup('attendance','student_id',$userRow['student_id'],'module_id',$moduleId); 
			$total =$total1->fetch();
			$attend_mid ='<input type="hidden" name="studentid" value="'.$userRow['student_id'].'">
			<input type="hidden" name="totalAttendance" value="'.$total['SUM(attendance)'].'">';
			$table->setRow([
				$sn++,
				$userRow['first_name'], 
				$userRow['surname'],
				$attend_start .$attend .$attend_mid.date('dS F Y') .$attend_end,
				$total['SUM(attendance)']
				
			]);
		}
	}
	}
	$table->generateHTML();
?>


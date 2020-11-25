<div class="panel panel-info">
    <div class="panel-heading">

        <span class="dropdown">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" style="color:white;">List By Modules<span class="caret"></span></button>
            <ul class="dropdown-menu" style="margin: 0;">
                <?php foreach ($modules as $key) {
                	$mod =$modules_tb->select('module_id',$key['module_id']);
                	$fetch =$mod->fetch(); 
              	echo '<li><a href="attendance&module='.$fetch['module_id'].'">'.$fetch['module_name'].'</a></li>';
                 }?>
                <li><a href="attendance">View All</a></li>
            </ul>
        </span>
    </div>
</div>

	<h1 class="text-center">STUDENTS ATTENDANCE RECORD</h1>

	<?php

	if (isset($_POST['attend_yes'])) {
			$cri =[
				'attendance' =>'1',
				'attendance_total' =>$_POST['total'], 
				'attendance_id'=>$_POST['attendanceId']
			];

			$attendance_tb->saveData($cri,'attendance_id');
			header ('location:attendance&module='.$_POST['moduleid'].'&student='.$_POST['studentid'].'');
			
		}
	else if(isset($_POST['abscent'])){
			$cri =[
				'attendance' =>'0',
				'attendance_total' =>$_POST['total'], 
				'attendance_id'=>$_POST['attendanceId']
			];

			$attendance_tb->saveData($cri,'attendance_id');
			header ('location:attendance&module='.$_POST['moduleid'].'&student='.$_POST['studentid'].'');
		
	}

	$table->setHeading([
		'S.N',
		'First Name',
		'Surname',
		'Module Id',
		'Attend Student',
		'Date',
		'Attendance',
		'Total Attendance'
		
	]);
	$sn = 1;
	
	foreach ($attendance as $userRow) {
		if($userRow['attendance_archive']==0) 
			$archiveAttendance = '<br><a href="attendance&archiveAttendance='.$userRow['attendance_id'].'"><button>Archive Attendance</button></a>';
		else 
			$archiveAttendance = '<br><a href="attendance&noArchiveAttendance='.$userRow['attendance_id'].'"><button>Unarchive Attendance</button></a>';


		$students =$students_tb->select('student_id',$userRow['student_id']);
		$fetch =$students->fetch();
		$userId =$fetch['user_id'];
		$users =$users_tb->select('user_id',$userId);
		$fetchUser =$users->fetch();
		if (isset($_GET['module'])) 
		$total1 =$attendance_tb->selectGroup('attendance','student_id',$userRow['student_id'],'module_id',$_GET['module']); 
		else
		$total1 =$attendance_tb->selectGroup1('attendance','student_id',$userRow['student_id']); 
		$total =$total1->fetch();
		 $attend_start = '<form action="" method="POST">';
		// $attend ='<input type="submit" name="attend_yes" value="Student is present"><br><br>
		// 		<input type="submit" name="abscent" value="Student is abscent">';
		$attend_end = '</form>';
		 $attend_mid ='<input type="hidden" name="attendanceId" value="'.$userRow['attendance_id'].'">
		';
		if (isset($_GET['module'])){
			$name ='<a href="attendance&module='.$userRow['module_id'].'&student='.$userRow['student_id'].'">'.$fetchUser['first_name'].'';
			$mid =$userRow['module_id'];
			$action =$attend_start.$attend_mid .$attend_end . $archiveAttendance;
			$date =$userRow['attendance_date'];
			$attend =$userRow['attendance'];
		}
		else{
			$name =$fetchUser['first_name'];
			$mid ='ALL';
			$action ='NULL';
			$date ='ALL TIME';
			// $attend ='NULL';
		}
		$table->setRow([
			$sn++,
			$name,
			$fetchUser['surname'],
			$mid,
			$action,
			$date,
			'All',
			$total['SUM(attendance)']
			
		]);

	}
	$table->generateHTML();
?>




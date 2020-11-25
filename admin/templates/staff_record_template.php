<div class="panel panel-info">
	<div class="panel-heading">
		<a href="newstaff_form"><button type="button" class="btn btn-primary">Manually Add Staff</button></a>
	</div>
</div>
<h3 class="text-center">ALL STAFFS RECORDS</h3>
<?php 
	//creating table
	$table->setHeading([
		'S.N',
		'username',
		'First Name', 
		'Surname', 
		'Date of Birth', 
		'Phone Number', 
		'Email Id',
		'Gender',
		'Year',
		'Visibility',
		'Reason For Dormant',
		'Module Id',		
		'Actions'
	]);
	$sn = 1;
	foreach ($allStaff as $staffAsRow) {
		if($staffAsRow['archive_status']==0) $visibility = "Visible"; 
		else $visibility = "Archived";

		$table->setRow([
		$sn++,
		$staffAsRow['username'],
		$staffAsRow['first_name'],
		$staffAsRow['surname'],
		$staffAsRow['date_of_birth'],
		$staffAsRow['phone_number'],
		'<a href="https://www.gmail.com/" target="_blank">'.$staffAsRow['email'] .'</a>',
		$staffAsRow['gender'],
		$staffAsRow['year'],
		$visibility,
		$staffAsRow['reason_for_dormant'],
		$staffAsRow['module_id'],
		'<a href="newstaff_form&staffId='.$staffAsRow['staff_id'].'">Edit</a>'
		]);
	}
	$table->generateHTML();
?>
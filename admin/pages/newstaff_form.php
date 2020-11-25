<?php

	$showModule = $modules_tb->select('module_archive', 0);
	$allStaff = $staffs_tb->selectAll();

	if(isset($_GET['staffId'])){
		$selectedStaff = $staffs_tb->selectJoinWithAnd('users_tb','user_id','staff_id', $_GET['staffId']);
		$fetchStaff = $selectedStaff->fetch();
		$dataArray = [
			'allStaff' => $allStaff,
			'showModule' => $showModule,
			'fetchStaff' => $fetchStaff,
			'users_tb'	=> $users_tb,
			'staffs_tb' =>$staffs_tb
		];
	}else{
		$dataArray = [
			'allStaff' => $allStaff,
			'showModule' => $showModule,
			'users_tb'	=> $users_tb,
			'staffs_tb' => $staffs_tb
		];
	}
	
	$wissTitle = "Staffs Form  -WISS";
	$wissContent = loadTemplates('../templates/forms/newstaff_form_template.php', $dataArray);
?>
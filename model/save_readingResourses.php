<?php
	$reading_tb =new DatabaseTable('resources_tb');
	$resources =$reading_tb->select('module_id',$_GET['reading']);

	if (isset($_POST['saveLink'])) {
		$criteria =[
	    'resource_name' =>$_POST['resource_name'],
			'resource_link' => $_POST['link'],
			'module_id' =>$_GET['reading']
		];
		$reading_tb->insertData($criteria);
	  header ('location:module&module='.$_GET['reading'].'&reading='.$_GET['reading'].'');

		
	}
	if (isset($_POST['delete'])) {
	  $delete = $reading_tb->deleteData('resource_name',$_POST['delName']);
	  header ('location:module&module='.$_GET['reading'].'&reading='.$_GET['reading'].'');
	}
?>
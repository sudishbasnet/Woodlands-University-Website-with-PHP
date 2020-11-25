<?php 
	$admission_tb = new DatabaseTable('admission_tb');
	$selectName = $admission_tb->select('admission_id', $_GET['admissionId']);
	$selectFetch = $selectName->fetch();

	$sendData = [
		'admission_tb' => $admission_tb,
		'selectFetch' => $selectFetch
	];
	$wissTitle = "Case Paper - WISS";
	$wissContent = loadTemplates('../templates/casepaper_template.php', $sendData);
?>
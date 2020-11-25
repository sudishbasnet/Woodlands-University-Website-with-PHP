<?php 
if(isset($_GET['aboutModule'])){ 
	require 'aboutmodulepage_template.php';
}
if(isset($_GET['activities'])){
	require 'activitiespage_template.php';
}
if (isset($_GET['info'])) {
	require 'assignmentInfo.php';
}

if (isset($_GET['reading'])) {
	require 'readingResources.php';
}

if (isset($_GET['grade'])) {
	require 'gradeandreviewspage_template.php';
}

if(isset($_GET['submission'])){
	require 'submissionpage_template.php';
}
?>
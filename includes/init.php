<?php
	require '../default/db_connection.php'; #database connection
	require '../classes/databasetable.php'; #databasetable class
 	require '../classes/tablegenerator.php'; #table generate
	require '../functions/loadtemplates.php'; #load template function

	$table = new TableGenerator(); #table generate table
	$users_tb = new DatabaseTable('users_tb'); #user table
	$courses_tb = new DatabaseTable('courses_tb'); #course table
	$modules_tb = new DatabaseTable('modules_tb'); #module table
	$staffs_tb = new DatabaseTable('staffs_tb'); #staff table
	$students_tb = new DatabaseTable('students_tb'); #student table
	$assignments_tb =new DatabaseTable('assignments_tb');	#assignment table
	$announcements_tb =new DatabaseTable('announcements_tb');	#assignment table
	$grades_tb =new DatabaseTable('grades_tb');
	$assignment_submission_tb =new DatabaseTable('assignment_submission_tb');
	$activities_tb =new DatabaseTable('activities_tb');
	$attendance_tb =new DatabaseTable('attendance_tb');
?>
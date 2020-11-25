<?php
	//code to connect the database server
	$pdo = new PDO('mysql:dbname=final_project;host=localhost', 'root' , '',[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
 ?>
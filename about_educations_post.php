<?php 
	$title= 'Add Education';
	require_once 'db.php';

	$year =$_POST['year'];
	$degree=$_POST['degree'];
	$progress=$_POST['progress'];


	

	$serves_insrt_qur="INSERT INTO educations (year,degree,progress) VALUES('$year','$degree','$progress')";
	mysqli_query($db_conect,$serves_insrt_qur);
	header('location:about_educations.php');
	
	
	

 ?>
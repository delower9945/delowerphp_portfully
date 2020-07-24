<?php 
	$title= 'add services post';
	require_once 'db.php';

	$Service_icon =$_POST['Service_icon'];
	$Service_Title=$_POST['Service_Title'];
	$Service_description=$_POST['Service_description'];


	

	$serves_insrt_qur="INSERT INTO services (Service_icon,Service_Title,Service_description) VALUES('$Service_icon','$Service_Title','$Service_description')";
	mysqli_query($db_conect,$serves_insrt_qur);
	header('location:add_services.php');
	
	
	

 ?>
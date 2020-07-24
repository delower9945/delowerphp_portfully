<?php 
	session_start();
	require_once 'db.php';
	$servis_id= $_POST['servis_id'];
	$Service_icon=$_POST['Service_icon'];
	$Service_Title=$_POST['Service_Title'];
	$Service_description=$_POST['Service_description'];
	
	$updet_qury="UPDATE services SET Service_icon ='$Service_icon', Service_Title ='$Service_Title', Service_description = '$Service_description'  WHERE id='$servis_id'";
	mysqli_query($db_conect,$updet_qury);
	header('location:add_services_list.php');

	 

 ?>
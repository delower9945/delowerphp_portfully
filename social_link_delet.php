<?php
	session_start();

	require_once 'db.php';
	$social_id= $_GET['social_id'];

	$delet_qury="DELETE FROM `social_link` WHERE id=$social_id";
	mysqli_query ($db_conect,$delet_qury);
	$_SESSION['deler-msg']="user delete masg succesfully";
	header('location:social_link_list.php');

 ?>
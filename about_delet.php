<?php
	session_start();

	require_once 'db.php';
	$about_id= $_GET['about_id'];

	$delet_qury="DELETE FROM `about` WHERE id=$about_id";
	mysqli_query ($db_conect,$delet_qury);
	$_SESSION['deler-msg']="user delete masg succesfully";
	header('location:about_list.php');

 ?>
<?php
	session_start();

	require_once 'db.php';
	$fact_id= $_GET['fact_id'];

	$delet_qury="DELETE FROM `fact_icon` WHERE id=$fact_id";
	mysqli_query ($db_conect,$delet_qury);
	$_SESSION['deler-msg']="user delete masg succesfully";
	header('location:fact_list.php');

 ?>
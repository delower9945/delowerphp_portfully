<?php
	session_start();

	require_once 'db.php';
	$custome_id= $_GET['custome_id'];

	$delet_qury="DELETE FROM `customer` WHERE id=$custome_id";
	mysqli_query ($db_conect,$delet_qury);
	$_SESSION['deler-msg']="user delete masg succesfully";
	header('location:customer_list.php');

 ?>
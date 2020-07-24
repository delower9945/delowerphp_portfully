

<?php
	session_start();

	require_once 'db.php';
	$banne_id= $_GET['banne_id'];

	$delet_qury="DELETE FROM `banner` WHERE id=$banne_id";
	mysqli_query ($db_conect,$delet_qury);
	$_SESSION['deler-msg']=" delete masg succesfully";
	header('location:benner_list.php');

 ?>
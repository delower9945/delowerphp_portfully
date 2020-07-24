
<?php
	session_start();

	require_once 'db.php';
	$Portfolio_id= $_GET['Portfolio_id'];

	$delet_qury="DELETE FROM `portfulis` WHERE id=$Portfolio_id";
	mysqli_query ($db_conect,$delet_qury);
	$_SESSION['deler-msg']=" delete masg succesfully";
	header('location:portfuli_viwe_list.php');

 ?>
<!-- 
<?php
	session_start();

	require_once 'db.php';
	$logo= $_GET['logo'];

	$delet_qury="DELETE FROM `brand` WHERE id=$logo";
	mysqli_query ($db_conect,$delet_qury);
	$_SESSION['deler-msg']=" delete masg succesfully";
	header('location:brand_list.php');

 ?>
  -->
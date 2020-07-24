
<?php
	session_start();

	require_once 'db.php';
	$contect_msg_id= $_GET['contect_msg_id'];

	$delet_qury="DELETE FROM `contect_maseges` WHERE id=$contect_msg_id";
	mysqli_query ($db_conect,$delet_qury);
	$_SESSION['deler-msg']="user delete masg succesfully";
	header('location:contect_masegs_list.php');

 ?>
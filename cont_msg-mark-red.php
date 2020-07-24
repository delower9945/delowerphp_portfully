<?php 

	require_once 'db.php';
	$conet_msg_id=$_GET['contect_msg_id'];

	$updet_qury="UPDATE contect_maseges SET status =2 WHERE id='$conet_msg_id'";
	mysqli_query($db_conect,$updet_qury);
	header('location:contect_masegs_list.php');

 ?>
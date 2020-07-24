
<?php
	session_start();

	require_once 'db.php';
	$servis_id= $_GET['servis_id'];

	$delet_qury="DELETE FROM `services` WHERE id=$servis_id";
	mysqli_query ($db_conect,$delet_qury);
	$_SESSION['deler-msg']="user delete masg succesfully";
	header('location:add_services_list.php');

 ?>
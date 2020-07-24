
<?php
	session_start();

	require_once 'db.php';
	$user_id= $_GET['user_id'];

	$delet_qury="DELETE FROM `users` WHERE id=$user_id";
	mysqli_query ($db_conect,$delet_qury);
	$_SESSION['deler-msg']="user delete masg succesfully";
	header('location:users-list.php');

 ?>
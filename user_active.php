<?php 

	require_once 'db.php';
	$user_id= $_GET['user_id'];

	 $updet_query="UPDATE users SET status =1 WHERE id=	$user_id";
	 mysqli_query($db_conect,$updet_query);
	 header('location:users-list.php');


 ?>
<?php 
	session_start();
	require_once 'db.php';

	$geust_name=$_POST['geust_name'];
	$geust_email=$_POST['geust_email'];
	$geust_msg=$_POST['geust_msg'];
	date_default_timezone_set('Asia/Dhaka');
	$msg_send_time =date('Y-m-d H:i:s'); 

    $contect_msg_inst_qury= "INSERT INTO contect_maseges(geust_name,geust_email,geust_msg,msg_send_time ) VALUES('$geust_name','$geust_email','$geust_msg','$msg_send_time')";
	mysqli_query($db_conect,$contect_msg_inst_qury);

	$_SESSION['maseg-succes']='we are sucessfully';
	header('location:index.php#contact');
	
 ?>


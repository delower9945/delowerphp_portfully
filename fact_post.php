<?php 
	$title= 'Add LInk';
	require_once 'db.php';

	$fact_icon=$_POST['fact_icon'];
	$count=$_POST['count'];
	$Feature=$_POST['Feature'];
	


	

	$serves_insrt_qur="INSERT INTO fact_icon (fact_icon,count,Feature) VALUES('$fact_icon','$count','$Feature')";
	mysqli_query($db_conect,$serves_insrt_qur);
	header('location:fact.php');
	
	
	

 ?>
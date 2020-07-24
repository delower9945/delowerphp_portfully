<?php 
	$title= 'Add LInk';
	require_once 'db.php';

	$facebook=$_POST['facebook'];
	$twiter=$_POST['twiter'];
	$instragam=$_POST['instragam'];
	$pinterest=$_POST['pinterest'];


	

	$serves_insrt_qur="INSERT INTO social_link (facebook,twiter,instragam,pinterest) VALUES('$facebook','$twiter','$instragam','$pinterest')";
	mysqli_query($db_conect,$serves_insrt_qur);
	header('location:social_link.php');
	
	
	

 ?>
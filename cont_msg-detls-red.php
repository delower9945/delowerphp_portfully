<?php
	
	$title= 'contect masger dtlese';
	require_once "dasbord_header.php";
	require_once 'auth_chek.php';
	require_once 'db.php';
	$contet_msg_id=$_GET['contect_msg_id'];


	$select_quriy="SELECT geust_msg FROM contect_maseges WHERE id=$contet_msg_id";
	$contect_msg_list_from=mysqli_query($db_conect,$select_quriy);
	$contec_acc = mysqli_fetch_assoc($contect_msg_list_from);


	$updet_qury="UPDATE contect_maseges SET status =2 WHERE id=$contet_msg_id";
	mysqli_query($db_conect,$updet_qury);
	header('location:contect_masegs_list.php.php');



 ?>
	
	<div class="container">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 m-auto">
					<div class="card-headr bg-info text-white">
						 <h1 class="text-center bg-primary text-white">contect masegs list</h1>
					</div>
					<div class="card-body">
						<h3><?=$contec_acc['geust_msg']?></h3>

					</div>
				</div>
			</div>

		</div>
	</div>





 <?php 
 	require_once "dasbord_fotter.php";

  ?>
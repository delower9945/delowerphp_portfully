<?php 

	$title= 'add baner';
	require_once "dasbord_header.php";
	require_once 'auth_chek.php';
	require_once 'db.php';
 ?>


 	<div class="container">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-8 m-auto">
					<div class="card-headr bg-info text-white">
						 <h1 class="text-center bg-danger text-white">Add benner</h1>
					</div>
					<div class="card-body">
						<form action="benner_post.php" method="post" enctype="multipart/form-data">
						 
						  <div class="form-group">
						    <label>name</label>
						    <input type="text" class="form-control" name="name">
						  </div>
						  <div class="form-group">
						    <label>writing</label>
						    <input type="text" class="form-control" name="writing">
						  </div>
						  
						
						  <div class="form-group">
						    <label>banner_img</label>
						    <input type="file" class="form-control" name="banner_img">
						  </div>




						  
						  
						  <button type="submit" class="btn btn-primary">Add benner</button>
						</form>

					</div>
				</div>
			</div>

		</div>
	</div>




 <?php 
 	require_once "dasbord_fotter.php";

?>
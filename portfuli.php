<?php 

	$title= 'add portfuli';
	require_once "dasbord_header.php";
	require_once 'auth_chek.php';
	require_once 'db.php';
 ?>

 	<div class="container">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-8 m-auto">
					<div class="card-headr bg-info text-white">
						 <h1 class="text-center bg-danger text-white">Add worke</h1>
					</div>
					<div class="card-body">
						<form action="add_portfuli_post.php" method="post" enctype="multipart/form-data">
						 
						  <div class="form-group">
						    <label>portfuli catagory</label>
						    <input type="text" class="form-control" name="portfuli_catagory">
						  </div>
						  <div class="form-group">
						    <label>portfuli Title</label>
						    <input type="text" class="form-control" name="portfuli_title">
						  </div>
						  
						  <div class="form-group">
						    <label>portfuli photo</label>
						    <input type="file" class="form-control" name="portfuli_photo">
						  </div>
						  
						  <div class="form-group">
						    <label>more_informatio</label>
						    
						    <textarea type="text" class="form-control" name="more_informatio"></textarea>
						  </div>
						  
						  
						  
						  <button type="submit" class="btn btn-primary">Add portfulio</button>
						</form>

					</div>
				</div>
			</div>

		</div>
	</div>



<?php 
 	require_once "dasbord_fotter.php";

?>
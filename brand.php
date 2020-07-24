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
						 <h1 class="text-center bg-danger text-white">Add logo</h1>
					</div>
					<div class="card-body">
						<form action="brand_post.php" method="post" enctype="multipart/form-data">
						 
						  <div class="form-group">
						    <label>logo</label>
						    <input type="file" class="form-control" name="logo">
						  </div>
						
						  
						  <button type="submit" class="btn btn-primary">Add logo</button>
						</form>

					</div>
				</div>
			</div>

		</div>
	</div>



<?php 
 	require_once "dasbord_fotter.php";

?>

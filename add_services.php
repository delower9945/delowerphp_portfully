<?php 

	$title= 'add services';
	require_once "dasbord_header.php";
	require_once 'auth_chek.php';
	require_once 'db.php';
 ?>

 	<div class="container">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-8 m-auto">
					<div class="card-headr bg-success text-white">
						 <h1 class="text-center bg-success text-white">Add services</h1>
					</div>
					<div class="card-body">
						<form action="add_servis_post.php" method="post">
						 
						  <div class="form-group">
						    <label>Services icon</label>
						    <input type="text" class="form-control" name="Service_icon">
						  </div>
						  <div class="form-group">
						    <label>Service Title</label>
						    <input type="text" class="form-control" name="Service_Title">
						  </div>
						  <div class="form-group">
						    <label>Service Description</label>
						    <textarea name="Service_description"class="form-control" rows="8" id="description"></textarea>
						  </div>
						  
						  
						  <button type="submit" class="btn btn-primary">Add Services</button>
						</form>

					</div>
				</div>
			</div>

		</div>
	</div>



<?php 
 	require_once "dasbord_fotter.php";

?>
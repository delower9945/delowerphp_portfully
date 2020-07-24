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
						 <h1 class="text-center bg-danger text-white">Add About</h1>
					</div>
					<div class="card-body">
						<form action="about_educations_post.php" method="post" >
						 
						  <div class="form-group">
						    <label>year</label>
						    <input type="text" class="form-control" name="year">
						  </div> 

						  <div class="form-group">
						    <label>degree</label>
						    <input type="text" class="form-control" name="degree">
						  </div>


						   <div class="form-group">
						    <label>progress</label>
						    <input type="text" class="form-control" name="progress">
						  </div>
						
						  

						  
						  
						  <button type="submit" class="btn btn-primary">Add about</button>
						</form>

					</div>
				</div>
			</div>

		</div>
	</div>



<?php 
 	require_once "dasbord_fotter.php";

?>


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
						 <h1 class="text-center bg-danger text-white">Add Link</h1>
					</div>
					<div class="card-body">
						<form action="social_link_post.php" method="post" >
							<input type="hidden" name="social_id" value="<?php echo $assoc['id']?>"> 
						 
						  <div class="form-group">
						    <label>facebook</label>
						    <input type="text" class="form-control" name="facebook">
						  </div>
						
						   <div class="form-group">
						    <label>twiter</label>
						    <input type="text" class="form-control" name="twiter">
						  </div>	

						  <div class="form-group">
						    <label>instragam</label>
						    <input type="text" class="form-control" name="instragam">
						  </div>						  

						   <div class="form-group">
						    <label>pinterest</label>
						    <input type="text" class="form-control" name="pinterest">
						  </div>
						  
						  
						  <button type="submit" class="btn btn-primary">Add link</button>
						</form>

					</div>
				</div>
			</div>

		</div>
	</div>



<?php 
 	require_once "dasbord_fotter.php";

?>


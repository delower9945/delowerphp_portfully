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
						 <h1 class="text-center bg-danger text-white">Add fact</h1>
					</div>
					<div class="card-body">
						<form action="fact_post.php" method="post">
						
						<input type="hidden" name="fact_id" value="<?php echo $assoc['id']?>"> 
						

						 
						  <div class="form-group">
						    <label>fact_icon</label>
						    <input type="text" class="form-control" name="fact_icon">
						  </div>
						
						  <div class="form-group">
						    <label>count</label>
						    <input type="text" class="form-control" name="count">
						  </div>

						<div class="form-group">
						    <label>Feature</label>
						    <input type="text" class="form-control" name="Feature">
						  </div>
						
						  
						  
						  <button type="submit" class="btn btn-primary">Add fact prouar</button>
						</form>

					</div>
				</div>
			</div>

		</div>
	</div>



<?php 
 	require_once "dasbord_fotter.php";

?>


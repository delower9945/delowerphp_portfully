<?php 

	$title= 'add coustom';
	require_once "dasbord_header.php";
	require_once 'auth_chek.php';
	require_once 'db.php';
 ?>

 	<div class="container">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-8 m-auto">
					<div class="card-headr bg-info text-white">
						 <h1 class="text-center bg-danger text-white">Add couatom</h1>
					</div>
					<div class="card-body">
						<form action="customer_post.php" method="post" enctype="multipart/form-data">
						 
						 
						
						   <div class="form-group">
						    <label>imge</label>
						    <input type="file" class="form-control" name="imge">
						  </div>
						   <div class="form-group">
						    <label>content</label>
						    <input type="text" class="form-control" name="content">
						  </div>
						   <div class="form-group">
						    <label>name</label>
						    <input type="text" class="form-control" name="name">
						  </div>
						   <div class="form-group">
						    <label>idae</label>
						    <input type="text" class="form-control" name="idae">
						  </div>
						  
						  
						  <button type="submit" class="btn btn-primary">Add add coustom</button>
						</form>

					</div>
				</div>
			</div>

		</div>
	</div>



<?php 
 	require_once "dasbord_fotter.php";

?>
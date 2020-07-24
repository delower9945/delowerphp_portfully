<?php 

	$title= 'add services';
	require_once "dasbord_header.php";
	require_once 'auth_chek.php';
	require_once 'db.php';
	$banne_id= $_GET['banne_id'];
	$select="SELECT * FROM banner WHERE id='$banne_id'";
	$qury=mysqli_query($db_conect,$select);
	$assoc=mysqli_fetch_assoc($qury);
	
 ?>
<div class="container">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-8 m-auto">
					<div class="card-headr bg-info text-white">
						 <h1 class="text-center bg-danger text-white">bener Edit</h1>
					</div>
					<div class="card-body">
						<form action="banner_updet.php" method="post" enctype="multipart/form-data">  
						
						<input type="hidden" name="banne_id" value="<?php echo $assoc['id']?>">  
						 
						  <div class="form-group">
						    <label>name</label>
						    <input type="text" value="<?php echo $assoc['name']?>" class="form-control" name="name">
						  </div>

						  <div class="form-group">
						    <label>writing</label>
						    <input type="text" class="form-control" value="<?php echo $assoc['writing']?>" name="writing">
						  </div>
						 <div class="form-group">
						    <label>banner_img</label>
						    <input type="file" class="form-control" name="banner_img">
						  </div>
						  <div class="form-group">
						    <label>Photo Preview </label>
						    <img height="100" src="uploads/protfulios/<?php echo $assoc['banner_img']?>" alt="">
						  </div>
						
						 
						  
						  
						  <button type="submit" class="btn btn-primary text-center">Updet</button>
						</form>

					</div>
				</div>
			</div>

		</div>
	</div>



<?php 
 	require_once "dasbord_fotter.php";

?>
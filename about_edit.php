<?php 

	$title= 'add services';
	require_once "dasbord_header.php";
	require_once 'auth_chek.php';
	require_once 'db.php';
	

	$about_id =$_GET['about_id'];
	$select="SELECT * FROM about WHERE id='$about_id'";
	$qury=mysqli_query($db_conect,$select);
	$assoc=mysqli_fetch_assoc($qury);
	
	
 ?>
<div class="container">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-8 m-auto">
					<div class="card-headr bg-success text-white">
						 <h1 class="text-center bg-success text-white">About Edit</h1>
					</div>
					<div class="card-body">
						<form action="about_updet.php" method="post" enctype="multipart/form-data">  
						<input type="hidden" name="social_id" value="<?php echo $assoc['id']?>">  

						 <div class="form-group">
						    <label>summary</label>
						    <input type="text"  value="<?php echo $assoc['summary']?>" class="form-control" name="summary">
						  </div>
						
						   <div class="form-group">
						    <label>amout_img</label>
						    <input type="file" class="form-control" name="amout_img">
						  </div>
						   <div class="form-group">
						    <label>Photo Preview </label>
						    <img height="100" src="uploads/protfulios/<?php echo $assoc['amout_img']?>" alt="">
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
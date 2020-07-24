<?php 

	$title= 'add services';
	require_once "dasbord_header.php";
	require_once 'auth_chek.php';
	require_once 'db.php';
	$Portfolio_id = $_GET['Portfolio_id'];
	$select="SELECT * FROM portfulis WHERE id='$Portfolio_id'";
	$qury=mysqli_query($db_conect,$select);
	$assoc=mysqli_fetch_assoc($qury);
	
 ?>
<div class="container">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-8 m-auto">
					<div class="card-headr bg-info text-white">
						 <h1 class="text-center bg-danger text-white">portfulio Edit</h1>
					</div>
					<div class="card-body">
						<form action="portfulio_updet.php" method="post" enctype="multipart/form-data">  
						<input type="hidden" name="portful_id" value="<?php echo $assoc['id']?>"> 
						 
						  <div class="form-group">
						    <label>portfuli_catagory</label>
						    <input type="text" value="<?php echo $assoc['portfuli_catagory']?>" class="form-control" name="portfuli_catagory">
						  </div>
						 <div class="form-group">
						    <label>portfuli photo</label>
						    <input type="file" class="form-control" name="photo">
						  </div>
						  <div class="form-group">
						    <label>Photo Preview </label>
						    <img height="100" src="uploads/protfulios/<?php echo $assoc['portfuli_photo']?>" alt="">
						  </div>
						  <div class="form-group">
						    <label>portfuli_title</label>
						    <input type="text" class="form-control" value="<?php echo $assoc['portfuli_title']?>" name="portfuli_title">
						  </div>
						   <div class="form-group">
						    <label>more_informatio</label>
						    <textarea type="text" class="form-control" name="more_informatio" cols="30" rows="10"></textarea>
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
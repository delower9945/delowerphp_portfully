<?php 

	$title= 'add services';
	require_once "dasbord_header.php";
	require_once 'auth_chek.php';
	require_once 'db.php';

	$id = $_GET['servis_id'];

	$select_quriy="SELECT * FROM services WHERE id = '$id' ";
	$add_list_from=mysqli_query($db_conect,$select_quriy);
	$assoc = mysqli_fetch_assoc($add_list_from);
	
 ?>
<div class="container">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-8 m-auto">
					<div class="card-headr bg-success text-white">
						 <h1 class="text-center bg-success text-white">user service updet</h1>
					</div>
					<div class="card-body">
						<form action="add_services_updet.php" method="post">   

							<input type="hidden" name="servis_id" value="<?php echo $assoc['id']?>">
						 
						  <div class="form-group">
						    <label>Services icon</label>
						    <input type="text" class="form-control" name="Service_icon" value="<?php echo $assoc['Service_icon']?>">
						  </div>
						  <div class="form-group">
						    <label>Service Title</label>
						    <input type="text" class="form-control" name="Service_Title" value="<?php echo $assoc['Service_Title']?>">
						  </div>
						  <div class="form-group">
						    <label>Service Description</label>
						    <textarea name="Service_description"class="form-control" rows="8" id="description"><?php echo $assoc['Service_description']?></textarea>
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
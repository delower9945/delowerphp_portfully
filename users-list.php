<?php
	
	$title= 'user-list Form';
	require_once "dasbord_header.php";
	require_once 'auth_chek.php';
	require_once 'db.php';


	$select_quriy="SELECT * FROM users";
	$db_list_from=mysqli_query($db_conect,$select_quriy);

	


 ?>

	<div class="container">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 m-auto">
					 <h1 class="text-center bg-info text-white">user list</h1>

					 	<?php 
					 		if (isset($_SESSION['deler-msg'])): {
					 			
					 		}
					 	 ?>
						<div class="alert alert-info">
							<?=$_SESSION['deler-msg']?>
						</div>

						<?php endif; ?>
						<?php 
							unset($_SESSION['deler-msg']);
						 ?>
					<table class="table table-bordered" id="user_list_table">
						
					  <thead>
					    <tr>
					      	<th>sl number</th>
					     	<th>id</th>
					     	<th>name</th>
					     	<th>email</th>
					     	<th>phone</th>
					     	<th>gender</th>
					     	<th>status</th>
					     	<th>Action</th>
					    </tr>
					  </thead>
					  <tbody>
					  	
					  	<?php 
					  		$sl_nam = 1;
					  		foreach ($db_list_from as $key => $users): ?>
					    <tr>
					      <td><?=$sl_nam++?></td>
					      <td><?=$users['id']?></td>
					      <td><?=$users['name']?></td>
					      <td><?=$users['email']?></td>
					      <td><?=$users['phone']?></td>
					      <td><?=$users['gender']?></td>
					      <td>
					      	<?php 
					      		if ($users['status'] == 1) {
					      			?>
									<span class="bg-success text-white p-1">active</span>
					      			<?php
					      		}
					      		else{
					      			?>
										<span class="bg-danger text-white p-1">Deactiv</span>
					      			<?php
					      		}
					      	 ?>
					      
					      	
					      </td>

					      <td>
					      	<div class="btn-group" role="group" aria-label="Basic example">
					      		<?php if($users['status'] == 1): ?>
								  <a href="user_Deactiv.php?user_id=<?=$users['id']?>" type="button" class="text-white btn btn-info">make your deactiv</a>
								<?php endif; ?>

								<?php if($users['status'] == 2): ?>
								  <a href="user_active.php?user_id=<?=$users['id']?>" type="button" class="text-white btn btn-warning">make your activ</a>
								<?php endif; ?>
								  <a href="user_delet.php?user_id=<?=$users['id']?>" type="button" class="text-white btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i>
								  Delet</a>
							</div>

					      </td>
					    </tr>  
					    <?php endforeach;?>

					    <?php if($db_list_from->num_rows == 0): ?>
							<tr> 
								<td colspan="50" class="text-center text-danger"><h6>no data to show</h6></td>
							</tr>
					    <?php endif; ?>
					 
					  </tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

 <?php 
 	require_once "dasbord_fotter.php";

  ?>
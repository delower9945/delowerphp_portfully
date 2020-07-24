<?php
	
	$title= 'add social link list';
	require_once "dasbord_header.php";
	require_once 'auth_chek.php';
	require_once 'db.php';


	$select_quriy="SELECT * FROM fact_icon";
	$add_list_from=mysqli_query($db_conect,$select_quriy);



 ?>
<div class="container">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 m-auto">
					 <h1 class="text-center bg-danger text-white">Add fact list</h1>

					<table class="table table-bordered" id="add_user_tbal">
						
					  <thead>
					    <tr>
					      	<th>sl number</th>
					     	<th>fact_icon</th>
					     	<th>count</th>
					     	<th>Feature</th>
					    
					     	<th>Action</th>
								 
								 
					    </tr>
					  </thead>
					 <tbody>
					  	
					  	<?php 
					  		$sl_nam = 1;
					  		foreach ($add_list_from as $fact_icon): ?>
					    <tr>
					      <td><?=$sl_nam++?></td>
					      <td><?=$fact_icon['fact_icon']?></td>
					      <td><?=$fact_icon['count']?></td>
					      <td><?=$fact_icon['Feature']?></td>
					      
					     
					      <td>

					 
					      
					     
					      	<div class="btn-group" role="group" aria-label="Basic example">
					      		
								
	
								  <a href="face_delet.php?fact_id=<?=$fact_icon['id']?>" type="button" id="numbe"class="text-white btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i>
								  Delet</a>
							</div>

					      </td>
				 
					    </tr>  
						    <?php endforeach;?>

						    <?php if($add_list_from->num_rows == 0): ?>
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
<?php
	
	$title= 'add about list';
	require_once "dasbord_header.php";
	require_once 'auth_chek.php';
	require_once 'db.php';


	$select_quriy="SELECT * FROM customer";
	$add_list_from=mysqli_query($db_conect,$select_quriy);



 ?>
<div class="container">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 m-auto">
					 <h1 class="text-center bg-danger text-white">About list</h1>

					<table class="table table-bordered" id="add_user_tbal">
						
					  <thead>
					    <tr>
					      	<th>sl number</th>
					      	<th>imge</th>
					     	<th>content</th>
					     	<th>name</th>
					     	<th>idae</th>
					     	
					     	<th>Action</th>
								 
								 
					    </tr>
					  </thead>
					 <tbody>
					  	
					  	<?php 
					  		$sl_nam = 1;
					  		foreach ($add_list_from as $customer): ?>
					    <tr>
					      <td><?=$sl_nam++?></td>
					      <td><?=$customer['content']?></td>
					      <td><?=$customer['name']?></td>
					      <td><?=$customer['idae']?></td>
					      <td ><img style="height: 100px; border-radius: 50%" src="uploads/protfulios/<?=$customer['imge']?>" alt=""></td>
					      <td>

					      
					 
					      
					     
					      	<div class="btn-group" role="group" aria-label="Basic example">
					      		
								
	
								  <a href="customer_delet.php?custome_id=<?=$customer['id']?>" type="button" id="numbe"class="text-white btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i>
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
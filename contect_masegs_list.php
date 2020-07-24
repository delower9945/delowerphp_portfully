<?php
	
	$title= 'contect msegs';
	require_once "dasbord_header.php";
	require_once 'auth_chek.php';
	require_once 'db.php';


	$select_quriy="SELECT * FROM contect_maseges";
	$contect_list_from=mysqli_query($db_conect,$select_quriy);


 ?>


<div class="container">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 m-auto">
					 <h1 class="text-center bg-primary text-white">contect masegs list</h1>

					<table class="table table-bordered" id="contect_msg_tbal">
						
					  <thead>
					    <tr>
					      	<th>sl number</th>
					      	<th>stutas</th>
					     	<th>geust Name</th>
					     	<th>geust Email</th>
					     	<th>megess Date/Time</th>
					     	<th>Action</th>
								 
								 
					    </tr>
					  </thead>
					  <tbody>
					  	
					  	<?php 
					  		$sl_nam = 1;
					  		foreach ($contect_list_from as $messegs): ?>
					    <tr class="<?=$messegs['status'] == 1 ?'bg-success':''?>">;
					      <td><?=$sl_nam++?></td>
					      <td>
					      	<?php 
					      		if ($messegs['status'] == 1) {
					      			echo "unred ";
					      		}
					      		else{
					      			echo "read";
					      		}
					      	 ?>

					      </td>
					      <td><?=$messegs['geust_name']?></td>
					      <td><?=$messegs['geust_email']?></td>
					      
					      <td>

					      <?php 
					      	echo date('d/m/Y h:m:s p', strtotime($messegs['msg_send_time'])); 

					       ?> 

					   </td>
					   <td>
					   	

					   	<?php if ($messegs['status'] == 1): ?>
					      		 
					      		<a href="cont_msg-mark-red.php?contect_msg_id=<?=$messegs['id']?>" class="btn btn-info btn-sm">mark as red</a>

					      		
					     <?php endif; ?>

							<a href="cont_msg-detls-red.php?contect_msg_id=<?=$messegs['id']?>" class="btn btn-primary btn-sm">see maseg</a>

							<a href="contect_delet.php?contect_msg_id=<?=$messegs['id']?>" type="button" id="numbe"class="text-white btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i>
								  Delet</a>

					   </td>
					      
				 
					    </tr>  
					    <?php endforeach;?>

					    <?php if($contect_list_from->num_rows == 0): ?>
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
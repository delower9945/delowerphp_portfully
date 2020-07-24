<?php
	$title= 'my acount';
	require_once "dasbord_header.php";
	require_once "auth_chek.php";
 ?>

	<div class="container"> 
		<div class="container-fluid">
			
			<div class="row"> 
				<div class="col-6 m-auto">
					
					<div class="card text-white ">
					  <div class="card-header bg-primary "> 
					  	Change password

					</div>
					 	<form action="change_password.php" method="post">
						 
						  <div class="form-group">
						    <label>old Password</label>
						    <input type="password" class="form-control"  placeholder="type your old password" name="old_password">
						  </div>
						  
						  <div class="form-group">
						    <label>new Password</label>
						    <input type="password" class="form-control"  placeholder="type your new password" name="new_password">
						  </div>
						  <div class="form-group">
						    <label>confirm Password</label>
						    <input type="password" class="form-control"  placeholder="type your confirm password" name="confirm_password">
						  </div>
						  
						  
						  <button type="submit" class="btn btn-primary">change</button>
						</form>
				    </div>
						
				</div>
			</div>
		</div>
	</div>


 <?php 
 	require_once "dasbord_fotter.php";
  ?> 
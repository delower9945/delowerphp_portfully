<?php
	
	$title= 'dashbord';
	require_once "dasbord_header.php";
	require_once "auth_chek.php";
	
 ?>




	<!-- Start Page content -->
	<div class="content">
	    <div class="container-fluid">

	        <div class="row">
	            <div class="col-12">
	                <div class="card-box">
	                    <h3 class="header-title mb-4">
	                    	hellow  

	                    </h3>
	                    <h4>Email:<?=$_SESSION['email']?></h4>
	                    <h5>Status<?=$_SESSION['users_status']?></h5>



	                    
	                </div>
	            </div>
	        </div>
	    </div> <!-- container -->

	</div> <!-- content -->


<?php 
	require_once "dasbord_fotter.php";
 ?>
<?php 
	session_start();
	require_once 'db.php';
	$banne_id= $_POST['banne_id'];
	$name=$_POST['name'];
	
	$writing=$_POST['writing'];
	




	$orginal_photo=$_FILES['banner_img']['name'];


	if ($orginal_photo != null) {
		$after_explode=explode('.',$orginal_photo);
		$orginal_extntion=end($after_explode);
		$expted_poto_list=array('PNG','JPG','JPEG','png','jpg','jpeg');


	if (in_array($orginal_extntion,$expted_poto_list)) {
		if ($_FILES['orginal_photo']['size'] < 50000000) {
			

			$new_file_name= $portful_id.".".$orginal_extntion;
			
				$img_get = "SELECT * FROM banner WHERE id ='$banne_id'";
				$qury=mysqli_query($db_conect,$img_get);
				$assoc=mysqli_fetch_assoc($qury);

				if (file_exists('uploads/protfulios/'.$assoc['banner_img'])) {
					unlink('uploads/protfulios/'.$assoc['banner_img']);
				}


				$updet_qury="UPDATE banner SET name='$name',  writing ='$writing',  banner_img = '$new_file_name' WHERE id='$banne_id'";
					mysqli_query($db_conect,$updet_qury);
				
				 $new_file_uplode_location="uploads/protfulios/".$new_file_name;
				 move_uploaded_file($_FILES['banner_img']['tmp_name'], $new_file_uplode_location);
				 $new_protfuli_id=mysqli_insert_id($db_conect);
				 $protfuli_updet_qur="UPDATE banner SET banner_img='$new_file_name' WHERE id=$new_protfuli_id";
				 mysqli_query($db_conect,$protfuli_updet_qur);
				 header('location:benner_list.php');
				 echo "OK";
		}
		else{
				echo "Image is longer";
				

				
		}
	}
	else{
		echo "no";
	}
	}

	else{
		$updet_qury="UPDATE banner SET name='$name',  writing ='$writing' WHERE id='$banne_id'";
					mysqli_query($db_conect,$updet_qury);
					header('location:benner_list.php');
	}


	




	
	
	// header('location:portfuli_edit_list.php');

	 // header('location:add_services_updet.php'); 

 ?>
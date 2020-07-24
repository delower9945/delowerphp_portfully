<?php 
	session_start();
	require_once 'db.php';
	$portful_id= $_POST['portful_id'];
	$portfuli_catagory=$_POST['portfuli_catagory'];
	
	$portfuli_title=$_POST['portfuli_title'];
	$more_informatio=$_POST['more_informatio'];




	$orginal_photo=$_FILES['photo']['name'];


	if ($orginal_photo != null) {
		$after_explode=explode('.', $orginal_photo);
		$orginal_extntion=end($after_explode);
		$expted_poto_list=array('PNG','JPG','JPEG','png','jpg','jpeg');


	if (in_array($orginal_extntion,$expted_poto_list)) {
		if ($_FILES['photo']['size'] < 50000000) {
			

			$new_file_name= $portful_id.".".$orginal_extntion;
			
				$img_get = "SELECT * FROM portfulis WHERE id ='$portful_id'";
				$qury=mysqli_query($db_conect,$img_get);
				$assoc=mysqli_fetch_assoc($qury);

				if (file_exists('uploads/protfulios/'.$assoc['portfuli_photo'])) {
					unlink('uploads/protfulios/'.$assoc['portfuli_photo']);
				}


				$updet_qury="UPDATE portfulis SET portfuli_catagory='$portfuli_catagory',  portfuli_title ='$portfuli_title', more_informatio='$more_informatio', portfuli_photo = '$new_file_name' WHERE id='$portful_id'";
					mysqli_query($db_conect,$updet_qury);
				
				 $new_file_uplode_location="uploads/protfulios/".$new_file_name;
				 move_uploaded_file($_FILES['photo']['tmp_name'], $new_file_uplode_location);
				 $new_protfuli_id=mysqli_insert_id($db_conect);
				 $protfuli_updet_qur="UPDATE portfulis SET portfuli_photo='$new_file_name' WHERE id=$new_protfuli_id";
				 mysqli_query($db_conect,$protfuli_updet_qur);
				 header('location:portfuli_viwe_list.php');
				 
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
		$updet_qury="UPDATE portfulis SET portfuli_catagory='$portfuli_catagory',  portfuli_title ='$portfuli_title',more_informatio='$more_informatio' WHERE id='$portful_id'";
					mysqli_query($db_conect,$updet_qury);
					header('location:portfuli_viwe_list.php');

	}




 ?>
<?php 
	session_start();
	require_once 'db.php';
	$about_id= $_POST['about_id'];
	$summary=$_POST['summary'];
	
	$orginal_photo=$_FILES['amout_img']['name'];
	
	
	if ($orginal_photo != null) {
			$after_explode=explode('.', $orginal_photo);
			$orginal_extntion=end($after_explode);
			$expted_poto_list=array('PNG','JPG','JPEG','png','jpg','jpeg');


		if (in_array($orginal_extntion,$expted_poto_list)) {
			if ($_FILES['amout_img']['size'] < 50000000) {
				

				$new_file_name= $about_id.".".$orginal_extntion;
				
					$img_get = "SELECT * FROM about WHERE id ='$about_id'";
					$qury=mysqli_query($db_conect,$img_get);
					$assoc=mysqli_fetch_assoc($qury);

					if (file_exists('uploads/protfulios/'.$assoc['amout_img'])) {
						unlink('uploads/protfulios/'.$assoc['amout_img']);
					}


					$updet_qury="UPDATE about SET summary='$summary', amout_img = '$new_file_name' WHERE id='$about_id'";
						mysqli_query($db_conect,$updet_qury);
					

					 $new_file_uplode_location="uploads/protfulios/".$new_file_name;
					 move_uploaded_file($_FILES['amout_img']['tmp_name'], $new_file_uplode_location);
					 $new_protfuli_id=mysqli_insert_id($db_conect);
					 $protfuli_updet_qur="UPDATE about SET amout_img='$new_file_name' WHERE id=$new_protfuli_id";
					 mysqli_query($db_conect,$protfuli_updet_qur);
					 header('location:about_list.php');
					 
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
			$updet_qury="UPDATE about SET summary='$summary' WHERE id='$about_id'";
						mysqli_query($db_conect,$updet_qury);
						header('location:about_list.php');
		}

 ?>

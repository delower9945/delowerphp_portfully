
 <?php 
	$title= 'add about post';
	require_once 'db.php';
	
	
	$orginal_photo=$_FILES['amout_img']['name'];


	$after_explode=explode('.', $orginal_photo);
	$orginal_extntion=end($after_explode);
	$expted_poto_list=array('PNG','JPG','JPEG','png','jpg','jpeg');

	if (in_array($orginal_extntion,$expted_poto_list)) {
		if ($_FILES['amout_img']['size'] > 50000000) {
			echo "your ar a lage size";
		}


		else{

			$summary =$_POST['summary'];

			

			
				

				$serves_insrt_qur="INSERT INTO about (summary) VALUES('$summary')";
				mysqli_query($db_conect,$serves_insrt_qur);
				
				$new_file_name=mysqli_insert_id($db_conect).".".$orginal_extntion;
			
				
				 $new_file_uplode_location="uploads/protfulios/".$new_file_name;
				 move_uploaded_file($_FILES['amout_img']['tmp_name'], $new_file_uplode_location);
				 $new_protfuli_id=mysqli_insert_id($db_conect);
				 $protfuli_updet_qur="UPDATE about SET amout_img='$new_file_name' WHERE id=$new_protfuli_id";
				 mysqli_query($db_conect,$protfuli_updet_qur);
				 header('location:about.php');

				
		}
	}
	else{
		echo "no";
	}

 ?>
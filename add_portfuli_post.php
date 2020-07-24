 <?php 
	
	require_once 'db.php';
	
	
	$orginal_photo=$_FILES['portfuli_photo']['name'];


	$after_explode=explode('.', $orginal_photo);
	$orginal_extntion=end($after_explode);
	$expted_poto_list=array('PNG','JPG','JPEG','png','jpg','jpeg');

	if (in_array($orginal_extntion,$expted_poto_list)) {
		if ($_FILES['portfuli_photo']['size'] > 500000) {
			echo "your ar a lage size";
		}
		else{

			$portfuli_catagory =$_POST['portfuli_catagory'];
			$portfuli_title=$_POST['portfuli_title'];
			$more_informatio=$_POST['more_informatio'];

				

				$serves_insrt_qur="INSERT INTO portfulis (portfuli_catagory,portfuli_title,more_informatio) VALUES('$portfuli_catagory','$portfuli_title','more_informatio')";
				mysqli_query($db_conect,$serves_insrt_qur);
				
				$new_file_name=mysqli_insert_id($db_conect).".".$orginal_extntion;
			
				
				 $new_file_uplode_location="uploads/protfulios/".$new_file_name;
				 move_uploaded_file($_FILES['portfuli_photo']['tmp_name'], $new_file_uplode_location);
				 $new_protfuli_id=mysqli_insert_id($db_conect);
				 $protfuli_updet_qur="UPDATE portfulis SET portfuli_photo='$new_file_name' WHERE id=$new_protfuli_id";
				 mysqli_query($db_conect,$protfuli_updet_qur);
				 header('location:portfuli.php');

				
		}
	}
	else{
		echo "no";
	}

 ?>
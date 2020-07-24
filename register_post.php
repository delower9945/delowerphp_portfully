<?php

require_once 'db.php';

 $uper_cas= preg_match('@[A-Z]@',$_POST['password']);
    $lowar_cas= preg_match('@[a-z]@',$_POST['password']);
    $number= preg_match('@[0-9]@',$_POST['password']);
    $sacial_car= preg_match('@[!,^,*,%,$,#]@',$_POST['password']);

    if (empty($_POST['name'])){
        $name_err= 'please provide your name';
        header('location: register.php?name_err='.$name_err);

    }
    elseif (empty($_POST['email'])){
        $email_err= 'please provide your email';
        $old_name = $_POST['name'];
        header('location: register.php?email_err='.$email_err.'&old_name='.$old_name);
    }
    else if (!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
        $invalid= 'invalid your email address';
        $old_name = $_POST['name'];
        header('location: register.php?invalid_err='.$invalid.'&old_name='.$old_name);
    }
    elseif (empty($_POST['phone'])){
        $phone_err= 'please provide your Phone';
        $old_email= $_POST['email'];
        $old_name = $_POST['name'];
        header('location: register.php?phone_err='.$phone_err.'&old_name='.$old_name.'&old_email='.$old_email);
    }
    elseif (strlen($_POST['phone']) <=10){
        $strin_err= 'please provide your minimum stringh 11 carecters';
        $old_email= $_POST['email'];
        $old_name = $_POST['name'];
        header('location: register.php?string_err='.$strin_err.'&old_name='.$old_name.'&old_email='.$old_email);
    }
    elseif (empty($_POST['password'])){
        $password_err= 'please provide your password';
        $old_email= $_POST['email'];
        $old_name = $_POST['name'];
        $old_phon = $_POST['phone'];
        header('location: register.php?pass_err='.$password_err.'&old_name='.$old_name.'&old_email='.$old_email.'&old_phon='.$old_phon);
    }
    elseif (!$uper_cas || !$lowar_cas || !$number || !$sacial_car){
        $strong_err= 'please provide your strong password';
        $old_email= $_POST['email'];
        $old_name = $_POST['name'];
        $old_phon = $_POST['phone'];
        $old_pass = $_POST['password'];
        header('location: register.php?strong_err='.$strong_err.'&old_name='.$old_name.'&old_email='.$old_email.'&old_phon='.$old_phon.'&old_pass='.$old_pass);
    }
    elseif (empty($_POST['confrem_password'])){
        $confrem_password_err= 'please provide your name';
        $old_email= $_POST['email'];
        $old_name = $_POST['name'];
        $old_phon = $_POST['phone'];
        header('location: register.php?confrem_password_err='.$confrem_password_err,'&old_name='.$old_name.'&old_email='.$old_email.'&old_phon='.$old_phon.'&');
    }
    elseif (empty($_POST['gender'])){
        $gender_err= 'please provide your selected Gender';
        $old_email= $_POST['email'];
        $old_name = $_POST['name'];
        $old_phon = $_POST['phone'];
        header('location: register.php?gender_err='.$gender_err.'&old_name='.$old_name.'&old_email='.$old_email.'&old_phon='.$old_phon);
    }
	
	


	

	else{
		$name= $_POST['name'];
		$email= $_POST['email'];
		$phone= $_POST['phone'];
		$password= password_hash($_POST['password'],PASSWORD_DEFAULT);
		$gender= $_POST['gender'];
		
		
		
		


		$users_email_chek ="SELECT * FROM users WHERE email='$email'";


		$form_db=mysqli_query($db_conect,$users_email_chek);
		

		if ($form_db->num_rows == 1) {
			echo "you alrdy register";
			
		}
		else{
			
			$users_insert="INSERT INTO users(name, email, phone, password,gender) VALUES ('$name','$email','$phone','$password','$gender')";


			mysqli_query($db_conect,$users_insert);
		 	$seccess="acount succesfully create! you are login now";
		 	header('location:login.php?seccess='.$seccess);
		}	
	

	}



?> 
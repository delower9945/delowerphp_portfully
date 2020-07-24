
 <?php 
	session_start();
	require_once 'db.php';
	
	

	$email=$_POST['email'];
	$password=$_POST['password'];

	$user_email_pssword_chek_qury= "SELECT COUNT(*) as total,password, email,name,status FROM users WHERE email='$email'";
	

	$user_chek_form	=mysqli_query($db_conect,$user_email_pssword_chek_qury);
	$assoc=mysqli_fetch_assoc($user_chek_form); 
	 
	if ($assoc['email'] ==$email) {
		$pass_varify=password_verify($password, $assoc['password']);

		

		if ($pass_varify) {
			
			$_SESSION['users_name']=$assoc['name'];
			$_SESSION['email']=$assoc['email'];
			$_SESSION['users_status']=$assoc['status'];
			header('location:dasbord.php');

		
		}
		
	
	

		
		else{
			
			$_SESSION['login_err']="you envlee email or phone";
			header('location:login.php');
		}
		// 	elseif $assoc['status']==0) {
		// 	header('location:dasbord.php');
		// }
		// // else{
		// // 	header('location:usres_sts_er.php');
		// // }

		
	}


 ?>
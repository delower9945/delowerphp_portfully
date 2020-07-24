 <?php  

	session_start();
	require_once 'db.php';
	$email=$_SESSION['users_email'];
	$old_paasswrd=$_POST['old_password'];
	$encrpt_old_pss=md5($old_paasswrd);

	$old_password_chng="SELECT * FROM users WHERE email= '$email' && password='$encrpt_old_pss'";

	 $change_from=mysqli_query($db_conect, $old_password_chng);

	 if ( $change_from->num_rows == 0 ) {
	 	echo "you are rong";
	 }
	 else{
	 	if ($_POST['old_password'] ==$_POST['new_password']) {
	 		echo "old password can not be new pass ";
	 	}
	 	else if ($_POST['new_password'] != $_POST['confirm_password']) {
	 		echo "old password dose nost match ";
	 	}
	 	else{
	 		
	 		$encpypt_new_pss=md5($_POST['new_password']);
	 		$updet_pss_qu="UPDATE users SET password= '$encpypt_new_pss' WHERE email='$email'";
	 		mysqli_query($db_conect, $updet_pss_qu);
	 		header('location:logout.php');
	 	}
	 }





 ?>
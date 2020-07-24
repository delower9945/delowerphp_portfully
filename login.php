<?php 
	session_start();
	$title= 'login form';
  	
  	
 ?>

<!doctype html>
<html lang="en">

    
<!-- Mirrored from coderthemes.com/highdmin/vertical/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Apr 2019 06:52:57 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Highdmin - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="admin_dasbord/assets/images/favicon.ico">

        <!-- App css -->
        <link href="admin_dasbord/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="admin_dasbord/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="admin_dasbord/assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="admin_dasbord/assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="admin_dasbord/assets/js/modernizr.min.js"></script>

    </head>


    <body class="account-pages">

        <!-- Begin page -->
        <div class="accountbg" style="background: url('admin_dasbord/assets/images/bg-1.jpg');background-size: cover;background-position: center;"></div>

        <div class="wrapper-page account-page-full">

            <div class="card">
                <div class="card-block">

                    <div class="account-box">

                        <div class="card-box p-5">
                            <h3 class="text-uppercase text-center pb-4">
                                 
								<?php  if (isset($_SESSION['login_err'])): ?>
									<div class="alert alert-danger">
									<?=$_SESSION['login_err']?>

									</div>
									<?php endif;
									unset($_SESSION['login_err']);
								?>
					 
								</h3>

                           <form action="login-post.php" method="post" class="container">
						       <?php 
					              if (isset($_GET['seccess'])) {
					                echo $_GET['seccess'];
					              }
					           ?>
						       <div class="form-group m-b-20 row">
						          <label for="email"> your email</label>
						          <input type="email" class="form-control" placeholder="Enter your email" id="email" name="email">         
						        </div>

						       
						        <div class="form-group row m-b-20">
						          <label for="password"> your Password</label>
						          <input type="password" class="form-control" placeholder="Enter your password" id="password" name="password">
						       		show password<i class="fa fa-eye"></i>
								</div>
								<div class="text-center">
						        <button type="submit" class="btn btn-primary"> Login </button>
							    </div>
							 </form>

                            <div class="row m-t-50">
                                <div class="col-sm-12 text-center">
                                    <p class="text-muted">Don't have an account? <a href="register.php" class="text-dark m-l-5"><b>Sign Up</b></a></p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class='text-center'>All Right reserv &copy; <?php 
					date_default_timezone_set('Asia/Dhaka');
					echo date('F/ Y h:i:s A'); 
				 ?> fullproject.com<p>
            </div>

        </div>



        <!-- jQuery  -->
        <script src="admin_dasbord/assets/js/jquery.min.js"></script>
        <script src="admin_dasbord/assets/js/bootstrap.bundle.min.js"></script>
        <script src="admin_dasbord/assets/js/metisMenu.min.js"></script>
        <script src="admin_dasbord/assets/js/waves.js"></script>
        <script src="admin_dasbord/assets/js/jquery.slimscroll.js"></script>

        <!-- App js -->
        <script src="admin_dasbord/assets/js/jquery.core.js"></script>
        <script src="admin_dasbord/assets/js/jquery.app.js"></script>

    </body>

<!-- Mirrored from coderthemes.com/highdmin/vertical/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Apr 2019 06:52:57 GMT -->
</html>










		










		
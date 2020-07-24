<?php
   session_start();
   require_once 'db.php';
  
    
?>
<!doctype html>
<html lang="en">

<!-- Mirrored from coderthemes.com/highdmin/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Apr 2019 06:51:24 GMT -->
<head>
        <meta charset="utf-8" />
        <title><?=$title?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="admin_dasbord/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="admin_dasbord/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="admin_dasbord/assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="admin_dasbord/assets/css/style.css" rel="stylesheet" type="text/css" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet">
        <script src="admin_dasbord/assets/js/modernizr.min.js"></script>

    </head>


    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">

                <div class="slimscroll-menu" id="remove-scroll">

                    <!-- LOGO -->
                    <div class="topbar-left">
                        <a href="index.html" class="logo">
                            <span>
                                <img src="admin_dasbord/assets/images/logo.png" alt="" height="22">
                            </span>
                            <i>
                                <img src="admin_dasbord/assets/images/logo_sm.png" alt="" height="28">
                            </i>
                        </a>
                    </div>

                    <!-- User box -->
                    <div class="user-box">
                        <div class="user-img">
                            <img src="admin_dasbord/assets/images/users/avatar-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle img-fluid">
                        </div>
                        <h5><a href="#"><?=$_SESSION['users_name']?></a></h5>
                        <p class="text-center"><?=$_SESSION['email']?></p>
                        
                    </div>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">

                            <!--<li class="menu-title">Navigation</li>-->

                            <li>
                                <a href="dasbord.php">
                                    <i class="fi-air-play"></i><span class="badge badge-danger badge-pill float-right">7</span> <span> Dashboard </span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript: void(0);"><i class="fi-layers"></i> <span>home</span><span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="banner.php">benner Add </a></li>
                                    <li><a href="benner_list.php">benner list </a></li>
                                    <li><a href="social_link.php">Link Add </a></li>
                                    <li><a href="social_link_list.php">social link list </a></li>
                                
                                </ul>
                            </li>
                          

                              <li>
                                <a href="javascript: void(0);"><i class="fi-air-play"></i> 
                                      
                                  </span>About <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="about.php">About Add </a></li>
                                    <li><a href="about_list.php">About List</a></li>
                                    <li><a href="about_educations.php">Add Educations </a></li>
                                
                                </ul>
                            </li>

                            <li>
                                <a href="users-list.php">
                                    <i class="fi-air-play"></i><span class="badge badge-danger badge-pill float-right">
                                        <?php  


                                            $total_user_qury="SELECT COUNT(*) as total_users FROM users";
                                            $total_user_frm=mysqli_query($db_conect, $total_user_qury);
                                            
                                            $total_user_aco= mysqli_fetch_assoc($total_user_frm);
                                            print_r($total_user_aco['total_users']);
                                        ?>


                                    </span>  <span> User List</span>
                                </a>
                            </li>                          
                    
                    
                            <li>
                                <a href="contect_masegs_list.php">
                                    <i class="fi-air-play"></i><span class="badge badge-danger badge-pill float-right">
                                        <?php  


                                            $total_msg_qury="SELECT COUNT(*) as total_messags FROM contect_maseges";
                                            $total_msg_form=mysqli_query($db_conect, $total_msg_qury);
                                            
                                            $total_user_aco= mysqli_fetch_assoc($total_msg_form);
                                            echo $total_user_aco['total_messags'];

                                        ?>



                                    </span>  <span>contect_masegs</span>
                                </a>
                            </li>

                             <li>
                                <a href="javascript: void(0);"><i class="fi-air-play"></i> 
                                      
                                  </span>service <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="add_services.php">Add Services </a></li>
                                    <li><a href="add_services_list.php">List Services </a></li>
                                
                                </ul>
                            </li>

                             <li>
                                <a href="javascript: void(0);"><i class="fi-air-play"></i> 
                                      
                                  </span>portfuli <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="portfuli.php"> portfuli add</a></li>
                                    <li><a href="portfuli_viwe_list.php">portfuli List </a></li>
                                
                                </ul>
                            </li>

                            
                               <li>
                                <a href="javascript: void(0);"><i class="fi-air-play"></i> 
                                      
                                  </span>Count list<span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="fact.php">Add fact count</a></li>
                                    <li><a href="fact_list.php"> Add fact List </a></li>
                                
                                </ul>
                            </li>

                             <li>
                                <a href="javascript: void(0);"><i class="fi-air-play"></i> 
                                      
                                  </span>coustom <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="customer.php">Add custmar add</a></li>
                                    <li><a href="customer_list.php">Add coustomer List </a></li>
                                
                                </ul>
                            </li>

                             
                             <li>
                                <a href="javascript: void(0);"><i class="fi-air-play"></i> 
                                      
                                  </span>brand <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="brand.php">Add brannd add</a></li>
                                    <li><a href="brand_list.php">Add brannd List </a></li>
                                
                                </ul>
                            </li>

                            




                            <li>
                                <a href="javascript: void(0);"><i class="fi-layers"></i> <span> Apps </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="apps-calendar.html">Calendar</a></li>
                                    <li><a href="apps-tickets.html">Tickets</a></li>
                                    <li><a href="apps-taskboard.html">Task Board</a></li>
                                </ul>
                            

                        </ul>

                    </div>
                    <!-- Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->

            <div class="content-page">

                <!-- Top Bar Start -->
                <div class="topbar">

                    <nav class="navbar-custom">

                        <ul class="list-unstyled topbar-right-menu float-right mb-0">

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <i class="fi-bell noti-icon"></i>
                                    <span class="badge badge-danger badge-pill noti-icon-badge">4</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg">


                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5 class="m-0"><span class="float-right"><a href="#" class="text-dark"><small>Clear All</small></a> </span>Notification</h5>
                                    </div>

                                    <div class="slimscroll" style="max-height: 230px;">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-success"><i class="mdi mdi-comment-account-outline"></i></div>
                                            <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">1 min ago</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-info"><i class="mdi mdi-account-plus"></i></div>
                                            <p class="notify-details">New user registered.<small class="text-muted">5 hours ago</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-danger"><i class="mdi mdi-heart"></i></div>
                                            <p class="notify-details">Carlos Crouch liked <b></b><small class="text-muted">3 days ago</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-warning"><i class="mdi mdi-comment-account-outline"></i></div>
                                            <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">4 days ago</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-purple"><i class="mdi mdi-account-plus"></i></div>
                                            <p class="notify-details">New user registered.<small class="text-muted">7 days ago</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-custom"><i class="mdi mdi-heart"></i></div>
                                            <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">13 days ago</small></p>
                                        </a>
                                    </div>

                                    <!-- All-->
                                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                        View all <i class="fi-arrow-right"></i>
                                    </a>

                                </div>
                            </li>

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <img src="admin_dasbord/assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle"> <span class="ml-1"><?php echo$_SESSION['users_name']?> <i class="mdi mdi-chevron-down"></i> </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h6 class="text-overflow m-0">Welcome !</h6>
                                    </div>

                                    <!-- item-->
                                    <a href="my_acount.php" class="dropdown-item notify-item">
                                        <i class="fi-head"></i> <span>My Account</span>
                                    </a>

                                    <!-- item-->
                                    <a href="logout.php" class="dropdown-item notify-item">
                                        <i class="fi-power"></i> <span>Logout</span>
                                    </a>

                                </div>
                            </li>

                        </ul>

                        <ul class="list-inline menu-left mb-0">
                            <li class="float-left">
                                <button class="button-menu-mobile open-left disable-btn">
                                    <i class="dripicons-menu"></i>
                                </button>
                            </li>
                            <li>
                                <div class="page-title-box">
                                    <h4 class="page-title">Dashboard </h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item active">Welcome to Highdmin admin panel !</li>
                                    </ol>
                                </div>
                            </li>

                        </ul>

                    </nav>

                </div>
                <!-- Top Bar End -->

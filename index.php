<?php
    session_start();
    require_once "index_header_area.php";
    require_once 'db.php';
?>

        <!-- main-area -->
        <main>

            <!-- banner-area -->
            <section id="home" class="banner-area banner-bg fix">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-7 col-lg-6">
                            <div class="banner-content">
                                 <?php 
                                    $select_servic_qury="SELECT * FROM banner ORDER BY id desc LIMIT 1";
                                    $selcr_servis_from=mysqli_query($db_conect,$select_servic_qury);
                                    foreach ($selcr_servis_from as $banner):
                                 ?> 
                                <h6 class="wow fadeInUp" data-wow-delay="0.2s">HELLO!</h6>
                                <h2 class="wow fadeInUp" data-wow-delay="0.4s"><?=$banner['name']?></h2>
                                <p class="wow fadeInUp" data-wow-delay="0.6s"><?=$banner['writing']?></p>
                                <div class="banner-social wow fadeInUp" data-wow-delay="0.8s">

                                 <?php 
                                    $select_servic_qury="SELECT * FROM social_link ORDER BY id desc LIMIT 3";
                                    $selcr_servis_from=mysqli_query($db_conect,$select_servic_qury);
                                    foreach ($selcr_servis_from as $social_link):
                                 ?> 
                                    <ul>
                                        <li><a href="<?=$social_link['facebook']?>"><i class="fab fa-facebook"></i></a></li>
                                        <li><a href="<?=$social_link['instragam']?>"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="<?=$social_link['twiter']?>"><i class="fab fa-twitter"></i></a></li>
                                        
                                        <li><a href="<?=$social_link['pinterest']?>"><i class="fab fa-pinterest"></i></a></li>
                                    </ul>
                                    <?php endforeach; ?>
                                </div>
                                <a href="#" class="btn wow fadeInUp" data-wow-delay="1s">SEE PORTFOLIOS</a>
                            <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 d-none d-lg-block">
                            <div class="banner-img text-right">
                                <img style="height:800px; width: 410px;" src="uploads/protfulios/<?=$banner['banner_img']?>" title="me-01" alt="me-01">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-shape"><img src="frontend_asset/img/shape/dot_circle.png" class="rotateme" alt="img"></div>
            </section>
            <!-- banner-area-end -->

            <!-- about-area-->
            <section id="about" class="about-area primary-bg pt-120 pb-120">
                <div class="container">
                    <div class="row align-items-center">
                               
                        <div class="col-lg-6">
                             <?php 
                                    $select_servic_qury="SELECT * FROM about ORDER BY id desc LIMIT 1";
                                    $selcr_servis_from=mysqli_query($db_conect,$select_servic_qury);
                                    foreach ($selcr_servis_from as $about):
                                 ?> 

                            <div class="about-img">
                                <img style="height: 700px; width: 430px; padding-left: 50px;" src="uploads/protfulios/<?=$about['amout_img']?>" title="me-01" alt="me-01">

                            </div>
                                 <?php endforeach; ?>
                        </div>

                        
                        <div class="col-lg-6 pr-90">
                            <div class="section-title mb-25">
                                <span>Introduction</span>
                                <h2>About Me</h2>
                            </div>
                            <div class="about-content">
                                <p><?=$about['summary']?></p>

                           
                                <h3>Education:</h3>
                            </div>
                          
                            
                                 <?php 
                                    $select_servic_qury="SELECT * FROM educations ORDER BY id desc LIMIT 4";
                                    $selcr_servis_from=mysqli_query($db_conect,$select_servic_qury);
                                    foreach ($selcr_servis_from as $educations):
                                 ?> 
                            <!-- Education Item -->
                            <div class="education">


                                
                                <div class="year"><?=$educations['year']?></div>
                                <div class="line"></div>
                                <div class="location">
                                    <span><?=$educations['degree']?></span>
                                    <div class="progressWrapper">
                                        <div class="progress">
                                            <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <!-- End Education Item -->
                            <?php endforeach; ?>
                       </div>
                    </div>
                </div>
            </section>
            <!-- about-area-end -->
            <!-- Services-area -->
            <section id="service" class="services-area pt-120 pb-50">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>WHAT WE DO</span>
                                <h2>Services and Solutions</h2>
                            </div> 
                         </div>                     
                    </div>
                    <div class="row">
                        <?php 
                            $select_servic_qury="SELECT * FROM services ORDER BY id desc LIMIT 6";
                            $selcr_servis_from=mysqli_query($db_conect,$select_servic_qury);
                            foreach ($selcr_servis_from as $services):
                         ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="icon_box_01 wow fadeInLeft" data-wow-delay="0.2s">
                               <i class="<?=$services['Service_icon']?>"></i>
                                <h3><?=$services['Service_Title']?></h3>
                                <p>
                                    <?php echo substr($services['Service_description'], 0, 1400) ?>
                                    
                                </p>
                            </div>
                        </div>
                       
                        
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>
            <!-- Services-area-end -->

            <!-- Portfolios-area -->
            <section id="portfolio" class="portfolio-area primary-bg pt-120 pb-90">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>Portfolio Showcase</span>
                                <h2>My Recent Best Works</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <?php 
                            $select_portfulis_qury="SELECT * FROM portfulis ORDER BY id desc LIMIT 6";
                            $selcr_portfulis_from=mysqli_query($db_conect,$select_portfulis_qury);
                            foreach ($selcr_portfulis_from as $portfulis):
                         ?>
                        <div class="col-lg-4 col-md-6 pitem">
                            <div class="speaker-box">
                                <div class="speaker-thumb">
                                    <img src="uploads/protfulios/<?=$portfulis['portfuli_photo']?>" alt="img">
                                </div>
                                <div class="speaker-overlay">
                                    <span><?=$portfulis['portfuli_catagory']?></span>
                                    <h4><a href="portfolio-single.php?id=<?=$portfulis['id']?>"><?=$portfulis['portfuli_title']?></a></h4>
                                    <a href="portfolio-single.php?id=<?=$portfulis['id']?>" class="arrow-btn">More information <span></span></a>
                                </div>
                            </div>
                        </div>
                      
                        
                    <?php endforeach; ?>
                    <?php 
                        if($selcr_portfulis_from->num_rows==0):

                        
                     ?>
                    <div class="col-md-12">
                        <div class="alert alert-success">
                            no data sotho
                        </div>
                    </div> 
                <?php endif; ?>
                    </div>
                </div>
            </section>

           
            <!-- profile end-->


            <!-- fact-area -->
            <section class="fact-area">
                <div class="container">
                    <div class="fact-wrap">
                      
                        <div class="row justify-content-between">
                            <?php 
                                $select_portfulis_qury="SELECT * FROM fact_icon ORDER BY id desc LIMIT 6";
                                $selcr_portfulis_from=mysqli_query($db_conect,$select_portfulis_qury);
                                foreach ($selcr_portfulis_from as $fact_icon):
                            ?>
                            <div class="col-xl-2 col-lg-3 col-sm-6">
                                <div class="fact-box text-center mb-50">
                                    <div class="fact-icon">
                                        <i class="<?=$fact_icon['fact_icon']?>"></i>
                                    </div>
                                    <div class="fact-content">
                                        <h2><span class="count"><?=$fact_icon['count']?></span></h2>
                                        <span><?=$fact_icon['Feature']?></span>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>   
                        </div>
                        
                    </div>
                </div>
            </section>
            <!-- fact-area-end -->

            <!-- testimonial-area -->
            <section class="testimonial-area primary-bg pt-115 pb-115">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>testimonial</span>
                                <h2>happy customer quotes</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-9 col-lg-10"> 
                            <div class="testimonial-active">
                                <div class="single-testimonial text-center">
                                    <div class="testi-avatar">
                                        <img src="frontend_asset/img/images/testi_avatar.png" alt="img">
                                    </div>
                                    <div class="testi-content">
                                        <h4><span>“</span> An event is a message sent by an object to signal the occur rence of an action. The action can causd user interaction such as a button click, or it can result <span>”</span></h4>
                                        <div class="testi-avatar-info">
                                            <h5>tonoy jakson</h5>
                                            <span>head of idea</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-testimonial text-center">
                                    <div class="testi-avatar">
                                        <img src="frontend_asset/img/images/testi_avatar.png" alt="img">
                                    </div>
                                    <div class="testi-content">
                                        <h4><span>“</span> An event is a message sent by an object to signal the occur rence of an action. The action can causd user interaction such as a button click, or it can result <span>”</span></h4>
                                        <div class="testi-avatar-info">
                                            <h5>tonoy jakson</h5>
                                            <span>head of idea</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- testimonial-area-end -->

            <!-- brand-area -->
            <div class="barnd-area pt-100 ">
                <div class="container">
                    <div class="row brand-active">
                         <?php 
                                $select_portfulis_qury="SELECT * FROM brand ORDER BY id desc LIMIT 4";
                                $selcr_portfulis_from=mysqli_query($db_conect,$select_portfulis_qury);
                                foreach ($selcr_portfulis_from as $brand):
                            ?>
                        <div class="col-lg-4">
                            <div class="single-brand">
                                <img src="uploads/protfulios/<?=$brand['logo']?>" alt="img">
                            </div>
                        </div>
                         <?php endforeach; ?> 
                    </div>
                </div>
            </div>
            <!-- brand-area-end -->

            <!-- contact-area -->
            <section id="contact" class="contact-area primary-bg pt-120 pb-120">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="section-title mb-20">
                                <span>information</span>
                                <h2>Contact Information</h2>
                            </div>
                            <div class="contact-content">
                                <p>Contect phone or Email .</p>
                                <h5>OFFICE IN <span>Dhaka</span></h5>
                                <div class="contact-list">
                                    <ul>
                                        <li><i class="fas fa-map-marker"></i><span>Address :</span>Mymensingh Dhaka, Bangladeshk</li>
                                        <li><i class="fas fa-headphones"></i><span>Phone :</span>+8801791260234</li>
                                        <li><i class="fas fa-globe-asia"></i><span>e-mail :</span>mddelowerhossain9945@gmail.com</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <?php if(isset($_SESSION['maseg-succes'])): ?>
                                <div class="alert alert-success">
                                    <?=$_SESSION['maseg-succes']?>
                                </div>
                             <?php 
                                endif; 
                                unset($_SESSION['maseg-succes']);

                             ?>
                            <div class="contact-form">
                                <form action="contact_from_post.php" method="POST">
                                    <input type="text" placeholder="your name *" name="geust_name">
                                    <input type="email" placeholder="your email *" name="geust_email">
                                    <textarea  id="message" placeholder="your message *" name="geust_msg"></textarea>
                                    <button class="btn">SEND</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-area-end -->

        </main>
        <!-- main-area-end -->

     <?php 

        require_once "index_fottaer_area.php";
      ?>
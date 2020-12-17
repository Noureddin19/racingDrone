<?php 

session_start();
require('sql/connect.php');

if($_SESSION['register']){
    echo "<script type='text/javascript'>alert('Registered Successfully!');</script>";
    $_SESSION['register'] = false;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-GG4JCWDBMK"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-GG4JCWDBMK');
</script>

	<!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />    
    <meta name="description" content="" />
    
    <!-- FAVICONS ICON -->
    <link rel="icon" href="images/favicon.ico" />
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    
    <!-- PAGE TITLE HERE -->
    <title>Racing Competition</title>
    
    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/fontawesome/css/font-awesome.min.css" />

    <!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">

    <!-- SLICK SLIDER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css">
        
    <!-- BOOTSTRAP SLECT BOX STYLE SHEET  -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap-select.min.css">    
    <!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.min.css">
    <!-- LOADER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/loader.min.css">    
    <!-- MAIN STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
        <!-- FLATICON STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/flaticon.min.css">  
    <!-- THEME COLOR CHANGE STYLE SHEET -->
    <link rel="stylesheet" class="skin" type="text/css" href="css/skin/skin-1.css">

    
  
       
     <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="plugins/revolution/revolution/css/settings.css">
    <!-- REVOLUTION NAVIGATION STYLE -->
    <link rel="stylesheet" type="text/css" href="plugins/revolution/revolution/css/navigation.css">
        
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Muli:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="css/racingStyle.css">
</head>

<body>

	<div class="page-wraper">
     
                                 
                                        
                	
        <header class="site-header header-style-4 mobile-full-width-menu nav-wide">

            <div class="sticky-header main-bar-wraper  navbar-expand-lg">
                <div class="main-bar">
                    <div class="container-fluid clearfix">

                        <div class="logo-header   w-25 pb-3">
                            <div class="logo-header-inner logo-header-one ">
                                <a href="http://racing.riotu-lab.org/">
                                <img class="hidden-xs" src="images/client-logo/PSU Drone Racing Club-02.png" alt="" width="300px;">
                                <img class="hidden-sm hidden-md hidden-lg" src="images/client-logo/PSU Drone Racing Club-02-no-text.png" alt="" width="55px;">
                                    </a>
                                </div>
                            </div>  
                                                       
                            <div class="extra-nav header-2-nav">
                                
                                <div class="extra-cell">
                                    <div class="header-nav-request">
                                        <a href="mailto:racing@psu.edu.sa" style="background-color: inherit">racing@psu.edu.sa</a> 
                                    </div>
                                </div>                                
                                 
                             </div>                                                                       

                             
                            
                       
                        

                    </div>
                </div>

            </div>

        </header>
         
        
        <!-- CONTENT START -->
            
            <header>
                
                <div class="overlay"></div>
                <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" width="100%" height="100%">
                  <source src="media\video\promo.mp4" type="video/mp4">
                </video>
                <div class="container ">
                  <div class="d-flex  text-center align-items-center">
                    <div class="w-100 text-white my-5 py-5">
                        
                      <p class=" my-2 pt-5 textVid">PSU Drone Racing League
                    </p>
                      <p class=" lead my-2 textVid2">Prince Sultan University
                    </p>
                    <p class=" lead my-2 textVid2">21-23 January 2021
                    </p>
                    </div>
                  </div>
                </div>
              </header>
        </div>
            <!--  -->

    <div class="container-fluid " style="background-color:#EEEEEE;">
    <div class="section-content pt-5" style="background-color:#EEEEEE;">
                <div class="row justify-content-center">
                <div class="col-lg-4 col-md-4 col-sm-4 m-b30"></div>
                <div class="col-lg-4 col-md-4 col-sm-4 m-b30">
                    <h2 class=" text-center"><?php 
                     $statment = $pdo->prepare ("SELECT * FROM compition_content_table WHERE type='about-header'");
                     $statment->execute();
                     
                     while($row = $statment->fetch(PDO::FETCH_ASSOC)){
                           echo $row["content"];
                         }
                    ?></h2>
                    <p><?php 
                     $statment = $pdo->prepare ("SELECT * FROM compition_content_table WHERE type='about'");
                     $statment->execute();
                     
                     while($row = $statment->fetch(PDO::FETCH_ASSOC)){
                           echo $row["content"];
                         }
                    ?></p>
                    
                    
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 m-b30"></div>
                </div>
                </div>
    </div>
              

            <div class="container">
            <h2 class="text-center mt-5 "> Registration Open</h2>
              <div class="row justify-content-center">
               
                      <div class="container  col-md-6 col-lg-6 col-sm-8 col-xs-3 text-center">
                    <a href="racing-form.php" class="site-button site-btn-effect justify-content-center mt-4">Register </a>
                            
                  </div>
               
              </div>   
            </div>
            <div class="section-full p-t80 p-b50">

<div class="container mt-5">

    <!-- TITLE START-->
    <div class="section-head center wt-small-separator-outer mb-5">    
        <h2>Rules & Regulations</h2>
    </div>
    <!-- TITLE END-->
    <?php ?>
    <div class="section-content">
        <div class="row justify-content-center d-flex how-it-drone3">

            <div class="col-lg-4 col-md-12 m-b30 how-it-drone3-left">

                <div class="wt-box d-icon-box-two m-b40 mb-5">
                    <div class="wt-icon-box-wraper right ">

                        <div class="icon-md inline-icon">
                            <span class="icon-cell site-text-secondry"><i
                                    class="number-style">01</i></span>
                        </div>
                        <div class="icon-content">
                            <div class="d-icon-box-title title-style-2 site-text-secondry">
                                <h3 class="s-title-one">Racing drone size must be 5”</h3>
                            </div>
                            <div class="d-icon-box-content">
                                
                            </div>
                        </div>

                    </div>
                </div>

                <div class="wt-box d-icon-box-two m-b40 mb-5 mt-5 pt-3">
                    <div class="wt-icon-box-wraper right">
                        <div class="icon-md inline-icon">
                            <span class="icon-cell site-text-secondry"><i
                                    class="number-style">02</i></span>
                        </div>
                        <div class="icon-content">
                            <div class="d-icon-box-title title-style-2 site-text-secondry">
                                <h3 class="s-title-one">There is a 5 second penalty for missing a gate</h3>
                            </div> 

                            <div class="d-icon-box-content">
                                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="wt-box d-icon-box-two m-b40 mb-5 mt-5 pt-3">
                    <div class="wt-icon-box-wraper right">
                        <div class="icon-md inline-icon">
                            <span class="icon-cell site-text-secondry"><i
                                    class="number-style">03</i></span>
                        </div>
                        <div class="icon-content">
                            <div class="d-icon-box-title title-style-2 site-text-secondry">
                                <h3 class="s-title-one">Must be an analog system</h3>
                            </div>

                            <div class="d-icon-box-content">
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wt-box d-icon-box-two m-b40 mb-5 mt-5 pt-3">
                    <div class="wt-icon-box-wraper right">
                        <div class="icon-md inline-icon">
                            <span class="icon-cell site-text-secondry"><i
                                    class="number-style">04</i></span>
                        </div>
                        <div class="icon-content">
                            <div class="d-icon-box-title title-style-2 site-text-secondry">
                                <h3 class="s-title-one">4 racers per round</h3>
                            </div>

                            <div class="d-icon-box-content">
                                
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-4 col-md-12 m-b30 how-it-drone2-outer">
                <div class="how-it-drone2-border">
                    <div class="how-it-drone2">
                        <div class="how-it-drone-media2"><img src="images/how-it-work/pngeggs.png" width="200%" height="200%"
                                alt="" class="wave-effects"></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12 m-b30 how-it-drone3-right">

                <div class="wt-box d-icon-box-two m-b40">
                    <div class="wt-icon-box-wraper left">
                        <div class="icon-md inline-icon">
                            <span class="icon-cell site-text-secondry"><i
                                    class="number-style">05</i></span>
                        </div>
                        <div class="icon-content">
                            <div class="d-icon-box-title title-style-2 site-text-secondry">
                                <h3 class="s-title-one">Flip over crash is allowed</h3>
                                
                               
                            </div>
                            <div class="d-icon-box-content">
                            </div>

                        </div>
                    </div>
                </div>

                <div class="wt-box d-icon-box-two m-b40">
                    <div class="wt-icon-box-wraper left">
                        <div class="icon-md inline-icon">
                            <span class="icon-cell site-text-secondry"><i
                                    class="number-style">06</i></span>
                        </div>
                        <div class="icon-content">
                            <div class="d-icon-box-title title-style-2 site-text-secondry">
                                <h3 class="s-title-one">The pilot must be able to change VTX transmission power quickly
                          </h3>
                            </div>

                            <div class="d-icon-box-content">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="wt-box d-icon-box-two m-b40">
                    <div class="wt-icon-box-wraper left">
                        <div class="icon-md inline-icon">
                            <span class="icon-cell site-text-secondry"><i
                                    class="number-style">07</i></span>
                        </div>
                        <div class="icon-content">
                            <div class="d-icon-box-title title-style-2 site-text-secondry">
                                <h3 class="s-title-one">The pilot must only use 25mw ransmison power</h3>
                            </div>

                            <div class="d-icon-box-content">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wt-box d-icon-box-two m-b40">
                    <div class="wt-icon-box-wraper left">
                        <div class="icon-md inline-icon">
                            <span class="icon-cell site-text-secondry"><i
                                    class="number-style">08</i></span>
                        </div>
                        <div class="icon-content">
                            <div class="d-icon-box-title title-style-2 site-text-secondry">
                                <h3 class="s-title-one">Fail safe must be set and working</h3>
                            </div>

                            <div class="d-icon-box-content">
                            </div>
                        </div>
                        
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

</div>
<!-- HOW IT WORK  SECTION END -->

                
              
              
              
                <div class="container mt-5 mb-5">
                  <h2 class=" text-center">Competition Chairs</h2>
                <div class="row  justify-content-center">     

                    <div class=" m-b30 col-sm-5 col-xs-8">
                        <div class="wt-team-2 shadow-sm text-center ">
                            <div class="wt-info shadow-sm ">
                                <div class="team-detail">

                                    <h3 class="m-t0 team-name">Anis Koubaa </h3>
                                    <h5>Director of the Robotics and Internet-of-Things Lab
 </h5>
                                    
                                    <h5>Prince Sultan University</h5>      

                                </div>
                                <div class="list-group">
                                    <div class="list-group">
                                        <center>
                                            <ul class="team-social-bar text-center" style="display: -webkit-inline-box; list-style-type:none">
                                                  
                                                <li><a href="https://twitter.com/riotulab" target="_blank"><i class="fa fa-twitter fa-2x" style="color: #00acee; margin: 5px"></i></a></li>
                                                <li > <a href="https://www.linkedin.com/in/anis-koubaa-84aa4344/" target="_blank"><i class="fa fa-linkedin fa-2x" style="color:#0072b1; margin: 5px"></i></a></li>
                                                
                                                <li><a href="https://www.facebook.com/riotu.center" target="_blank"><i class="fa fa-facebook fa-2x" style="color: #0072b1; margin: 5px"></i></a></li>
                                               
                                                
                                            
                                        </ul>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=" m-b30 col-md-5 col-xs-8">
                        <div class="wt-team-2 shadow-sm text-center ">
                            <div class="wt-info shadow-sm">
                                <div class="team-detail">
                                    <h3 class="m-t0 team-name">Abdelhedi Azzouz </h3>
                                    <h5>UAV Expert at Zain/Part 107 Certified </h5>
                                    <h5>Zain Drone</h5>
                                </div>
                                <div class="list-group">
                                    <div class="list-group">
                                        <center>
                                            <ul class="team-social-bar text-center" style="display: -webkit-inline-box; list-style-type:none">
                                                  
                                            <li > <a href="https://www.linkedin.com/in/abdulhadi-“az”-azouz-85431285" target="_blank"><i class="fa fa-linkedin fa-2x" style="color:#0072b1; margin: 5px"></i></a></li>
                                                
                                                <li><a href="https://instagram.com/az_rc_ksa?igshid=1ghh0cf0h40t6" target="_blank"><i class="fa fa-instagram fa-2x" style="color: red; margin: 5px"></i></a></li>
                                               
                                                
                                            
                                        </ul>
                                        </center>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    
                </div>

                <div class="section-content mt-5">
                    <h2 class=" text-center">Organization Committee</h2>
                  <div class="row justify-content-center">
                      <div class="col-lg-5 col-md-5 col-xs-10 m-b30">
                          <div class="wt-team-2 shadow-sm">
  
                             
  
                              <div class="wt-info shadow-sm text-center">
                                  <div class="team-detail">
              
                                      <h3 class="m-t0 team-name">Belal Kawaf </h3>
                                      <h5>Racing drone team leader </h5>
                                  </div>
                                  <div class="list-group">
                                    <center>
                                        <ul class="team-social-bar text-left" style="display: -webkit-inline-box; list-style-type:none">
                                      
                                            <li><a href="https://twitter.com/BelalKawaf?s=09" target="_blank"><i class="fa fa-twitter fa-2x" style="color: #00acee; margin: 5px"></i></a></li>
                                            <li > <a href="https://www.linkedin.com/in/belal-kawaf-260434153" target="_blank"><i class="fa fa-linkedin fa-2x" style="color:#0072b1; margin: 5px"></i></a></li>
                                            
                                            <li><a href="https://instagram.com/belaldrones?igshid=njdllby9h7cz" target="_blank"><i class="fa fa-instagram fa-2x" style="color: red; margin: 5px"></i></a></li>
                                           
                                            
                                        
                                    </ul>
                                    </center>
                                </div>
                              </div>
  
                          </div>
                      </div>
  
                      <div class="col-lg-5 col-md-5 col-xs-10 m-b30">
                          <div class="wt-team-2 shadow-sm text-center">
  
                              
  
                              <div class="wt-info shadow-sm">
                                  <div class="team-detail">
                                  
                                      <h3 class="m-t0 team-name">Rayan AlAkkad</h3>
                                      <h5>UAV Expert at RIOTU Lab </h5>
                                  </div>
                                  <div class="list-group">
                                    <center>
                                        <ul class="team-social-bar text-center" style="display: -webkit-inline-box; list-style-type:none">
                                              
                                           
                                            <li > <a href="https://www.linkedin.com/in/rayan-akkad" target="_blank"><i class="fa fa-linkedin fa-2x" style="color:#0072b1; margin: 5px"></i></a></li>
                                            
                                            <li><a href="https://instagram.com/rayan_fpv?igshid=7k77otdiuvgz" target="_blank"><i class="fa fa-instagram fa-2x" style="color: red; margin: 5px"></i></a></li>
                                           
                                            
                                        
                                    </ul>
                                    </center>
                                  </div>
                              </div>
  
                          </div>
                      </div>
                      
                      
                      
                  </div>
                
            </div>

    </div>
    <!-- OUR TEAM SECTION END -->
            
            <!-- CLIENT LOGO SECTION START -->
            <div class="section-full bg-gray p-t50 p-b50 client-logo-outer-one">
                <div class="container-fluid">

                    <div class="section-content p-tb30 owl-btn-vertical-center">
                        <div class="owl-carousel home-client-carousel-2">

                        <?php

                        foreach(glob("images/sponsors/{*.gif,*.jpg,*.png,*.jpeg,*.bmp}", GLOB_BRACE) as $image){
                            echo '<div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo client-logo-media">
                                    <a href="javascript:void(0);"><img src="'.$image.'" alt=""></a>
                                </div>
                            </div>
                        </div>';
                        } 

                        ?>

                            

                    

                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo client-logo-media">
                                        <a href="javascript:void(0);"><img src="images/client-logo/Club Logo.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                             <div class="item">
                                 <div class="ow-client-logo">
                                     <div class="client-logo client-logo-media">
                                         <a href="javascript:void(0);"><img
                                                 src="images/client-logo/PSU Logo.png" alt=""></a>
                                     </div>
                                 </div>
                             </div>
                            
                           

                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo client-logo-media">
                                        <a href="javascript:void(0);"><img src="images/client-logo/RIOTU Logo.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo client-logo-media">
                                        <a href="javascript:void(0);"><img src="images/client-logo/az logo .png" alt=""></a>
                                    </div>
                                </div>

                           
                        </div>
                    </div>

                </div>
            </div>
            <!-- CLIENT LOGO  SECTION End -->
                                      
        </div>
        <!-- CONTENT END -->

       <!-- FOOTER START -->
       <footer class="site-footer footer-large footer-dark text-white footer-style1">

<!-- FOOTER BLOCKES START -->
<div class="footer-top" id="contactus">
    <div class="container">
        <div class="row">

            <div class="col-lg-3 col-md-6 " style="margin-right: 15%">

                <div class="widget recent-posts-entry">
                    <h3 class="widget-title">Get in Touch</h3>
                    <ul class="widget_address">
                        <li><i class="fa fa-map-marker"></i>P.O.Box No. 66833 Rafha Street, Riyadh </li>
                        <li><i class="fa fa-envelope"></i>racing@psu.edu.sa</li>
                        <li> <i class="fa fa-phone"></i>0114948851</li>
                    </ul>
                </div>


            </div>


            <div class="col-lg-3 col-md-6 "style="margin-right: 10%">
                <div class="widget widget_services">
                    <h3 class="widget-title">Useful links</h3>
                    <ul>
                        <li><a target="_blank" href="https://www.riotu-lab.org">RIOTU Lab</a></li>
                        <li><a target="_blank" href="https://www.psu.edu.sa">Prince Sultan University</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 " style="margin-right: auto;">
                <div class="widget recent-posts-entry">
                    <h3 class="widget-title">Our Location</h3>
                    <div class="section-content">
                        <div class="widget-post-bx">
                            <div class="widget-post clearfix">
                                
                               
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3623.731718429438!2d46.699132215759334!3d24.736089084112688!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f0292c1fb5529%3A0x3fbc5cb308e60dd8!2sPrince%20Sultan%20University!5e0!3m2!1sen!2ssa!4v1604594675336!5m2!1sen!2ssa" width="100%" height="200em" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" class="shadow-lg"></iframe>

                                
                            </div>
                            <div class="widget-post clearfix">
                                
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>

         

        </div>
    </div>
</div>
        <!-- FOOTER COPYRIGHT -->
        
        <div class="footer-middle">
        
            <div class="container">
                <div class="footer-middle-content">
                    <div class="logo-footer">
                        <a href="index.html"><img src="images/logo-light.png" alt=""></a>
                    </div>
        
                    <ul class="copyrights-nav">
                            <li><a href="login.php">Log in</a></li>
                            
                        </ul>
        
                    <ul class="social-icons  wt-social-links footer-social-icon">
                        <li><a target="_blank" href="https://instagram.com/psurdc?igshid=uafj76h5r67m" class="fa fa-instagram"></a></li>
                        <li><a target="_blank" href="https://www.facebook.com/riotu.center" class="fa fa-facebook"></a></li>
                        <li><a target="_blank" href="https://twitter.com/riotulab" class="fa fa-twitter"></a></li>
                        <li><a target="_blank" href="http://linkedin.com/in/anis-koubaa-84aa4344" class="fa fa-linkedin"></a></li>
                    </ul>
                </div>
            </div>
        
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="wt-footer-bot-left d-flex justify-content-center">
                    <span class="copyrights-text">© 2020 RIOTU.</span>
                </div>
            </div>
        </div>
        
        
        </footer>
        <!-- FOOTER END -->

        <!-- BUTTON TOP START -->
		<button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>

 	</div>

<!-- LOADING AREA START ===== -->
<div class="loading-area">
    <div class="loading-box"></div>
    <div class="loading-pic">
        <div class="cssload-loader"></div>
    </div>
</div>
<!-- LOADING AREA  END ====== -->

<!-- JAVASCRIPT  FILES ========================================= --> 
<script  src="js/jquery-2.2.0.min.js"></script><!-- JQUERY.MIN JS -->
<script  src="js/popper.min.js"></script><!-- POPPER.MIN JS -->
<script  src="js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script  src="js/bootstrap-select.min.js"></script><!-- Form js -->
<script  src="js/magnific-popup.min.js"></script><!-- MAGNIFIC-POPUP JS -->
<script  src="js/waypoints.min.js"></script><!-- WAYPOINTS JS -->
<script  src="js/counterup.min.js"></script><!-- COUNTERUP JS -->
<script  src="js/waypoints-sticky.min.js"></script><!-- STICKY HEADER -->
<script  src="js/isotope.pkgd.min.js"></script><!-- MASONRY  -->
<script  src="js/owl.carousel.min.js"></script><!-- OWL  SLIDER  -->
<script  src="js/stellar.min.js"></script><!-- PARALLAX BG IMAGE   -->
<script  src="js/theia-sticky-sidebar.js"></script><!-- STICKY SIDEBAR  -->
<script  src="js/jquery.bootstrap-touchspin.js"></script><!-- FORM JS -->

<script  src="js/custom.js"></script><!-- CUSTOM FUCTIONS  -->

<script  src="js/jquery.bgscroll.js"></script><!-- BACKGROUND SCROLL -->
<script src="js/slick.js"></script>
<script src="js/jquery-ui.js"></script>






<!-- REVOLUTION JS FILES -->

<script  src="plugins/revolution/revolution/js/jquery.themepunch.tools.min.js"></script>
<script  src="plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->	
<script  src="plugins/revolution/revolution/js/extensions/revolution-plugin.js"></script>

<!-- REVOLUTION SLIDER SCRIPT FILES -->
<script  src="js/rev-script-1.js"></script>


</body>

</html>

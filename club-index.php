<?php 

session_start();
require('sql/connect.php');



?>

<!DOCTYPE html>
<html lang="en">

<head>

    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="" />

    <!-- FAVICONS ICON -->
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="images/client-logo/racinglabWhite.png" />

    <!-- PAGE TITLE HERE -->
    <title> <?php 
                     $statment = $pdo->prepare ("SELECT * FROM club_content_table WHERE type='title'");
                     $statment->execute();
                     
                     while($row = $statment->fetch(PDO::FETCH_ASSOC)){
                           echo $row["content"];
                         }
                    ?></title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Muli:wght@200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">


</head>

<body>

    <div class="page-wraper">



        <!-- HEADER START -->
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
                            
                            <!-- NAV Toggle Button -->
                            <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggler collapsed">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar icon-bar-first"></span>
                                <span class="icon-bar icon-bar-two"></span>
                                <span class="icon-bar icon-bar-three"></span>
                            </button> 
                            <?php 
                     $statment = $pdo->prepare ("SELECT * FROM club_content_table WHERE type='email'");
                     $statment->execute();
                     
                     while($row = $statment->fetch(PDO::FETCH_ASSOC)){
                         $_SESSION['email'] = $row["content"];
                          
                         }
                    ?>
                            <div class="extra-nav header-2-nav">
                                
                                <div class="extra-cell">
                                    <div class="header-nav-request">
                                        <a href="mailto:<?php echo $_SESSION['email'];?>" style="background-color: inherit"> <?php 
                     $statment = $pdo->prepare ("SELECT * FROM club_content_table WHERE type='email'");
                     $statment->execute();
                     
                     while($row = $statment->fetch(PDO::FETCH_ASSOC)){
                       
                           echo $row["content"];
                         }
                    ?></a> 
                                    </div>
                                </div>                                
                                 
                             </div>                                                                       

                             
                            <!-- MAIN Vav -->
                            <div class="nav-animation header-nav navbar-collapse collapse  justify-content-center">
                        
                                <ul class=" nav navbar-nav">
                                    <li class=""><a href="#home1">Home</a>
                                      
                                    </li>
                                    
                                                                       
                                    <li><a href="#committe">Commitee</a>
                                                                      
                                    </li>
                                    <li><a href="#stat">Statistics</a>

                                    </li>
                                    <li><a href="#joinus">Join Us</a>
                                                                      
                                   </li>
                                    <li>
                                        <a href="#aboutme">About us</a>
                            
                                    </li>                                   
                                    <li><a href="#contactus">Contact us</a>
                                                                        
                                   </li>                                   
                                                    

                               
                                </ul>
    
                            </div>

                        </div>


                       
                        <!-- SITE Search -->
                        <div id="search-toggle-block">
                            <div id="search">
                                <form role="search" id="searchform" action="/search" method="get" class="radius-xl">
                                    <div class="input-group">
                                        <input class="form-control" value="" name="q" type="search"
                                            placeholder="Type to search" />
                                        <span class="input-group-append"><button type="button" class="search-btn"><i
                                                    class="fa fa-search"></i></button></span>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </header>
        <!-- HEADER END -->

        <!-- CONTENT START -->
        <div class="page-content" id="home1">

            <!-- SLIDER START -->
            <div class="slider-outer" id="home2">

                <div id="welcome_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="goodnews-header"
                    data-source="gallery" style="background:#eeeeee;padding:0px;">
                    <div id="webmax-three" class="rev_slider fullscreenbanner" style="display:none;"
                        data-version="5.4.3.1">
                        <ul>

                            <!-- SLIDE 1 -->
                            <li data-index="rs-901" data-transition="fade" data-slotamount="default"
                                data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default"
                                data-easeout="default" data-masterspeed="default"
                                data-thumb="images/main-slider/slider3/slide1.jpg" data-rotate="0"
                                data-fstransition="fade" data-fsmasterspeed="300" data-fsslotamount="7"
                                data-saveperformance="off" data-title="Slide Title" data-param1="Additional Text"
                                data-param2="" data-param3="" data-param4="" data-param5="" data-param6=""
                                data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                <!-- MAIN IMAGE -->

                                <img src="images/main-slider/slider3/slide1.jpg" alt=""
                                    data-lazyload="images/main-slider/slider3/slide1.jpg"
                                    data-bgposition="center center" data-kenburns="on" data-duration="10000"
                                    data-ease="Power1.easeOut" data-scalestart="110" data-scaleend="100"
                                    data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0"
                                    class="rev-slidebg" data-no-retina>


                                <!-- LAYER NR. 0 [ for overlay ] -->
                                <div class="tp-caption tp-shape tp-shapewrapper " id="slide-901-layer-0"
                                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                    data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                    data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape"
                                    data-basealign="slide" data-responsive_offset="off" data-responsive="off"
                                    data-frames='[
                                {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
                                ]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]"
                                    style="z-index: 1;background-color:rgba(0, 0, 0, 0);border-color:rgba(0, 0, 0, 0);border-width:0px;">
                                </div>


                                <!-- LAYER NR. 1 Drone Img -->
                                <div class="tp-caption   tp-resizeme " id="slide-901-layer-1"
                                    data-x="['right','right','center','center']" data-hoffset="['-254','-100','0','0']"
                                    data-y="['middle','middle','bottom','bottom']" data-voffset="['-5','-5','20','20']"
                                    data-width="none" data-height="none" data-whitespace="nowrap" data-type="image"
                                    data-responsive_offset="on"
                                    data-frames='[{"from":"x:right;","speed":1500,"to":"o:1;","delay":2500,"ease":"Power3.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
                                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]" style="z-index: 13;border-width:0px;">
                                    <div class="rs-wave" data-speed="10" data-angle="0" data-radius="50px">
                                        <img src="images/how-it-work/pngegg.png" alt=""
                                            data-ww="['886px','500px','350px','250px']"
                                            data-hh="['464px','262px','183px','131px']" width="500" height="464"
                                            data-no-retina class="rs-wave">
                                    </div>
                                </div>


                                <!-- LAYER NR. 2 [ for title ] -->
                               
                                <!-- LAYER NR. 3 [ for title ] -->
                                <div class="tp-caption   tp-resizeme" id="slide-901-layer-3"
                                    data-x="['left','left','center','center']" data-hoffset="[60','60','0','0']"
                                    data-y="['middle','middle','middle','middle']"
                                    data-voffset="['-60','-60','-100','-100']" data-fontsize="['72','52','42','38']"
                                    data-lineheight="['72','52','42','38']" data-width="['600','500','85%','96%']"
                                    data-height="['none','none','none','none']"
                                    data-whitespace="['normal','normal','normal','normal']" data-type="text"
                                    data-responsive_offset="on" data-frames='[
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]' data-textAlign="['left','left','center','center']" data-paddingtop="[5,5,5,5]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]" style="z-index: 11; 
                                white-space: normal; 
                                font-weight: 700;
                                color:#fff;
                                border-width:0px; font-family: 'Rajdhani', sans-serif; text-transform:uppercase">
                                    <div class="site-text-primary pb-3"> <?php 
                     $statment = $pdo->prepare ("SELECT * FROM club_content_table WHERE type='header-title'");
                     $statment->execute();
                     
                     while($row = $statment->fetch(PDO::FETCH_ASSOC)){
                       
                           echo $row["content"];
                         }
                    ?></div>
                                </div>

                                <!-- LAYER NR. 4 [ for paragraph] -->
                                <div class="tp-caption  tp-resizeme" id="slide-901-layer-4"
                                    data-x="['left','left','center','center']" data-hoffset="['60','60','0','0']"
                                    data-y="['middle','middle','middle','middle']" data-voffset="['40','40','0','0']"
                                    data-fontsize="['20','20','18','16']" data-lineheight="['30','30','28','22']"
                                    data-width="['520','520','80%','90%']" data-height="['none','none','none','none']"
                                    data-whitespace="['normal','normal','normal','normal']" data-type="text"
                                    data-responsive_offset="on" data-frames='[
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]' data-textAlign="['left','left','center','center']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]" style="z-index: 11; 
                                font-weight: 500; 
                                color:#d3d3d3;
                                border-width:0px;font-family: 'Muli', sans-serif;">
                                   <?php 
                     $statment = $pdo->prepare ("SELECT * FROM club_content_table WHERE type='header-text'");
                     $statment->execute();
                     
                     while($row = $statment->fetch(PDO::FETCH_ASSOC)){
                       
                           echo $row["content"];
                         }
                    ?>
                                </div>

                                <!-- LAYER NR. 5 [ for botton ] -->
                                <div class="tp-caption tp-resizeme rev-btn" id="slide-901-layer-5"
                                    data-x="['left','left','center','center']" data-hoffset="['60','60','0','0']"
                                    data-y="['middle','middle','middle','middle']"
                                    data-voffset="['150','150','110','110']"
                                    data-lineheight="['none','none','none','none']"
                                    data-width="['300','300','300','300']" data-height="['none','none','none','none']"
                                    data-whitespace="['normal','normal','normal','normal']" data-type="text"
                                    data-responsive_offset="on" data-frames='[ 
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]' data-textAlign="['left','left','center','center']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]" style="z-index:14; text-transform:uppercase;">
                                    <a href="index.php" class="site-button"> <?php 
                     $statment = $pdo->prepare ("SELECT * FROM club_content_table WHERE type='header-button'");
                     $statment->execute();
                     
                     while($row = $statment->fetch(PDO::FETCH_ASSOC)){
                       
                           echo $row["content"];
                         }
                    ?></a>
                                </div>


                                <div class="tp-caption rev-btn  tp-resizeme slider-block" id="slide-901-layer-7"
                                    data-x="['right','right','center','center']" data-hoffset="['0','0','0','0']"
                                    data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                    data-width="none" data-height="none" data-whitespace="nowrap" data-type="button"
                                    data-responsive_offset="on"
                                    data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},
                                    {"delay":"wait","speed":500,"to":"y:[-100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power1.easeIn"}]'
                                    data-textAlign="['right','right','right','right']"
                                    data-paddingtop="[200,200,200,200]" data-paddingright="[180,180,180,180]"
                                    data-paddingbottom="[200,200,200,200]" data-paddingleft="[180,180,180,180]"
                                    style="z-index: 8;">
                                    <div class="rs-wave" data-speed="3" data-angle="0" data-radius="10px"></div>
                                </div>


                            </li>

                            <!-- SLIDE 2 -->
                            

                            <!-- SLIDE 3 -->
                            


                        </ul>
                        <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                    </div>
                </div>

            </div>
            <!-- SLIDER END -->

            <!-- ABOUT ONE SECTION START -->
            <div class="section-full p-t80 p-b50 bg-gray" id="aboutme">
                <div class="about-section-two">
                    <div class="container">
                        <div class="section-content">
                            <div class="row justify-content-center d-flex">

                                <div class="col-lg-7 col-md-12 m-b30">
                                    <div class="">
                                        <div class="about-drone-three-media"><img class="shadow-lg rounded"
                                                src="images/aboutus.png"
                                                alt=""  rounded></div>
                                    </div>
                                </div>

                                <div class="col-lg-5 col-md-12 m-b30">
                                    <div class="about-section-one-right">
                                        <!-- TITLE START-->
                                        <div class="left wt-small-separator-outer">
                                            <div class="wt-small-separator site-text-primary">
                                                <div class="sep-leaf-left"></div>
                                                <div><?php 
                     $statment = $pdo->prepare ("SELECT * FROM club_content_table WHERE type='section1-about'");
                     $statment->execute();
                     
                     while($row = $statment->fetch(PDO::FETCH_ASSOC)){
                           echo $row["content"];
                         }
                    ?></div>
                                                <div class="sep-leaf-right"></div>
                                            </div>
                                            
                                            <p>
                                            <?php 
                     $statment = $pdo->prepare ("SELECT * FROM club_content_table WHERE type='section1-text'");
                     $statment->execute();
                     
                     while($row = $statment->fetch(PDO::FETCH_ASSOC)){
                           echo $row["content"];
                         }
                    ?>
                                         
                                            </p>


                                        </div>
                                        <!-- TITLE END-->                                       
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ABOUT ONE SECTION END -->

            <!-- HOW IT WORK SECTION START -->
            <div class="section-full p-t80 p-b50">

<div class="container mt-5">

    <!-- TITLE START-->
    <div class="section-head center wt-small-separator-outer mb-5">    
        <h2>Safty Rules</h2>
    </div>
    <!-- TITLE END-->
    <?php ?>
    <div class="section-content">
        <div class="row justify-content-center d-flex how-it-drone3">

            <div class="col-lg-4 col-md-12 m-b30 how-it-drone3-left">
            <?php  
                                                $statment = $pdo->prepare ("SELECT * FROM `safty` ORDER BY `id`");                                               
                                                $statment->execute();
                                                $i=0;
                                               while($row = $statment->fetch(PDO::FETCH_ASSOC)):
                                                ?>
                                            
                                            <div class="wt-box d-icon-box-two m-b40 mb-5">
                    <div class="wt-icon-box-wraper right ">

                        <div class="icon-md inline-icon">
                            <span class="icon-cell site-text-secondry"><i
                                    class="number-style"><?php echo "0".$row['id']; ?></i></span>
                        </div>
                        <div class="icon-content">
                            <div class="d-icon-box-title title-style-2 site-text-secondry">
                                <h3 class="s-title-one"><?php echo $row['safty']; ?></h3>
                            </div>
                            <div class="d-icon-box-content">
                            <p><?php echo $row['detail']; ?></p>
                            </div>
                        </div>

                    </div>
                </div>
                                                        
                                                 
                                               <?php $i++;
                                                if($i == 4){
                                                    break;
                                                }
                                                     endwhile; ?>
               

                
               

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
            <?php  
                                                $statment = $pdo->prepare ("SELECT * FROM `safty` ORDER BY `id` desc" );                                               
                                                $statment->execute();
                                                $i=5;
                                               while($row = $statment->fetch(PDO::FETCH_ASSOC)):
                                                ?>
                                            
                                            <div class="wt-box d-icon-box-two m-b40">
                    <div class="wt-icon-box-wraper left">
                        <div class="icon-md inline-icon">
                            <span class="icon-cell site-text-secondry"><i
                                    class="number-style"><?php echo "0".$i; ?></i></span>
                        </div>
                        <div class="icon-content">
                            <div class="d-icon-box-title title-style-2 site-text-secondry">
                                <h3 class="s-title-one"><?php echo $row['safty']; ?></h3>

                                
                               
                            </div>
                            <div class="d-icon-box-content">
                                <p><?php echo $row['detail']; ?></p>
                            </div>

                        </div>
                    </div>
                </div>
                                                        
                                                 
                                               <?php $i++;
                                                if($i == 9){
                                                    break;
                                                }
                                                     endwhile; ?>
                

                

               
                

            </div>

        </div>
    </div>
</div>

</div>
            <!-- HOW IT WORK  SECTION END -->

            <!-- GALLERY SECTION START -->
            <div class="section-full  p-t80 p-b80 overlay-wraper bg-cover bg-no-repeat"
                style="background-image:url(images/background/RD-back.png);">
                <div class="overlay-main bg-black opacity-09"></div>
                <div class="container">

                    <div class="wt-separator-two-part">
                        <div class="row wt-separator-two-part-row text-white">
                            <div class="col-lg-5 col-md-6 wt-separator-two-part-left">
                                <!-- TITLE START-->
                                <div class="section-head left wt-small-separator-outer">
                                    <div class="wt-small-separator text-white">
                                        <div class="sep-leaf-left"></div>
                                        <div>Photo gallery</div>
                                        <div class="sep-leaf-right"></div>
                                    </div>
                                    <!-- <h2>Photo gallery</h2> -->
                                </div>
                                <!-- TITLE END-->
                            </div>


                            <!-- <div class="col-lg-7 col-md-6 wt-separator-two-part-right text-left">
                                <p>There are many variations of passages of lorem Ipsum available, but the majority have
                                    suffered alteration in some form, by injected humour, or randomised words which
                                    don't look even slightly.</p>

                            </div> -->

                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="container">
                        <!--Carousel Wrapper-->
<div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
    <!--Slides-->
    
    <div class="carousel-inner" role="listbox">
    <?php

foreach(glob("images/gallery/landscape/{*.gif,*.jpg,*.png,*.jpeg,*.bmp}", GLOB_BRACE) as $image){
    echo '
    <div class="carousel-item active">
       
        <img class="d-block w-100" src="'.$image.'" alt="">
      
    </div>
';
} 

?>
      
    </div>
    <!--/.Slides-->
    <!--Controls-->
    
    <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
    
   
    <ol class="carousel-indicators">
      <li data-target="#carousel-thumb" data-slide-to="0" class="active">
        <img src="https://mdbootstrap.com/img/Photos/Others/Carousel-thumbs/img%20(88).jpg" width="100">
      </li>
    
    <?php
$i=0;
foreach(glob("https://mdbootstrap.com/img/Photos/Others/Carousel-thumbs/{*.gif,*.jpg,*.png,*.jpeg,*.bmp}", GLOB_BRACE) as $image){
    echo '<li data-target="#carousel-thumb" data-slide-to="'.$i.'" >
    <img src="'.$image.'" width="100">
  </li>'
  ;
  $i++;
} 

?>
   
    </ol>
  </div>
  <!--/.Carousel Wrapper-->
                    </div>
                </div>

            </div>

            <!-- GALLERY SECTION END -->

            <!-- COUNTER SECTION START -->
            <div class="section-full counter-outer3 p-t80 p-b50" id="stat">
                <div class="container">
                    <div class="section-content">
                        <div class="counter-outer">

                            <div class="row justify-content-center">

                                <div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30 ">
                                    <div class="counter-box">
                                        <h2 class="counter"> <?php 
                     $statment = $pdo->prepare ("SELECT * FROM club_content_table WHERE type='members'");
                     $statment->execute();
                     
                     while($row = $statment->fetch(PDO::FETCH_ASSOC)){
                       
                           echo $row["content"];
                         }
                    ?></h2>
                                        <span class="site-text-primary title-style-2">Members</span>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30 ">
                                    <div class="counter-box">
                                        <h2 class="counter"> <?php 
                     $statment = $pdo->prepare ("SELECT * FROM club_content_table WHERE type='flight-hours'");
                     $statment->execute();
                     
                     while($row = $statment->fetch(PDO::FETCH_ASSOC)){
                       
                           echo $row["content"];
                         }
                    ?></h2>
                                        <span class="site-text-primary title-style-2">flight hours</span>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30 ">
                                    <div class="counter-box">
                                        <h2 class="counter"> <?php 
                     $statment = $pdo->prepare ("SELECT * FROM club_content_table WHERE type='workshops'");
                     $statment->execute();
                     
                     while($row = $statment->fetch(PDO::FETCH_ASSOC)){
                       
                           echo $row["content"];
                         }
                    ?></h2>
                                        <span class="site-text-primary title-style-2">work shops</span>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30 ">
                                    <div class="counter-box">
                                        <h2 class="counter"> <?php 
                     $statment = $pdo->prepare ("SELECT * FROM club_content_table WHERE type='racing-drones'");
                     $statment->execute();
                     
                     while($row = $statment->fetch(PDO::FETCH_ASSOC)){
                       
                           echo $row["content"];
                         }
                    ?></h2>
                                        <span class="site-text-primary title-style-2">Racing Drones</span>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- COUNTER SECTION  SECTION END -->

            <!-- ViDEO SECTION START -->
            <div class="section-full bg-black p-t80 p-b50">

                <div class="container">

                    <div class="section-content">
                        <div class="row justify-content-center align-items-center video-style2-outer">
                            <div class="col-lg-6 col-md-12  m-b30">
                                <div class="video-style2-left">
                                    <div class="video-style2-circle-outer">
                                        <div class="video-style2-ring-outer  rotate-center">
                                            <div class="dot-circle one"></div>
                                            <div class="dot-circle two"></div>
                                            <div class="dot-circle three"></div>
                                        </div>
                                        <div class="video-style2-media">
                                            <img src="images/video-2.jpg" alt="">
                                            <a href="images/video/Promo Nested.mp4"
                                                class="mfp-video play-now">
                                                <i class="icon fa fa-play"></i>
                                                <span class="ripple"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-lg-6 col-md-12 ">
                                <div class="video-style2-right">
                                    <!-- TITLE START-->
                                    <div class="left wt-small-separator-outer text-white">
                                        <div class="wt-small-separator text-white">
                                            <div class="sep-leaf-left"></div>
                                            <div><?php 
                     $statment = $pdo->prepare ("SELECT * FROM club_content_table WHERE type='vision'");
                     $statment->execute();
                     
                     while($row = $statment->fetch(PDO::FETCH_ASSOC)){
                       
                           echo $row["content"];
                         }
                    ?></div>
                                            <div class="sep-leaf-right"></div>
                                        </div>
                                        <h2><?php 
                     $statment = $pdo->prepare ("SELECT * FROM club_content_table WHERE type='vision-title'");
                     $statment->execute();
                     
                     while($row = $statment->fetch(PDO::FETCH_ASSOC)){
                       
                           echo $row["content"];
                         }
                    ?></h2>
                                        <p><?php 
                     $statment = $pdo->prepare ("SELECT * FROM club_content_table WHERE type='vision-text'");
                     $statment->execute();
                     
                     while($row = $statment->fetch(PDO::FETCH_ASSOC)){
                       
                           echo $row["content"];
                         }
                    ?></p>
                                    </div>
                                    <!-- TITLE END-->
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
            <!-- VIDEO SECTION SECTION END -->

            <!-- OUR BLOG START -->
            
            <!-- OUR BLOG END -->

            <!-- OUR PLAN US START -->
            <div class="section-full p-t80 p-b50 bg-white" id="joinus">
                <div class="container">
                    <!-- TITLE START-->
                    <div class="section-head center wt-small-separator-outer text-center">
                        <div class="wt-small-separator site-text-primary">
                            <div class="sep-leaf-left"></div>
                            <div>Join Us</div>
                            <div class="sep-leaf-right"></div>
                        </div>
                        <h2>Work shops</h2>
                    </div>
                    <!-- TITLE END-->

                    <div class="section-content ">
                        <div class="pricingtable-row">
                            <div class="row d-flex justify-content-center">


                                

                                <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                                    <div class="pricingtable-wrapper">

                                        <div class="pricingtable-inner pricingtable-highlight">

                                            <div class="pricing-table-top-section">

                                                <div class="pricingtable-title">
                                                    <h2 class="title-style-2"><?php 
                     $statment = $pdo->prepare ("SELECT * FROM club_content_table WHERE type='workshop-title'");
                     $statment->execute();
                     
                     while($row = $statment->fetch(PDO::FETCH_ASSOC)){
                       
                           echo $row["content"];
                         }
                    ?></h2>
                                                </div>

                                                <div class="pricingtable-price">
                                                    <h2 class="pricingtable-bx" ><sup 
                                                            class="pricingtable-sign">SAR</sup><span  id="price700"><?php 
                     $statment = $pdo->prepare ("SELECT * FROM club_content_table WHERE type='workshop-price'");
                     $statment->execute();
                     
                     while($row = $statment->fetch(PDO::FETCH_ASSOC)){
                       
                           echo $row["content"];
                         }
                    ?></span></h2>
                                                </div>

                                            </div>

                                            <ul class="pricingtable-features">
                                                <li><?php 
                     $statment = $pdo->prepare ("SELECT * FROM club_content_table WHERE type='workshop-line1'");
                     $statment->execute();
                     
                     while($row = $statment->fetch(PDO::FETCH_ASSOC)){
                       
                           echo $row["content"];
                         }
                    ?></li>
                                                <li><?php 
                     $statment = $pdo->prepare ("SELECT * FROM club_content_table WHERE type='workshop-line2'");
                     $statment->execute();
                     
                     while($row = $statment->fetch(PDO::FETCH_ASSOC)){
                       
                           echo $row["content"];
                         }
                    ?></li>
                                                <li><?php 
                     $statment = $pdo->prepare ("SELECT * FROM club_content_table WHERE type='workshop-line3'");
                     $statment->execute();
                     
                     while($row = $statment->fetch(PDO::FETCH_ASSOC)){
                       
                           echo $row["content"];
                         }
                    ?></li>
                                                <li><?php 
                     $statment = $pdo->prepare ("SELECT * FROM club_content_table WHERE type='workshop-line4'");
                     $statment->execute();
                     
                     while($row = $statment->fetch(PDO::FETCH_ASSOC)){
                       
                           echo $row["content"];
                         }
                    ?></li>
                                                
                                            </ul>

                                            <div class="pricingtable-footer row">
                                                <div class="col-sm-12">
                                                <a onclick="changePrice()"  class="text-nowrap col-sm-12 justify-content-center  site-btn-effect2 site-button bg-white border border-danger " id="studentButton">I'm a Student</a>
                                            </div>
                                                <div class="col-sm-12">
                                              
                                                <a href="javascript:void(0);" class="site-button site-btn-effect justify-content-center col-sm-12 mt-4" data-target="#myModal1" data-toggle="modal"><?php 
                     $statment = $pdo->prepare ("SELECT * FROM club_content_table WHERE type='workshop-button'");
                     $statment->execute();
                     
                     while($row = $statment->fetch(PDO::FETCH_ASSOC)){
                       
                           echo $row["content"];
                         }
                    ?>
                                                </a>
                                                
                                                           
                                            <div class="container ">
                                              
                                                <!-- Button to Open the Modal -->
                                              
                                              
                                                <!-- The Modal -->
                                                <div class="modal fade" id="myModal1" >
                                                  <div class="modal-dialog" >
                                                    <div class="modal-content">
                                                    
                                                      <!-- Modal Header -->
                                                      <div class="modal-header" >
                                                       
                                                        <h3 class="modal-title" >Register for Workshop</h3>
                                                          
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        
                                                      </div>
                                                      
                                                      <!-- Modal body -->
                                                      <div class="modal-body bg-white mt-4 z-index-2000000" >
                                              
                                                          <form action="php/workshop-display.php" class="was-validated " method="POST">
                                                              <div class="form-group text-left">
                                                                  <label for="uname" class="left">Full Name</label>
                                                                  <input type="text" class="form-control border" id="uname" placeholder="Enter your name" name="uname" required>
                                                                  <div class="valid-feedback">Valid.</div>
                                                                  <div class="invalid-feedback">Please fill out this field.</div>
                                                              </div>
                                                             
                                                              <div class="form-group text-left">
                                                                  <label for="pwd">Mobile Number</label>
                                                                  <input type="text" class="form-control border" id="pwd" placeholder="Enter your number" name="pn" required>
                                                                  <div class="valid-feedback">Valid.</div>
                                                                  <div class="invalid-feedback">Please fill out this field.</div>
                                                              </div>
                                                              <div class="form-group text-left">
                                                                  <label for="pwd">Email</label>
                                                                  <input type="email" class="form-control border" id="pwd" placeholder="Enter your email" name="email" required>
                                                                  <div class="valid-feedback">Valid.</div>
                                                                  <div class="invalid-feedback">Please fill out this field.</div>
                                                              </div>
                                                              <div class="form-group text-left">
                                                                <label for="pwd">Affiliation/Employer</label>
                                                                <input type="text" class="form-control border" id="pwd" placeholder="Enter your affiliation/employer" name="aff" required>
                                                                <div class="valid-feedback">Valid.</div>
                                                                <div class="invalid-feedback">Please fill out this field.</div>
                                                            </div>
                                                            <div class="form-group text-left">
                                                                <label for="pwd">Your City</label>
                                                                <input type="text" class="form-control border" id="pwd" placeholder="Enter your city" name="city" required>
                                                                <div class="valid-feedback">Valid.</div>
                                                                <div class="invalid-feedback">Please fill out this field.</div>
                                                            </div>
                                                            <div class="form-group text-left">
                                                                <label for="pwd">Your Country</label>
                                                                <input type="text" class="form-control border" id="pwd" placeholder="Enter your country" name="country" required>
                                                                <div class="valid-feedback">Valid.</div>
                                                                <div class="invalid-feedback">Please fill out this field.</div>
                                                            </div>
                                                            <div class="form-group text-left">
                                                                <label for="pwd">Are you a university Student?</label>
                                                                <input type="radio" id="student-yes" name="student" value="yes">
                                                                <label class="label" for="student-yes">Yes</label>
                                                                <input type="radio" id="student-no" name="student" value="no">
                                                                <label for="student-no">No</label>
                                                                <div class="valid-feedback">Valid.</div>
                                                                <div class="invalid-feedback">Please fill out this field.</div>
                                                            </div>
                                                            <div class="form-group text-left">
                                                                <label for="pwd">Do you have any prior background on drones?</label>
                                                                <input type="radio" id="background-yes" name="background" value="yes">
                                                                <label class="label" for="background-yes">Yes</label>
                                                                <input type="radio" id="background-little" name="background" value="little">
                                                                <label for="background-little">A little</label>
                                                                <input type="radio" id="background-no" name="background" value="no">
                                                                <label class="label" for="background-no">No</label>
                                                                <input type="radio" id="background-other" name="background" value="other">
                                                                <label class="label" for="background-other">Other</label>
                                                                <input type="text" class="form-control border-bottom" id="pwd" placeholder="Enter your experience" name="exp">
                                                
                                                            </div>  

                                                              <button type="submit" class="btn btn-primary text-dark text-center" style="background: inherit; border-color: red;" name="submit">Send</button>
                                                          </form>
                                                      </div>
                                                
                                                
                                                        
                                                        </div>
                                                    
                                                   </div>
                                              </div>
                                          </div>
                            </div>
                                               
                                                   
                                               
                                                       
                                        
                                            </div>

                                        </div>
                                    </div>
                                </div>

                               
                            </div>
                        </div>
                    </div>
</div>
               
                    
                    <!-- OUR TEAM START -->
            <div class="section-full p-t80 p-b50 bg-white" id="committe">
                <div class="container">

                    <!-- TITLE START-->
                    <div class="section-head center wt-small-separator-outer text-center">
                        <div class="wt-small-separator site-text-primary">
                            <div class="sep-leaf-left"></div>
                            <div>Our Team</div>
                            <div class="sep-leaf-right"></div>
                        </div>
                        <h2>Our Dedicated Team</h2>
                    </div>
                    <!-- TITLE END-->

                    <div class="section-content">
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                                <div class="wt-team-2 shadow-sm">

                                   

                                    <div class="wt-info shadow-sm">
                                        <div class="team-detail">
                                            <span
                                                class="title-style-2 team-position site-text-primary">Supervisor</span>
                                            <h3 class="m-t0 team-name"><a >Dr. Anis Koubaa</a>
                                            </h3>
                                        </div>
                                        <div class="list-group">
                                          
                                            <ul class="team-social-bar text-left" style="display: -webkit-inline-box; list-style-type:none">
                                                  
                                                <li><a href="https://twitter.com/riotulab" target="_blank"><i class="fa fa-twitter fa-2x" style="color: #00acee; margin: 5px"></i></a></li>
                                                <li > <a href="https://www.linkedin.com/in/anis-koubaa-84aa4344/" target="_blank"><i class="fa fa-linkedin fa-2x" style="color:#0072b1; margin: 5px"></i></a></li>
                                                
                                                <li><a href="https://www.facebook.com/riotu.center" target="_blank"><i class="fa fa-facebook fa-2x" style="color: #0072b1; margin: 5px"></i></a></li>
                                               
                                                
                                            
                                        </ul>
                                        
                                      </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                                <div class="wt-team-2 shadow-sm">

                                    

                                    <div class="wt-info shadow-sm">
                                        <div class="team-detail">
                                            <span class="title-style-2 team-position site-text-primary">Coach
                                                </span>
                                            <h3 class="m-t0 team-name"><a >Abdulhadi Azouz</a></h3>
                                        </div>
                                        <div class="list-group">
                                          
                                            <ul class="team-social-bar text-left" style="display: -webkit-inline-box; list-style-type:none">
                                                  
                                            <li > <a href="https://www.linkedin.com/in/abdulhadi-“az”-azouz-85431285" target="_blank"><i class="fa fa-linkedin fa-2x" style="color:#0072b1; margin: 5px"></i></a></li>
                                                
                                                <li><a href="https://instagram.com/az_rc_ksa?igshid=1ghh0cf0h40t6" target="_blank"><i class="fa fa-instagram fa-2x" style="color: red; margin: 5px"></i></a></li>
                                               
                                                
                                            
                                        </ul>
                                        
                                      </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                                <div class="wt-team-2 shadow-sm">

                                    

                                    <div class="wt-info shadow-sm" >
                                        <div class="team-detail">
                                            <span
                                                class="title-style-2 team-position site-text-primary">Team Leader</span>
                                            <h3 class="m-t0 team-name"><a >Belal Kawaf</a></h3>
                                        </div>
                                        <div class="list-group">
                                            <ul class="team-social-bar text-left" style="display: -webkit-inline-box; list-style-type:none">
                                              
                                                <li><a href="https://twitter.com/BelalKawaf?s=09" target="_blank"><i class="fa fa-twitter fa-2x" style="color: #00acee; margin: 5px"></i></a></li>
                                                <li > <a href="https://www.linkedin.com/in/belal-kawaf-260434153" target="_blank"><i class="fa fa-linkedin fa-2x" style="color:#0072b1; margin: 5px"></i></a></li>
                                                
                                                <li><a href="https://instagram.com/belaldrones?igshid=njdllby9h7cz" target="_blank"><i class="fa fa-instagram fa-2x" style="color: red; margin: 5px"></i></a></li>
                                               
                                                
                                            
                                        </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                                <div class="wt-team-2 shadow-sm">

                                    

                                    <div class="wt-info shadow-sm" >
                                        <div class="team-detail">
                                            <span
                                                class="title-style-2 team-position site-text-primary">Member</span>
                                            <h3 class="m-t0 team-name"><a >Rayan Al Akkad</a></h3>
                                        </div>
                                        <div class="list-group">
                                          
                                            <ul class="team-social-bar text-left" style="display: -webkit-inline-box; list-style-type:none">
                                                  
                                                
                                                <li > <a href="https://www.linkedin.com/in/rayan-akkad" target="_blank"><i class="fa fa-linkedin fa-2x" style="color:#0072b1; margin: 5px"></i></a></li>
                                                
                                                <li><a href="https://instagram.com/rayan_fpv?igshid=7k77otdiuvgz" target="_blank"><i class="fa fa-instagram fa-2x" style="color: red; margin: 5px"></i></a></li>
                                               
                                                
                                            
                                        </ul>
                                        
                                      </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                                <div class="wt-team-2 shadow-sm">

                                    

                                    <div class="wt-info shadow-sm" >
                                        <div class="team-detail">
                                            <span
                                                class="title-style-2 team-position site-text-primary">Member</span>
                                            <h3 class="m-t0 team-name"><a >Amjad Al Sehli</a></h3>
                                        </div>
                                        <div class="list-group">
                                          
                                            <ul class="team-social-bar text-left" style="display: -webkit-inline-box; list-style-type:none">
                                                  
                                            <li><a href="" target="_blank"><i class="fa fa-twitter fa-2x" style="color: white; margin: 5px"></i></a></li>
                                               
                                                
                                            
                                        </ul>
                                        
                                      </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                                <div class="wt-team-2 shadow-sm">

                                    

                                    <div class="wt-info shadow-sm" >
                                        <div class="team-detail">
                                            <span
                                                class="title-style-2 team-position site-text-primary">Member</span>
                                            <h3 class="m-t0 team-name"><a >Anas Kanhouch</a></h3>
                                        </div>
                                        <div class="list-group">
                                          
                                            <ul class="team-social-bar text-left" style="display: -webkit-inline-box; list-style-type:none">
                                                  
                                             
                                            <li><a href="" target="_blank"><i class="fa fa-twitter fa-2x" style="color: white; margin: 5px"></i></a></li>
                                                
                                            
                                        </ul>
                                        
                                      </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                                <div class="wt-team-2 shadow-sm">

                                    

                                    <div class="wt-info shadow-sm" >
                                        <div class="team-detail">
                                            <span
                                                class="title-style-2 team-position site-text-primary">Member</span>
                                            <h3 class="m-t0 team-name"><a href="team-single.html">Saleh Al Yehri</a></h3>
                                        </div>
                                        <div class="list-group">
                                          
                                            <ul class="team-social-bar text-left" style="display: -webkit-inline-box; list-style-type:none">
                                                  
                                            <li><a href="" target="_blank"><i class="fa fa-twitter fa-2x" style="color: white; margin: 5px"></i></a></li>
                                               
                                                
                                            
                                        </ul>
                                        
                                      </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                                <div class="wt-team-2 shadow-sm">

                                    

                                    <div class="wt-info shadow-sm" >
                                        <div class="team-detail">
                                            <span
                                                class="title-style-2 team-position site-text-primary">Member</span>
                                            <h3 class="m-t0 team-name"><a >Bader Al - Alami</a></h3>
                                        </div>
                                        <div class="list-group">
                                          
                                            <ul class="team-social-bar text-left" style="display: -webkit-inline-box; list-style-type:none">
                                                  
                                            <li><a href="" target="_blank"><i class="fa fa-twitter fa-2x" style="color: white; margin: 5px"></i></a></li>
                                               
                                                
                                            
                                        </ul>
                                        
                                      </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                                <div class="wt-team-2 shadow-sm">

                                    

                                    <div class="wt-info shadow-sm" >
                                        <div class="team-detail">
                                            <span
                                                class="title-style-2 team-position site-text-primary">Member</span>
                                            <h3 class="m-t0 team-name"><a >Naif Al-Firm</a></h3>
                                        </div>
                                        <div class="list-group">
                                            <ul class="team-social-bar text-left" style="display: -webkit-inline-box; list-style-type:none">
                                              
                                                <li><a href="https://twitter.com/acnaif" target="_blank"><i class="fa fa-twitter fa-2x" style="color: #00acee; margin: 5px"></i></a></li>
                                                <li > <a href="http://linkedin.com/in/naif-alfirm-5330a31a1" target="_blank"><i class="fa fa-linkedin fa-2x" style="color:#0072b1; margin: 5px"></i></a></li>
                                                
                                                
                                               
                                                
                                            
                                        </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                                <div class="wt-team-2 shadow-sm">

                                    

                                    <div class="wt-info shadow-sm" >
                                        <div class="team-detail">
                                            <span
                                                class="title-style-2 team-position site-text-primary">Member</span>
                                            <h3 class="m-t0 team-name"><a >Noureddin Farahat</a></h3>
                                        </div>
                                        <div class="list-group">
                                          
                                            <ul class="team-social-bar text-left" style="display: -webkit-inline-box; list-style-type:none">
                                                  
                                                <li><a href="https://twitter.com/aldhbeg" target="_blank"><i class="fa fa-twitter fa-2x" style="color: #00acee; margin: 5px"></i></a></li>
                                                <li > <a href="https://sa.linkedin.com/in/noureddin-farahat-38575a1a2" target="_blank"><i class="fa fa-linkedin fa-2x" style="color:#0072b1; margin: 5px"></i></a></li>
                                                
                                                
                                               
                                                
                                            
                                        </ul>
                                        
                                      </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                                <div class="wt-team-2 shadow-sm">

                                    

                                    <div class="wt-info shadow-sm" >
                                        <div class="team-detail">
                                            <span
                                                class="title-style-2 team-position site-text-primary">Member</span>
                                            <h3 class="m-t0 team-name"><a >Talal Bafarat</a></h3>
                                        </div>
                                        <div class="list-group">
                                            <ul class="team-social-bar text-left" style="display: -webkit-inline-box; list-style-type:none">
                                              
                                                <li><a href="https://twitter.com/TalalBafarat" target="_blank"><i class="fa fa-twitter fa-2x" style="color: #00acee; margin: 5px"></i></a></li>
                                                <li > <a href="https://www.linkedin.com/in/talalbafarat" target="_blank"><i class="fa fa-linkedin fa-2x" style="color:#0072b1; margin: 5px"></i></a></li>
                                                
                                                <li><a href="https://www.instagram.com/talalbafarat/?hl=en
                                                    " target="_blank"><i class="fa fa-instagram fa-2x" style="color: red; margin: 5px"></i></a></li>
                                               
                                                
                                            
                                        </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                                <div class="wt-team-2 shadow-sm">

                                    

                                    <div class="wt-info shadow-sm" >
                                        <div class="team-detail">
                                            <span
                                                class="title-style-2 team-position site-text-primary">Member</span>
                                            <h3 class="m-t0 team-name"><a >Bassel AlDroubi</a></h3>
                                        </div>
                                        <div class="list-group">
                                          
                                                <ul class="team-social-bar text-left" style="display: -webkit-inline-box; list-style-type:none">
                                                      
                                                  
                                                <li><a href="" target="_blank"><i class="fa fa-twitter fa-2x" style="color: white; margin: 5px"></i></a></li>
                                                    
                                                
                                            </ul>
                                            
                                          </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                                <div class="wt-team-2 shadow-sm">

                                    

                                    <div class="wt-info shadow-sm" >
                                        <div class="team-detail">
                                            <span
                                                class="title-style-2 team-position site-text-primary">Member</span>
                                            <h3 class="m-t0 team-name"><a >Koutaiba Assaf</a></h3>
                                        </div>
                                        <div class="list-group">
                                          
                                            <ul class="team-social-bar text-left" style="display: -webkit-inline-box; list-style-type:none">
                                                  
                                            <li><a href="https://twitter.com/KoutaibaSs?s=08" target="_blank"><i class="fa fa-twitter fa-2x" style="color: #00acee; margin: 5px"></i></a></li>
                                                <li > <a href="https://www.linkedin.com/in/koutaiba-assaf-451776199/" target="_blank"><i class="fa fa-linkedin fa-2x" style="color:#0072b1; margin: 5px"></i></a></li>
                                                
                                                <li><a href="https://instagram.com/kou_assaf?igshid=3ycpvl31kk29" target="_blank"><i class="fa fa-instagram fa-2x" style="color: red; margin: 5px"></i></a></li>
                                                
                                            
                                        </ul>
                                        
                                      </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                                <div class="wt-team-2 shadow-sm">

                                    

                                    <div class="wt-info shadow-sm" >
                                        <div class="team-detail">
                                            <span
                                                class="title-style-2 team-position site-text-primary">Member</span>
                                            <h3 class="m-t0 team-name"><a >Ibraheem Khurfan</a></h3>
                                        </div>
                                        <div class="list-group">
                                          
                                            <ul class="team-social-bar text-left" style="display: -webkit-inline-box; list-style-type:none">
                                            <li><a href="https://twitter.com/ibraheemkhurfan?s=20" target="_blank"><i class="fa fa-twitter fa-2x" style="color: #00acee; margin: 5px"></i></a></li>
                                            <li > <a href="https://www.linkedin.com/in/ibraheem-khurfan-534a69199" target="_blank"><i class="fa fa-linkedin fa-2x" style="color:#0072b1; margin: 5px"></i></a></li>
                                                
                                                <li><a href="https://www.instagram.com/ibraheemkhurfan/" target="_blank"><i class="fa fa-instagram fa-2x" style="color: red; margin: 5px"></i></a></li>
                                               
                                                
                                            
                                        </ul>
                                        
                                      </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                                <div class="wt-team-2 shadow-sm">

                                    

                                    <div class="wt-info shadow-sm" >
                                        <div class="team-detail">
                                            <span
                                                class="title-style-2 team-position site-text-primary">Member</span>
                                            <h3 class="m-t0 team-name"><a >Kamal Al-Jundi</a></h3>
                                        </div>
                                        <div class="list-group">
                                          
                                            <ul class="team-social-bar text-left" style="display: -webkit-inline-box; list-style-type:none">
                                                  
                                                <li><a href="https://twitter.com/Kamalaljundi?s=20" target="_blank"><i class="fa fa-twitter fa-2x" style="color: #00acee; margin: 5px"></i></a></li>
                                                <li > <a href="https://www.linkedin.com/in/kamal-aljundi" target="_blank"><i class="fa fa-linkedin fa-2x" style="color:#0072b1; margin: 5px"></i></a></li>
                                                
                                                <li><a href="https://www.instagram.com/kamalaljundi/" target="_blank"><i class="fa fa-instagram fa-2x" style="color: red; margin: 5px"></i></a></li>
                                               
                                                
                                            
                                        </ul>
                                        
                                      </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                                <div class="wt-team-2 shadow-sm">

                                    

                                    <div class="wt-info shadow-sm" >
                                        <div class="team-detail">
                                            <span
                                                class="title-style-2 team-position site-text-primary">Member</span>
                                            <h3 class="m-t0 team-name"><a >Faisal Abohimed</a></h3>
                                        </div>
                                        <div class="list-group">
                                          
                                            <ul class="team-social-bar text-left" style="display: -webkit-inline-box; list-style-type:none">
                                              
                                               
                                            <li><a href="" target="_blank"><i class="fa fa-twitter fa-2x" style="color: white; margin: 5px"></i></a></li>
                                            
                                        </ul>
                                        
                                      </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                                <div class="wt-team-2 shadow-sm">

                                    

                                    <div class="wt-info shadow-sm" >
                                        <div class="team-detail">
                                            <span
                                                class="title-style-2 team-position site-text-primary">Member</span>
                                            <h3 class="m-t0 team-name"><a >Mohamad Mashnouk</a></h3>
                                        </div>
                                        <div class="list-group">
                                          
                                            <ul class="team-social-bar text-left" style="display: -webkit-inline-box; list-style-type:none">
                                                  
                                                
                                                <li > <a href="http://linkedin.com/in/momashnouk" target="_blank"><i class="fa fa-linkedin fa-2x" style="color:#0072b1; margin: 5px"></i></a></li>
                                                
                                                <li><a href="https://instagram.com/gameofdrones_fpv?r=nametag" target="_blank"><i class="fa fa-instagram fa-2x" style="color: red; margin: 5px"></i></a></li>
                                               
                                                
                                            
                                        </ul>
                                        
                                      </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                                <div class="wt-team-2 shadow-sm">

                                    

                                    <div class="wt-info shadow-sm" >
                                        <div class="team-detail">
                                            <span
                                                class="title-style-2 team-position site-text-primary">Member</span>
                                            <h3 class="m-t0 team-name"><a >Fares Tawil</a></h3>
                                        </div>
                                        <div class="list-group">
                                          
                                        <ul class="team-social-bar text-left" style="display: -webkit-inline-box; list-style-type:none">
                                                  
                                                  <li><a href="https://twitter.com/Fariss4747?s=20" target="_blank"><i class="fa fa-twitter fa-2x" style="color: #00acee; margin: 5px"></i></a></li>
                                                 
                                                  
                                                  <li><a href="https://www.instagram.com/Fs.280/" target="_blank"><i class="fa fa-instagram fa-2x" style="color: red; margin: 5px"></i></a></li>
                                                 
                                                  
                                              
                                          </ul>
                                      </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        
                    </div>

                </div>
            </div>
            <!-- OUR TEAM SECTION END -->


                </div>
            </div>
            <!-- OUR PLAN US SECTION END -->

            <!-- CLIENT LOGO SECTION START -->
            <?php
           include("includes/sponsers.php");
           ?>
            <!-- CLIENT LOGO  SECTION End -->

        </div>
        <!-- CONTENT END -->

       <!-- FOOTER START -->
       <?php include("includes/footer.html") ?> 
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
    <script src="js/jquery-2.2.0.min.js"></script><!-- JQUERY.MIN JS -->
    <script src="js/popper.min.js"></script><!-- POPPER.MIN JS -->
    <script src="js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->
    <script src="js/bootstrap-select.min.js"></script><!-- Form js -->
    <script src="js/magnific-popup.min.js"></script><!-- MAGNIFIC-POPUP JS -->
    <script src="js/waypoints.min.js"></script><!-- WAYPOINTS JS -->
    <script src="js/counterup.min.js"></script><!-- COUNTERUP JS -->
    <script src="js/waypoints-sticky.min.js"></script><!-- STICKY HEADER -->
    <script src="js/isotope.pkgd.min.js"></script><!-- MASONRY  -->
    <script src="js/owl.carousel.min.js"></script><!-- OWL  SLIDER  -->
    <script src="js/stellar.min.js"></script><!-- PARALLAX BG IMAGE   -->
    <script src="js/theia-sticky-sidebar.js"></script><!-- STICKY SIDEBAR  -->
    <script src="js/jquery.bootstrap-touchspin.js"></script><!-- FORM JS -->
    <script src="js/custom.js"></script><!-- CUSTOM FUCTIONS  -->
    <script src="js/jquery.bgscroll.js"></script><!-- BACKGROUND SCROLL -->
    <script src="js/slick.js"></script>
    <script src="js/jquery-ui.js"></script>






    <!-- REVOLUTION JS FILES -->

    <script src="plugins/revolution/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script src="plugins/revolution/revolution/js/extensions/revolution-plugin.js"></script>

    <!-- REVOLUTION SLIDER SCRIPT FILES -->
    <script src="js/rev-script-3.js"></script>





</body>

</html>
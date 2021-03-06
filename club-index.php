<?php 

session_start();
require('sql/connect.php'); // in order to connect with Database



?>

<!DOCTYPE html>
<html lang="en">

<head>


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GG4JCWDBMK"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
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
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Muli:wght@200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
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
                                <a href="club-index.php">
                                    <img class="hidden-xs" src="images/client-logo/PSU Drone Racing Club-02.png" alt=""
                                        width="300px;">
                                    <img class="hidden-sm hidden-md hidden-lg"
                                        src="images/client-logo/PSU Drone Racing Club-02-no-text.png" alt=""
                                        width="55px;">
                                </a>
                            </div>
                        </div>

                        <div class="extra-nav header-2-nav">
                            <!-- make email clikble and send message when click -->

                            <div class="extra-cell">
                                <div class="header-nav-request">
                                    <a href="mailto:racing@psu.edu.sa"
                                        style="background-color: inherit">racing@psu.edu.sa</a>
                                </div>
                            </div>

                        </div>






                    </div>
                </div>

            </div>

        </header>


        <!-- CONTENT START -->

        <header>
            <!-- make background video -->

            <div class="overlay"></div>
            <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" width="100%" height="100%">
                <source src="media\video\promo.mp4" type="video/mp4">
            </video>
            <div class="container ">
                <div class="d-flex  text-center align-items-center">
                    <div class="w-100 text-white my-5 py-5">
                        <!--  we used php to get the content of text on video from database -->
                        <p class=" my-2 pt-5 textVid"><?php 
                     $statment = $pdo->prepare ("SELECT * FROM compition_content_table WHERE type='about-header'");
                     $statment->execute();
                    //  fetch header from database
                     while($row = $statment->fetch(PDO::FETCH_ASSOC)){
                           echo $row["content"];
                         }
                    ?>
                        </p>
                        <p class=" lead my-2 textVid2"><?php 
                      //  fetch the place of compition from database
                     $statment = $pdo->prepare ("SELECT * FROM compition_content_table WHERE type='place'");
                     $statment->execute();
                     
                     while($row = $statment->fetch(PDO::FETCH_ASSOC)){
                           echo $row["content"];
                         }
                    ?>
                        </p>
                        <p class=" lead my-2 textVid2"><?php 
                     $statment = $pdo->prepare ("SELECT * FROM compition_content_table WHERE type='date'");
                     $statment->execute();
                     //  fetch the compition date from database
                     while($row = $statment->fetch(PDO::FETCH_ASSOC)){
                           echo $row["content"];
                         }
                    ?>
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
                    //  fetch about compition header from database
                     $statment = $pdo->prepare ("SELECT * FROM compition_content_table WHERE type='about-header'");
                     $statment->execute();
                     
                     while($row = $statment->fetch(PDO::FETCH_ASSOC)){
                           echo $row["content"];
                         }
                    ?></h2>
                    <p><?php 
                    //  fetch compition contnet from database
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

    <!-- button the let the user go to racing comption form -->
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

            <!-- Rules & Regulations TITLE START-->
            <div class="section-head center wt-small-separator-outer mb-5">
                <h2>Rules & Regulations</h2>
            </div>
            <!-- Rules & Regulations TITLE END-->
            <!-- Rules & Regulations section -->
            <?php ?>
            <div class="section-content">
                <div class="row justify-content-center d-flex how-it-drone3">

                    <div class="col-lg-4 col-md-12 m-b30 how-it-drone3-left">
                        <?php  
            //  get <!-- Rules & Regulations section --> from database for left side
                                                $statment = $pdo->prepare ("SELECT * FROM `rules` ORDER BY `id`");                                               
                                                $statment->execute();
                                                $i=0;
                                               while($row = $statment->fetch(PDO::FETCH_ASSOC)): 
                                                // start fitching left loop 
                                                ?>

                        <div class="wt-box d-icon-box-two m-b40 mb-5">
                            <div class="wt-icon-box-wraper right ">
                                <!-- content for left side  -->
                                <div class="icon-md inline-icon">
                                    <span class="icon-cell site-text-secondry"><i
                                            class="number-style"><?php echo "0".$row['id']; ?></i></span>
                                    <!-- the number of rules -->
                                </div>
                                <div class="icon-content">
                                    <!-- the rule itself -->
                                    <div class="d-icon-box-title title-style-2 site-text-secondry">
                                        <h3 class="s-title-one"><?php echo $row['rule']; ?></h3>
                                    </div>
                                    <div class="d-icon-box-content">

                                    </div>
                                </div>

                            </div>
                        </div>


                        <?php $i++;
                                            //    let loop stop after finish fitching
                                                if($i == 4){
                                                    break;
                                                }
                                                // finish loop
                                                     endwhile; ?>





                    </div>
                    <!-- drone image with safty -->
                    <div class="col-lg-4 col-md-12 m-b30 how-it-drone2-outer">
                        <div class="how-it-drone2-border">
                            <div class="how-it-drone2">
                                <div class="how-it-drone-media2"><img src="images/how-it-work/pngeggs.png" width="200%"
                                        height="200%" alt="" class="wave-effects"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 m-b30 how-it-drone3-right">

                        <?php  
                        //  get <!-- Rules & Regulations section --> from database for left side

                                                $statment = $pdo->prepare ("SELECT * FROM `rules` ORDER BY `id` desc" );                                               
                                                $statment->execute();
                                                $i=5;
                                               while($row = $statment->fetch(PDO::FETCH_ASSOC)):
                                                // start fitching left loop 
                                                ?>

                        <div class="wt-box d-icon-box-two m-b40">
                            <div class="wt-icon-box-wraper left">
                                <!-- content for left side  -->
                                <div class="icon-md inline-icon">
                                    <span class="icon-cell site-text-secondry"><i
                                            class="number-style"><?php echo "0".$i; ?></i></span>
                                    <!-- the number of rules -->
                                </div>
                                <div class="icon-content">
                                    <div class="d-icon-box-title title-style-2 site-text-secondry">
                                        <h3 class="s-title-one"><?php echo $row['rule']; ?></h3>
                                        <!-- the number of rules -->

                                    </div>
                                    <div class="d-icon-box-content">
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
        <!-- Rules & Regulations section end -->

    </div>
    <!-- Competition Chairs SECTION start -->

    <div class="container mt-5 mb-5">
        <h2 class=" text-center">Competition Chairs</h2>
        <div class="row  justify-content-center">


            <?php
            // fetch comptiton chares from database
                                        $statment = $pdo->prepare ("SELECT * FROM compition_commitee WHERE catagory='Chairs'");
                                        $statment->execute();
                                        while($row = $statment->fetch(PDO::FETCH_ASSOC)):
                                    ?>

            <div class=" m-b30 col-sm-5 col-xs-8">
                <div class="wt-team-2 shadow-sm text-center ">
                    <div class="wt-info shadow-sm ">
                        <div class="team-detail">
                                            <!-- print content that fetched above -->
                            <h3 class="m-t0 team-name"><?php echo $row["name"] ?></h3>
                            <h5><?php echo $row["role"] ?></h5>

                            <h5><?php echo $row["orgnaization"] ?></h5>

                        </div>
                        <div class="list-group">
                            <div class="list-group">
                                <center>
                                    <ul class="team-social-bar text-center"
                                        style="display: -webkit-inline-box; list-style-type:none">
                                                <!-- get social media for each member -->
                                        <li><a href="<?php echo $row["twitter"] ?>" target="_blank"><i
                                                    class="fa fa-twitter fa-2x" style="color: #00acee; margin: 5px"
                                                    <?php if(strlen($row["twitter"])<5){echo " hidden ";}  ?>></i></a>
                                                    <!-- if the social media is is not exist it will be hidden since there is if condition -->
                                        </li>
                                        <li> <a href="<?php echo $row["linkedin"] ?>" target="_blank"><i
                                                    class="fa fa-linkedin fa-2x" style="color:#0072b1; margin: 5px"
                                                    <?php if(strlen($row["linkedin"])<5){echo " hidden";} ?>></i></a>
                                                    <!-- if the social media is is not exist it will be hidden since there is if condition -->
                                        </li>

                                        <li><a href="<?php echo $row["facebook"] ?>" target="_blank"><i
                                                    class="fa fa-facebook fa-2x" style="color: #0072b1; margin: 5px"
                                                    <?php if(strlen($row["facebook"])<5){echo " hidden ";} ?>></i></a>
                                                    <!-- if the social media is is not exist it will be hidden since there is if condition -->
                                        </li>
                                        <li> <a href="<?php echo $row["instagram"] ?>" target="_blank"><i
                                                    class="fa fa-instagram fa-2x" style="color:red; margin: 5px"
                                                    <?php if(strlen($row["instagram"])<5){echo " hidden ";} ?>></i></a>
                                                    <!-- if the social media is is not exist it will be hidden since there is if condition -->
                                        </li>



                                    </ul>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <!-- end loop of comptioin chairs -->



        </div>
    <!--Organization Committee SECTION start -->

        <div class="section-content mt-5">
            <h2 class=" text-center">Organization Committee</h2>
            <div class="row justify-content-center">

                <?php
                            // fetch comptiton Committee from database

                                        $statment = $pdo->prepare ("SELECT * FROM compition_commitee WHERE catagory='Committee'");
                                        
                                        $statment->execute();
                                        while($row = $statment->fetch(PDO::FETCH_ASSOC)):
                                    ?>

                <div class=" m-b30 col-sm-5 col-xs-8">
                    <div class="wt-team-2 shadow-sm text-center ">
                        <div class="wt-info shadow-sm ">
                            <div class="team-detail">
                                <!-- print content that fetched above -->
                                <h3 class="m-t0 team-name"><?php echo $row["name"] ?></h3>
                                <h5><?php echo $row["role"] ?></h5>

                                <h5><?php echo $row["orgnaization"] ?></h5>

                            </div>
                            <div class="list-group">
                                <div class="list-group">
                                    <center>
                                        <ul class="team-social-bar text-center"
                                            style="display: -webkit-inline-box; list-style-type:none">

                                            <li><a href="<?php echo $row["twitter"] ?>" target="_blank"><i
                                                        class="fa fa-twitter fa-2x" style="color: #00acee; margin: 5px"
                                                        <?php if(strlen($row["twitter"])<5){echo " hidden ";}  ?>></i></a>
                                            </li>
                                            <!-- if the social media is is not exist it will be hidden since there is if condition -->
                                            <li> <a href="<?php echo $row["linkedin"] ?>" target="_blank"><i
                                                        class="fa fa-linkedin fa-2x" style="color:#0072b1; margin: 5px"
                                                        <?php if(strlen($row["linkedin"])<5){echo " hidden";} ?>></i></a>
                                            </li>
                                            <!-- if the social media is is not exist it will be hidden since there is if condition -->
                                            <li><a href="<?php echo $row["facebook"] ?>" target="_blank"><i
                                                        class="fa fa-facebook fa-2x" style="color: #0072b1; margin: 5px"
                                                        <?php if(strlen($row["facebook"])<5){echo " hidden ";} ?>></i></a>
                                            </li>
                                            <!-- if the social media is is not exist it will be hidden since there is if condition -->
                                            <li> <a href="<?php echo $row["instagram"] ?>" target="_blank"><i
                                                        class="fa fa-instagram fa-2x" style="color:red; margin: 5px"
                                                        <?php if(strlen($row["instagram"])<5){echo " hidden ";} ?>></i></a>
                                            </li>
                                            <!-- if the social media is is not exist it will be hidden since there is if condition -->


                                        </ul>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            <!-- end loop of comptioin chairs -->




            </div>

        </div>

    </div>
    <!-- OUR TEAM SECTION END -->

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
    <script src="js/rev-script-1.js"></script>


</body>

</html>
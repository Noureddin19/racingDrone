<?php 
session_start();

require('../../sql/connect.php');
if(!$_SESSION['logged']){
header("location: ../../login.php");
}
?>
<html>
<head>	
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="" />

    <!-- FAVICONS ICON -->
    <link rel="icon" href="../../mages/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="../../images/client-logo/racinglabWhite.png" />

    <!-- PAGE TITLE HERE -->
    <title>PSU Drone Racing League - Registration</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
    <!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="../../css/fontawesome/css/font-awesome.min.css" />

    <!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="../../css/owl.carousel.min.css">

    <!-- SLICK SLIDER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="../../css/slick.css">
    <link rel="stylesheet" type="text/css" href="../../css/slick-theme.css">

    <!-- BOOTSTRAP SLECT BOX STYLE SHEET  -->
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap-select.min.css">
    <!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="../../css/magnific-popup.min.css">
    <!-- LOADER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="../../css/loader.min.css">
    <!-- MAIN STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <!-- FLATICON STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="../../css/flaticon.min.css">
    <!-- THEME COLOR CHANGE STYLE SHEET -->
    <link rel="stylesheet" class="skin" type="text/css" href="../../css/skin/skin-1.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
    <!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="../../css/fontawesome/css/font-awesome.min.css" />

    <!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="../../ss/owl.carousel.min.css">

    <!-- SLICK SLIDER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="../../css/slick.css">
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css">

    <!-- BOOTSTRAP SLECT BOX STYLE SHEET  -->
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap-select.min.css">
    <!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="../../css/magnific-popup.min.css">
    <!-- LOADER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="../../css/loader.min.css">
    <!-- MAIN STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <!-- FLATICON STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="../../css/flaticon.min.css">
    <!-- THEME COLOR CHANGE STYLE SHEET -->
    <link rel="stylesheet" class="skin" type="text/css" href="../../css/skin/skin-1.css">
    








    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="../../plugins/revolution/revolution/css/settings.css">
    <!-- REVOLUTION NAVIGATION STYLE -->
    <link rel="stylesheet" type="text/css" href="../../plugins/revolution/revolution/css/navigation.css">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Muli:wght@200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">








    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="../../plugins/revolution/revolution/css/settings.css">
    <!-- REVOLUTION NAVIGATION STYLE -->
    <link rel="stylesheet" type="text/css" href="../../plugins/revolution/revolution/css/navigation.css">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Muli:wght@200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
	<title>Lets Add Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	
	<form action="php/add-member.php" method="post" class="was-validated ">
        <h3>Personal Information</h3>
            
            <div class="form-group text-left">
                <label for="phone">name</label>
                <input type="text" class="form-control border" id="pwd" placeholder="name" name="name"  required>
                <div class="valid-feedback">Valid</div>
                <div class="invalid-feedback">Required</div>
            </div>
            <div class="form-group text-left">
                <label for="text">role</label>
                <input type="text" class="form-control border" id="pwd" placeholder="role" name="role"  required>
                <div class="valid-feedback">Valid</div>
                <div class="invalid-feedback">Required</div>
            </div>
            <div class="form-group text-left">
                <label for="text">twitter</label>
                <input type="text" class="form-control border" id="pwd" placeholder="twitter" name="twitter"  >
                <div class="valid-feedback">Valid</div>
                <div class="invalid-feedback">Required</div>
            </div>
            <div class="form-group text-left">
                <label for="text">instagram</label>
                <input type="text" class="form-control border" id="pwd" placeholder="instagram" name="instagram"  >
                <div class="valid-feedback">Valid</div>
                <div class="invalid-feedback">Required</div>
            </div>
            <div class="form-group text-left">
                <label for="text">linkedin</label>
                <input type="text" class="form-control border" id="pwd" placeholder="linkedin" name="linkedin"  >
                <div class="valid-feedback">Valid</div>
                <div class="invalid-feedback">Required</div>
            </div>

            <br>
        
            <div class="form-group text-left">
                <label for="pwd">facebook</label>
                <input type="text" class="form-control border" id="pwd" placeholder="facebook" name="facebook"  >
                <div class="valid-feedback">Valid</div>
                <div class="invalid-feedback">Required</div>
            </div>
            
			
            <center>
            <button type="submit" name="submit" value ="submit" class="site-button site-btn-effect justify-content-center mt-4">Add</button>
            </center>
        </form>
</body>
</html>
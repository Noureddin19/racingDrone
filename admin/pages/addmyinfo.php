
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
	
	
	<form action="add-display.php" method="post" class="was-validated ">
        <h3>Personal Information</h3>
            <div class="form-group text-left">
                <label for="fullname" class="left">Full Name</label>
                <input type="text" class="form-control border" id="fullname" placeholder="Enter Name" name="fullname" value="<?php echo $fullname ?>" required>
                <div class="valid-feedback">Valid</div>
                <div class="invalid-feedback">Required</div>
            </div>
            
            <div class="form-group text-left">
                <label for="phone">Phone Number</label>
                <input type="text" class="form-control border" id="pwd" placeholder="eg. 966xxxxxxxxx" name="pn" value="<?php echo $phoneNumber?>" required>
                <div class="valid-feedback">Valid</div>
                <div class="invalid-feedback">Required</div>
            </div>
            <div class="form-group text-left">
                <label for="email">Email</label>
                <input type="email" class="form-control border" id="pwd" placeholder="eg. email@example.com" name="email" value="<?php echo $email ?>" required>
                <div class="valid-feedback">Valid</div>
                <div class="invalid-feedback">Required</div>
            </div>
            <div class="form-group text-left">
                <label for="nationality">Nationality</label>
                <input type="text" class="form-control border" id="pwd" placeholder="Enter Your Nationality" name="nationality" value="<?php echo $nationality ?>" required>
                <div class="valid-feedback">Valid</div>
                <div class="invalid-feedback">Required</div>
            </div>
            <div class="form-group text-left">
                <label for="age">Age</label>
                <input type="number" class="form-control border" id="pwd" placeholder="Enter Your Age" name="age" value="<?php echo $age?>" required>
                <div class="valid-feedback">Valid</div>
                <div class="invalid-feedback">Required</div>
            </div>
            <div class="form-group text-left">
                <label for="org">Organization</label>
                <input type="text" class="form-control border" id="pwd" placeholder="Enter Your Organization" name="org" value="<?php echo $org?>" required>
                <div class="valid-feedback">Valid</div>
                <div class="invalid-feedback">Required</div>
            </div>

            <br>
            <h3>Drone Information</h3>
            <p>This section is optional. If your planning to participate using the similator you can skip it</p>
            <div class="form-group text-left">
                <label for="pwd">Flight Controller Name</label>
                <input type="text" class="form-control border" id="pwd" placeholder="Enter Your Flight Controller Name" name="fcn" value="<?php echo $fcn?>" >
                <div class="valid-feedback">Valid</div>
                <div class="invalid-feedback">Required</div>
            </div>
            <div class="form-group text-left">
                <label for="pwd">ESC Amps (in ampere)</label>
                <input type="number" class="form-control border" id="pwd" placeholder="Enter Your ESC Amps" name="ea" value="<?php echo $ea?>" >
                <div class="valid-feedback">Valid</div>
                <div class="invalid-feedback">Required</div>
            </div>
            <div class="form-group text-left">
                <label for="pwd">Motor Size and KV</label>
                <input type="text" class="form-control border" id="pwd" placeholder="Enter Your Motor Size and KV" name="ms" value="<?php echo $ms?>">
                <div class="valid-feedback">Valid</div>
                <div class="invalid-feedback">Required</div>
            </div>
            <div class="form-group text-left">
                <label for="pwd">Battery Cells</label>
                <input type="number" class="form-control border" id="pwd" placeholder="Enter Your Battery cells number" name="bcn" value="<?php echo $bcn?>">
                <div class="valid-feedback">Valid</div>
                <div class="invalid-feedback">Required</div>
            </div>
            <div class="form-group text-left">
                <label for="pwd">Battery Capacity (in milliampere)</label>
                <input type="number" class="form-control border" id="pwd" placeholder="Enter Your Battery cells capacity" name="bcc" value="<?php echo $bcc?>">
                <div class="valid-feedback">Valid</div>
                <div class="invalid-feedback">Required</div>
            </div>
            <div class="form-group text-left">
                <label for="pwd">Drone Overall Weight with Battery (in grams)</label>
                <input type="number" class="form-control border" id="pwd" placeholder="Enter Your Drone's Overall Weight" name="dow" value="<?php echo $dow?>">
                <div class="valid-feedback">Valid</div>
                <div class="invalid-feedback">Required</div>
            </div>
			
            <center>
            <button type="submit" name="submit" value ="submit" class="site-button site-btn-effect justify-content-center mt-4">Add</button>
            </center>
        </form>
</body>
</html>
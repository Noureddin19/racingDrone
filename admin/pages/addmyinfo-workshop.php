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
    <title>Workshop - Add info</title>

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
	<a href="workshop-table.php">Back</a>
	<br/><br/>
	<div class="row">
	<div class="container col-md-8 border p-3">
	
    <form action="php/add-display-workshop.php" class="was-validated " method="POST">
    <h3><a href="index.php" class="btn btn-danger">Back</a> Personal Information</h3>
                                                              <div class="form-group text-left">
                                                                  <label for="uname" class="left">Full Name</label>
                                                                  <input type="text" class="form-control border" id="uname" placeholder="Enter your name" name="fullname" value="<?php echo $fullname ?>" required>
                                                                  <div class="valid-feedback">Valid.</div>
                                                                  <div class="invalid-feedback">Please fill out this field.</div>
                                                              </div>
                                                             
                                                              <div class="form-group text-left">
                                                                  <label for="pwd">Mobile Number</label>
                                                                  <input type="text" class="form-control border" id="pwd" placeholder="Enter your number" name="pn" value="<?php echo $phoneNumber ?>" required>
                                                                  <div class="valid-feedback">Valid.</div>
                                                                  <div class="invalid-feedback">Please fill out this field.</div>
                                                              </div>
                                                              <div class="form-group text-left">
                                                                  <label for="pwd">Email</label>
                                                                  <input type="email" class="form-control border" id="pwd" placeholder="Enter your email" name="email" value="<?php echo $email ?>" required>
                                                                  <div class="valid-feedback">Valid.</div>
                                                                  <div class="invalid-feedback">Please fill out this field.</div>
                                                              </div>
                                                              <div class="form-group text-left">
                                                                <label for="pwd">Affiliation/Employer</label>
                                                                <input type="text" class="form-control border" id="pwd" placeholder="Enter your affiliation/employer" name="aff" value="<?php echo $aff ?>" required>
                                                                <div class="valid-feedback">Valid.</div>
                                                                <div class="invalid-feedback">Please fill out this field.</div>
                                                            </div>
                                                            <div class="form-group text-left">
                                                                <label for="pwd">Your City</label>
                                                                <input type="text" class="form-control border" id="pwd" placeholder="Enter your city" name="city" value="<?php echo $city ?>" required>
                                                                <div class="valid-feedback">Valid.</div>
                                                                <div class="invalid-feedback">Please fill out this field.</div>
                                                            </div>
                                                            <div class="form-group text-left">
                                                                <label for="pwd">Your Country</label>
                                                                <input type="text" class="form-control border" id="pwd" placeholder="Enter your country" name="country" value="<?php echo $country ?>" required>
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
                                                                <input type="text" class="form-control border-bottom" id="pwd" placeholder="Enter your experience" name="exp" value="<?php echo $exp ?>">
                                                
                                                            </div>  
                                                            <td><input type="hidden" name="id" value=<?php echo $_GET['workshopid'];?>></td>
            <center>
            <button type="submit" name="submit" value ="update" class="site-button site-btn-effect justify-content-center mt-4">Update</button>
            </center>
                                                          </form>
                                                        </div>
                                                          </div>
</body>
</html>
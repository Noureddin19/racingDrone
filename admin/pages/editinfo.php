<?php
session_start();

// including the database connection file

require('../../sql/connect.php');
 

if(!$_SESSION['logged']){
//  check if the user is logged in 
header("location: ../../login.php");
}

{	
	
	$id = $_POST['id'];
	$fullname = $_POST['fullname'];
	$phoneNumber = $_POST['pn'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $fcn = $_POST['fcn'];
    $org = $_POST['org'];
   
    $ea = $_POST['ea'];
    $nationality =$_POST['nationality'];
    $ms = $_POST['ms'];
    
    $bcn = $_POST['bcn'];
    $bcc = $_POST['bcc'];
    $dow = $_POST['dow'];
	
	// checking empty fields
	if(empty($fullname) || empty($age) || empty($email)) {	
			
		if(empty($fullname)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($age)) {
			echo "<font color='red'>Second Name Field.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}		
	} else {	
		//updating the table
		
		$stmt = $pdo->prepare("UPDATE membership_form SET fullname='$fullname',
         age='$age', email='$email', phonenumber='$phoneNumber', flightcontrollername='$fcn', 
         organization='$org', escamps='$ea',
		nationality='$nationality', motorssizeandkv='$ms', batterycellsnumber='$bcn', 
        batterycellscapacity='$bcc', overallweight='$dow'  WHERE membershipid='$id';");
        $stmt->execute();
        try{
          
            $status = $uname. " your Record is added Successfully ";
            // add notification to notification table
            $notification = "2";
            //  each notification has specific number 
            $date = date("Y-m-d h:i");
            $nof_qury = "INSERT INTO `notification` (`username`, `notification`, `creation`) VALUES ('$uname', '$notification', '$date')";
            $pdo->exec($nof_qury);
                }catch(PDOException $e) {
                    echo "database failed: " . $e->getMessage();
            
                }
		header('Location: data-tables.php');
		//redirectig to the display page. In our case, it is myinof.php
		
	}
}



//getting id from url
$id = $_GET['membershipid']; 
//selecting data associated with this particular id
try{


$stmt = $pdo->prepare("SELECT * FROM membership_form WHERE membershipid=$id;");
$stmt->execute();

while($row = $stmt->fetch(PDO::FETCH_ASSOC)){ 
	$mid = $row['membershipid'];
	$fullname = $row['fullname'];
	$age = $row['age'];
	$email = $row['email'];
	$phoneNumber = $row['phonenumber'];
   
  
    $fcn = $row['flightcontrollername'];
    $org = $row['organization'];
    
    $ea = $row['escamps'];
    $nationality =$row['nationality'];
    $ms = $row['motorssizeandkv'];
    
    $bcn = $row['batterycellsnumber'];
    $bcc = $row['batterycellscapacity'];
    $dow = $row['overallweight'];
	  
  
}

 
}catch(PDOException $e) {
	echo "Error: " . $e->getMessage();
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
	<title>Edit info</title>
</head>

<body>
	<br/><br/>
	
	<div class="row">
	<div class="container col-md-8 border p-3">
	<form action="editinfo.php" method="post" class="was-validated ">
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
			<td><input type="hidden" name="id" value=<?php echo $_GET['membershipid'];?>></td>
            <center>
            <button type="submit" name="update" value ="update" class="site-button site-btn-effect justify-content-center mt-4">Update</button>
            </center>
        </form>
        </div>
        </div>
</body>
</html>
<?php
// including the database connection file

require('../../sql/connect.php');
if(isset($_POST['update']))
{	
	
    $usernamed = $_POST['user'];
   
	$pass = $_POST['password'];
	$category = $_POST['category'];
   $id= $_POST['id1'];
	
	// checking empty fields
	if(empty($username) || empty($pass) || empty($category)) {	
			
		if(empty($username)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($pass)) {
			echo "<font color='red'>Second Name Field.</font><br/>";
		}
		
		if(empty($category)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}		
	} else {	
		//updating the table
		
		$stmt = $pdo->prepare("UPDATE adminTable SET username='$usernamed', password='$pass', category='$category' WHERE id='$id';");
        $stmt->execute();
		header('Location: admin-table.php');
		//redirectig to the display page. In our case, it is myinof.php
		
	}
}



//getting id from url
$id = $_GET['id']; 
//selecting data associated with this particular id
try{


$stmt = $pdo->prepare("SELECT * FROM adminTable WHERE id='$id';");
$stmt->execute();

while($row = $stmt->fetch(PDO::FETCH_ASSOC)){ 
	$username = $row['username'];
	$pass = $row['password'];
	$category = $row['category'];
	$id2 = $row['id'];
	  
  
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
	<title>Lets Edit Data</title>
</head>

<body>


	
	
	<form action="editinfo-admin.php" method="post" class="was-validated ">
    <h3><a href="index.php" class="btn btn-danger">Back</a> Personal Information</h3>

        <div class="form-group text-left">
                                                                <label for="user" class="left">Username</label>
                                                                <input type="text" class="form-control border" id="user" placeholder="Enter your name" name="user" value="<?php echo $username ?>" required>
                                                                <div class="valid-feedback">Valid.</div>
                                                                <div class="invalid-feedback">Please fill out this field.</div>
                                                            </div>
                                                           
                                                            <div class="form-group text-left">
                                                                <label for="pwd">Password</label>
                                                                <input type="text" class="form-control border" id="pwd" placeholder="Enter password" name="password" value="<?php echo $pass ?>" required>
                                                                <div class="valid-feedback">Valid.</div>
                                                                <div class="invalid-feedback">Please fill out this field.</div>
                                                            </div>
                                                            <div class="form-group text-left">
                                                                <label for="pwd">Category</label>
                                                                <input type="text" class="form-control border" id="pwd" placeholder="Enter Category" name="category" value="<?php echo $category ?>" required>
                                                                <div class="valid-feedback">Valid.</div>
                                                                <div class="invalid-feedback">Please fill out this field.</div>
                                                            </div>
                                                            <td><input type="hidden" name="id1" value=<?php echo $_GET['id'];?>></td>
           
            <button type="submit" name="update" value ="update" class="site-button site-btn-effect justify-content-center mt-4">Update</button>
          
        </form>
</body>
</html>
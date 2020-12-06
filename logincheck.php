<?php
session_start();
?>
<html>
<head>
    <title>Add My Info Data</title>
</head>
 
<body>
<?php
//including the database connection file
include_once("sql/connect.php");
 
if(isset($_POST['submit'])) {    
    $uname = $_POST['uname'];
    $pwd = $_POST['pwd'];
    
    // 2 : Set session variables
     $_SESSION["fn"] = $uname;
     
    // 3: Set session varaible only when there is legitimate login
    if($uname == "noor" || $uname == "naif" ){
        $_SESSION["validUser"] = true;
    }else{
        $_SESSION["validUser"] = false;
    }
      echo   "<font color='red'>First name : </font>"  .$uname ."  <font color='blue'>Last : </font>".$pwd."</font>";
    // checking empty fields
    if(empty($uname) || empty($pwd) ) {                
        if(empty($uname)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        
        if(empty($pwd)) {
            echo "<font color='red'>Last Name should not be empty.</font><br/>";
        }
        
        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else { 
	
        // if all the fields are filled (not empty)             
        //insert data to database
        $result = mysqli_query($mysqli, "SELECT * FROM user WHERE username='$uname' AND password='$pwd'");
    while($res = mysqli_fetch_array($result))
    {
	$un = $res['username'];
	$pwd = $res['password'];
	$cat = $res['category'];
        $_SESSION["wow"] = true;
     }
       if($cat == "admin"){
           header('location: viewinfo.php');
       }else{
           header('location: login.html');
       }
}
}
?>
</body>
</html>
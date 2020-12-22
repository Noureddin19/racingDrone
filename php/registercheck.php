<?php
//including the database connection file
session_start();
$_SESSION['register'] = true;

$_SESSION["uname"] = $_POST['uname'];
$_SESSION['pn'] = $_POST['pn'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['age'] = $_POST['age'];
$_SESSION['fcn'] = $_POST['fcn'];
$_SESSION['org'] = $_POST['org'];
$_SESSION['ea'] = $_POST['ea'];
$_SESSION['nationality'] = $_POST['nationality'];
$_SESSION['ms'] = $_POST['ms'];
$_SESSION['bcn'] = $_POST['bcn'];
$_SESSION['bcc'] = $_POST['bcc'];
$_SESSION['dow']= $_POST['dow'];


require("../sql/connect.php");
 
if(isset($_POST['submit'])) {    
    $email = $_POST['email'];
}
     
    // if all the fields are filled (not empty)             
    //insert data to database
try {
        $stmt = $pdo->prepare("SELECT email FROM membership_form WHERE email='$email'");
        $stmt->execute();
      
        // set the resulting array to associative
        while ($result = $stmt->fetch(PDO::FETCH_ASSOC)){
            $eml = $result['email'];
        }
        
        if(strcasecmp($eml, $email)){

            $_SESSION['register'] = true;
            header('location: ../display-member-info.php');

            
        }else{
            $_SESSION['register'] = false;
            header('location: ../racing-form.php');
        }
        
      } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
      }


?>
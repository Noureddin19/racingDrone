<?php
 require('/opt/lampp/htdocs/racingDrone/sql/connect.php');
    
require('/opt/lampp/htdocs/racingDrone/sql/createDB.php');
require('/opt/lampp/htdocs/racingDrone/sql/createCompetitionTable.php'); # allow you to add a php file
$status = ""; # for user that message is successfully recorded in database
#isset : allows you to check that #it is decleard # it is not null
if(isset($_POST['submit'])){
    #PHP $_REQUEST is a PHP super global variable which is used to collect data after submitting an HTML form
    $uname = $_REQUEST['uname'];
    $phoneNumber = $_REQUEST['pn'];
    $email = $_REQUEST['email'];
    $age = $_REQUEST['age'];
    $fcn = $_REQUEST['fcn'];
    $fs = $_REQUEST['fs'];
    $ea = $_REQUEST['ea'];
    $ms = $_REQUEST['ms'];
    $vtp = $_REQUEST['vtp'];
    $bcn = $_REQUEST['bcn'];
    $bcc = $_REQUEST['bcc'];
    $dow = $_REQUEST['dow'];
    $ins_query="insert into membership_form(fullname,age)values('$uname','$age')";
    echo $ins_query;
    echo $fs;
   
        try{
            $pdo->exec($sql);
    $status = $uname. " your Record is added Successfully ";
        }catch(PDOException $e) {
            echo "database failed: " . $e->getMessage();
    
        }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container bg-warning">
    <p>User Name  = <?php echo $_POST['uname']; ?></p>
    <p>Password  = <?php echo $_POST['email']; ?></p>
    <p class="bg-success"> <?php echo $status ?></p>
   </div>
</body>
</html>
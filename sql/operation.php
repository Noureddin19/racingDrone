<?php
require('db.php'); # allow you to add a php file
$status = ""; # for user that message is successfully recorded in database
#isset : allows you to check that #it is decleard # it is not null
if(isset($_POST['submit'])){
    #PHP $_REQUEST is a PHP super global variable which is used to collect data after submitting an HTML form
    $uname = $_REQUEST['name'];
    $pwd = $_REQUEST['pwd'];
    $email = $_REQUEST['email'];
    $ins_query="insert into login(`username`, password,email)values('$uname','$pwd','$email')";
    #echo $ins_query;
    mysqli_query($db,$ins_query)
        or die(mysql_error());
    $status = $uname. " your Record is added Successfully ";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>display the records</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
  <div id="buttons">
      <p><a href="createLogin.php"> Add More Records</a></p>
      <p><a href="viewRecords.php"> Display Records</a></p>
  </div>
   <div class="container bg-warning">
    <p>User Name  = <?php echo $_POST['uname']; ?></p>
    <p>Password  = <?php echo $_POST['pwd']; ?></p>
    <p class="bg-success"> <?php echo $status ?></p>
   </div>
   
   
   
   
   
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   
   <div class="container bg-success">
       <?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "mydbase";

//connection

$conn = new mysqli($servername, $username, $password, $database);

//multiple record

if($conn->connect_error) {
    die("connection failed ".$conn->connect_error);
} else {
    echo "Welcome ".$username."<br>";
}

//show records

$sql = "SELECT id, firstname, lastname from tblinfo";
$result = $conn->query($sql);

//how to parse through the result that is returned from database
if($result->num_rows > 0){
    //fetch row as asspciative array
    while($row = $result->fetch_assoc()) {
        echo $row["id"]." | ";
        echo $row["firstname"]." | ";
        echo $row["lastname"]." | ";
        echo "<br>";
    }
} else {
    echo "There are no records in table";
}
?>
   </div>
    
</body>
</html>

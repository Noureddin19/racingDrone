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
    echo "Welcome".$username;
}

//insertion

$sql = "INSERT INTO tblinfo (firstname, lastname, email, phonenumber) VALUES ('Nour', 'AL', 'c.com', '12345');";

$sql .= "INSERT INTO tblinfo (firstname, lastname, email, phonenumber) VALUES ('Talal', 'Ba', 'c.com', '12346');";

$sql .= "INSERT INTO tblinfo (firstname, lastname, email, phonenumber) VALUES ('Bassel', 'AL', 'c.com', '12343');";

$sql .= "INSERT INTO tblinfo (firstname, lastname, email, phonenumber) VALUES ('Abdullah', 'AL-habib', 'c.com', '12349');";


if($conn->multi_query($sql) === TRUE) {
    echo "Records done";
} else {
    echo "ISSUE ".$sql. "<br>". $conn->error;
}
$conn->close();
?>
<?php
$servername= "localhost";
$username= "root";
$password= "";
$dbname= "thewaves";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$firstName= $_POST["firstName"];
$lastName= $_POST["lastName"];
$email= $_POST["email"];
//$phoneNo= $_POST["phoneNo"];
$password= $_POST["password"];
$passwordConfirm= $_POST["passwordConfirm"];

$sql= "INSERT INTO information (firstName, lastName, email, password, passwordConfirm)
VALUES ('$firstName, $lastName, $email, $password, $passwordConfirm')";

$conn->close();


?>
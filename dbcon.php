<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "paymentcheck";

$con = mysqli_connect($servername , $username , $password , $dbname);
if(mysqli_connect_errno()){
die("Failed to connect with MySQL :".mysqli_connect_errno());
}
?>
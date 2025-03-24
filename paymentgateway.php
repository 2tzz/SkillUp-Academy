<?php

$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "paymentcheck";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  alert(die("Connection failed: " . mysqli_connect_error()));
}
session_start();
if(isset($_POST['submit'])){
   
    //Billing info
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $poBox = $_POST['poBox'];

    //Card Info 
    $NameOnCard = $_POST['NameOnCard'];
    $CardNumber = $_POST['CardNumber'];
    $ExpMn = $_POST['ExpMn'];
    $ExpYr = $_POST['ExpYr'];
   
    $sql = "INSERT INTO  payment(fname,email,address,city,state,poBox,NameOnCard,CardNumber,ExpMn,ExpYr) Values ('$fname','$email','$address','$city','$state','$poBox','$NameOnCard','$CardNumber','$ExpMn','$ExpYr') ";  
  

}

if (mysqli_query($conn, $sql)) {
  echo '<script type="text/javascript">';
    echo ' alert("Card added Successfully!")';  //not showing an alert box.
    echo '</script>';
    echo "<script>
    window.location.assign('./userProfile.php');
    </script>";
} else {
  echo '<script type="text/javascript">';
  echo ' alert("Card adding Failed. Try again")';  //not showing an alert box.
  echo '</script>';
  echo "<script>
  window.location.assign('./payementgate.html');
  </script>";
}

mysqli_close($conn);
?>
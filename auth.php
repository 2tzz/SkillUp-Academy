<?php
/**
 * Login Authentication
 * */

include('./dbcon.php');
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

// to prevent from mysqli injection
$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysqli_real_escape_string($con, $username);
$password = mysqli_real_escape_string($con, $password);


$sql = "select * from users where username = '$username' and password = '$password'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);
$_SESSION["id"] = $row['id'];

if ($count == 1) {
    echo '<script type="text/javascript">';
    echo ' alert("Successfully Logged In!")';
    echo '</script>';
    echo "<script>
    window.location.assign('userProfile.php');
    </script>";
} else {
    echo '<script type="text/javascript">';
    echo ' alert("UserName or Password Invalid! Try Again")';
    echo '</script>';
    echo "<script>
    window.location.assign('failed.html');
    </script>";
    exit;
}

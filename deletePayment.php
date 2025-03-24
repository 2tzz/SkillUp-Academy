<?php
//including the database connection file
include("./paymentConfig.php");

//getting id of the data from url
$id = $_GET['id'];

//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM payment WHERE id=$id");

//redirecting to the display page (index.php in our case)
echo '<script type="text/javascript">';
    echo ' alert("Card Deleted Successfully !")';
    echo '</script>';
    echo "<script>
    window.location.assign('userProfile.php');
    </script>";
header("Location:cardInfo.php");
?>

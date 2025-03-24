<?php
//including the database connection file
include_once("./paymentConfig.php");

//fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM payment ORDER BY id DESC"); // using mysqli_query instead
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">

  <head>
    <link rel="stylesheet" href="./CSS/login.css">
    <link rel="stylesheet" href="./CSS/header.css">
    <link rel="stylesheet" href="./CSS/footer.css">
    <link rel="stylesheet" href="./CSS/cardInfo.css">
    <!-- Login JS Validation -->
    <script src="./JS/login.js"></script>
  </head>

<body>
  <!-- Header starts here -->
  <header>
    <a href="#" class="logo">
      <img src="Img/SkillUP dark.png" width="100px" height="100px" alt="Academy logo" />
    </a>
    <navbar>
      <a href="#" class="active">Home</a>
      <a href="CourseHome.html">Courses</a>
      <a href="Lessons.html">lessons</a>
      <a href="Contact.html">Contact</a>
      <a href="FAQ.html">FAQ</a>
      <a href="login.html">Login</a>
    </navbar>
    <search_bar>
      <form class="search">
        <input type="text" placeholder="Search....." class="input">
        <button type="submit" class="button">
          <i class="ri-search-2-line"></i>
        </button>
      </form>
    </search_bar>
  </header>
  <!-- Header ends here -->
  <br><br>
  <table width='60%' border=0>

    <tr bgcolor='#e1ac19'>
      <th>Name</th>
      <th>Card Number</th>
      <th>Expire Month</th>
      <th>Expire Year</th>
      <th>Update</th>
    </tr>
    <?php
    while ($res = mysqli_fetch_array($result)) {
      echo "<tr>";
      echo "<td>" . $res['NameOnCard'] . "</td>";
      echo "<td>" . $res['CardNumber'] . "</td>";
      echo "<td>" . $res['ExpMn'] . "</td>";
      echo "<td>" . $res['ExpYr'] . "</td>";
      echo "<td><a href=\"./editPayment.php?id=$res[id]\">Edit</a> | <a href=\"./deletePayment.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
    }
    ?>
  </table>

  <!-- Footer starts here-->
  <div class="footer">
    <div class="foo_container">
      <div class="foo_row">
        <div>
          <img src="Img/SkillUP dark.png" width="200px" height="200px">
        </div>
        <div class="footer-col">
          <h4>SkillUP</h4>
          <ul>
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Help</h4>
          <ul>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Payments</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Follow us on</h4>
          <div class="social-links">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-Instagram-f"></i></a>
            <a href="#"><i class="fab fa-Linkedin-in-f"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer ends here -->
  <script src="./JS/header.js"></script>
</body>

</html>
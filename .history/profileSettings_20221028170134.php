<?php
   //include CSS Style Sheet
   echo "<link rel='stylesheet' type='text/css' href='/CSS/header.css' />";
   echo "<link rel='stylesheet' type='text/css' href='/CSS/footer.css' />";
   echo "<link rel='stylesheet' type='text/css' href='/CSS/settings.css' />";

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile Settings</title>
  <link rel="stylesheet" href="CSS/header.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="CSS/footer.css">
  <link rel="stylesheet" href="CSS/settings.css">
</head>
<body>
<!-- Header starts here -->
        <header>
            <a href="#" class="logo" >
            <img src="Img/SkillUP dark.png" width="100px" height="100px" alt="Academy logo"/>
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


<!-- Form starts here -->
  <section>
    <div class="form-container">
      <h2>Settings</h2>
      <form action="#">
        <div class="control">
          <label for="userName">New username</label>
          <input type="text" name="userName" id="userName">
          <label for="cfuserName">New username</label>
          <input type="text" name="cfuserName" id="cfuserName">
        </div>
        <div class="control">
          <label for="email">New email</label>
          <input type="text" name="email" id="email">
          <label for="cfemail">New email</label>
          <input type="text" name="cfemail" id="cfemail">
        </div>
        <div class="control">
          <label for="password">New Password</label>
          <input type="password" name="password" id="password">
          <label for="cfpassword">New Password</label>
          <input type="password" name="cfpassword" id="cfpassword">
        </div>
        <span><input type="checkbox" >I accept the terms and conditions</span>
        <div class="control">
          <input type="submit" value="Confirm">
          <input type="reset" value="Reset">
        </div>
      </div> 

  </section>
<!-- Form ends here -->
<!-- background video start -->
<div class="videoBg">
  <div class="video-container">
    <video autoplay loop muted>
      <source src="Videos/pexels-c-technical-6334253.mp4" type="video/mp4">
    </video>
  </div>
</div>
<!-- BAckground video end -->
<!-- Footer starts here -->
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
        <script src="JS/header.js"></script>
</body>
</html>
<?php
  echo "<link rel='stylesheet' type='text/css' href='/CSS/header.css'/>";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Website Landing Page | With Loading Effects and Scrolling Effects</title>
    <link rel="stylesheet" href="CSS/header.css">
    <link rel="stylesheet" href="CSS/footer.css">
    <link rel="stylesheet" href="CSS/home.css">
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
<!-- Carousal -->
    <div class="img-slider">
        <div class="slide active">
          <img src="Img/CarousalImages/Caro1.jpg" alt="">
          <div class="info">
            <h2>Slide 01</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
        <div class="slide">
          <img src="Img/CarousalImages/Caro2.jpg" alt="">
          <div class="info">
            <h2>Slide 02</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
        <div class="slide">
          <img src="Img/CarousalImages/Caro3.jpg" alt="">
          <div class="info">
            <h2>Slide 03</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
        <div class="slide">
          <img src="Img/CarousalImages/Caro1.jpg" alt="">
          <div class="info">
            <h2>Slide 04</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
        <div class="slide">
          <img src="Img/CarousalImages/Caro2.jpg" alt="">
          <div class="info">
            <h2>Slide 05</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
    </div>
    <!-- Carousal ends here -->

    <!-- Institute details start -->
        <div class="details-container">
            <div class="row">
                <div class="column1" style="background-color:#FFB695;">
                    <div class="card">
                    <img src="Img/pretty-young-student-with-big-glasses-near-some-books-smiling-white-background-removebg-preview.png" alt="" class="card_img">
                    <div class="card_data">
                        <h1 class="card_title">View Courses</h1>
                        <span class="card_preci"></span>
                        <p class="card_dscription">more info</p>
                        <a href="#" class="card_button">
                            <button>Click here</button></a>
                    </div>
                </div>
                </div>
                <div class="column2" style="background-color:#96D1CD;">
                  <div class="card">
                      <p class="vision_text">
                          <h2>Our vision </h2>
                          As a mission-driven organization,<br> we're relentlessly pursuing our vision<br> of a world where every learner can access education to<br> unlock their potential, without the barriers of cost or location.
                      </p>
                  </div>
                </div>
            </div>
        </div>
<!-- Institute details ends here -->

<!-- staff details start here-->
    <div class="person-container">
      <div class ="top"><span>Meet Our Team</span></div>
    <div class="wrap">
        <div class="box">
             
            <img src ="img2.jpg">
            <div class="social">
            <a href="#"><i class ="fa fa-facebook"></i></a>
                <a href="#"><i class ="fa fa-twitter"></i></a>
            <a href="#"><i class ="fa fa-youtube"></i></a>
                <a href="#"><i class ="fa fa-linkedin"></i></a>
            <a href="#"><i class ="fa fa-instagram"></i></a>
            </div>
            <div class="text">
            <h1>Krishtina Kunal</h1>
                <p> App Developer</p>
            </div>
        </div>
         
        <div class="box">
             
            <img src ="img1.jpg">
            <div class="social">
            <a href="#"><i class ="fa fa-facebook"></i></a>
                <a href="#"><i class ="fa fa-twitter"></i></a>
            <a href="#"><i class ="fa fa-youtube"></i></a>
                <a href="#"><i class ="fa fa-linkedin"></i></a>
            <a href="#"><i class ="fa fa-instagram"></i></a>
            </div>
            <div class="text">
            <h1>John Doe</h1>
                <p> UI Designer</p>
            </div>
        </div>
         
        <div class="box">
             
            <img src ="img3.jpg">
            <div class="social">
            <a href="#"><i class ="fa fa-facebook"></i></a>
                <a href="#"><i class ="fa fa-twitter"></i></a>
            <a href="#"><i class ="fa fa-youtube"></i></a>
                <a href="#"><i class ="fa fa-linkedin"></i></a>
            <a href="#"><i class ="fa fa-instagram"></i></a>
            </div>
            <div class="text">
            <h1>Deepk Adhikari</h1>
                <p> Project Manager</p>
            </div>
        </div>
        <div class="box">
             
          <img src ="img3.jpg">
          <div class="social">
          <a href="#"><i class ="fa fa-facebook"></i></a>
              <a href="#"><i class ="fa fa-twitter"></i></a>
          <a href="#"><i class ="fa fa-youtube"></i></a>
              <a href="#"><i class ="fa fa-linkedin"></i></a>
          <a href="#"><i class ="fa fa-instagram"></i></a>
          </div>
          <div class="text">
          <h1>Deepk Adhikari</h1>
              <p> Project Manager</p>
          </div>
      </div>
      <div class="box">
             
        <img src ="img3.jpg">
        <div class="social">
        <a href="#"><i class ="fa fa-facebook"></i></a>
            <a href="#"><i class ="fa fa-twitter"></i></a>
        <a href="#"><i class ="fa fa-youtube"></i></a>
            <a href="#"><i class ="fa fa-linkedin"></i></a>
        <a href="#"><i class ="fa fa-instagram"></i></a>
        </div>
        <div class="text">
        <h1>Deepk Adhikari</h1>
            <p> Project Manager</p>
        </div>
      </div>
    </div>
    </div>
<!-- Offered courses end here -->

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
    <script src="JS/header.js"></script>
    <script src="JS/home.js"></script>
    <script src="JS/slider.js"></script>
  </body>
</html>
      
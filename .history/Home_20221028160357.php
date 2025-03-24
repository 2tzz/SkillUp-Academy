<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="CSS/header.css">
    <link rel="stylesheet" href="CSS/footer.css">
    <link rel="stylesheet" href="CSS/home.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
  </head>
  <body style="width: 1920px;">
<!-- Header starts here -->
    <header>
      <a href="#" class="logo" >
        <img src="Img/SkillUP yellow black.png" width="100px" height="100px" alt="Academy logo"/>
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
            <form class="search" >
                <input type="text" placeholder="Search....." class="input">
            <Sbutton type="submit" class="Sbutton">
                <i class="ri-search-2-line"></i>
            </Sbutton>
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
  <div class="navigation">
    <div class="btn active"></div>
    <div class="btn"></div>
    <div class="btn"></div>
    <div class="btn"></div>
    <div class="btn"></div>
  </div>
</div>

<script type="text/javascript">
var slides = document.querySelectorAll('.slide');
var btns = document.querySelectorAll('.btn');
let currentSlide = 1;

// Javascript for image slider manual navigation
var manualNav = function(manual){
  slides.forEach((slide) => {
    slide.classList.remove('active');

    btns.forEach((btn) => {
      btn.classList.remove('active');
    });
  });

  slides[manual].classList.add('active');
  btns[manual].classList.add('active');
}

btns.forEach((btn, i) => {
  btn.addEventListener("click", () => {
    manualNav(i);
    currentSlide = i;
  });
});

// Javascript for image slider autoplay navigation
var repeat = function(activeClass){
  let active = document.getElementsByClassName('active');
  let i = 1;

  var repeater = () => {
    setTimeout(function(){
      [...active].forEach((activeSlide) => {
        activeSlide.classList.remove('active');
      });

    slides[i].classList.add('active');
    btns[i].classList.add('active');
    i++;

    if(slides.length == i){
      i = 0;
    }
    if(i >= slides.length){
      return;
    }
    repeater();
  }, 10000);
  }
  repeater();
}
repeat();
</script>
    <!-- Carousal ends here -->

    <!-- Institute details start -->
        <div class="details-container">
            <div class="row">
                <div class="column1" style="background-color:#000000;">
                    <div class="card1">
                    <img src="Img/pretty-young-student-with-big-glasses-near-some-books-smiling-white-background-removebg-preview.png" alt="" class="card_img">
                    <div class="card_data">
                        <h1 class="card_title">View Courses</h1>
                        <span class="card_preci"></span>
                        <p class="card_dscription">more info</p>
                        <a href="#" >
                            <button>Click here</button></a>
                    </div>
                </div>
                </div>
                <center>
                  <div class="card2">
                  <div class="column2" >
                      <p class="vision_text">
                          <h2>Our vision </h2>
                          As a mission-driven organization,<br> we're relentlessly pursuing our vision<br> of a world where every learner can access education to<br> unlock their potential, without the barriers of cost or location.
                      </p>
                  </div>
                </div>
              </center>
            </div>
        </div>
<!-- Institute details ends here -->

<!-- staff details start here-->
    <div class="person-container">
      <div class ="top"><span>Meet Our Team</span></div>
    <div class="wrap">
        <div class="box">
             
            <img src ="Img/IDs/pexels-christina-morillo-1181686.jpg">
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
             
            <img src ="Img/IDs/pexels-daniel-xavier-1239288.jpg">
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
             
            <img src ="Img/IDs/pexels-italo-melo-2379004.jpg">
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
             
          <img src ="Img/IDs/pexels-mentatdgt-1024311.jpg">
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
             
        <img src ="Img/IDs/pexels-sora-shimazaki-5926277.jpg">
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
              <img src="Img/SkillUP yellow black.png" width="200px" height="200px">
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
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
            </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer ends here -->
    <script src="JS/header.js"></script>
    <script src="JS/home.js"></script>
    <!-- <script src="/JS/slider.js"></script> -->
  </body>
</html>
      
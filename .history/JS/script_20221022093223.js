/*
<script type="text/javascript">
    var counter = 1;
    setInterval(function () {
        Document.getElementbyID('radio'+ counter).checked=true;
        counter++;
        if(counter {">"} 4){
            counter=1;
        }
    },5000);
</script>
*/
<script type="text/javascript">
//Javacript for responsive navigation menu
const menuBtn = document.querySelector(".menu-btn");
const navigation = document.querySelector(".navigation");

menuBtn.addEventListener("click", () => {
menuBtn.classList.toggle("active");
navigation.classList.toggle("active");
});

//Javacript for video slider navigation
const btns = document.querySelectorAll(".nav-btn");
const slides = document.querySelectorAll(".video-slide");
const contents = document.querySelectorAll(".content");

var sliderNav = function(manual){
btns.forEach((btn) => {
  btn.classList.remove("active");
});

slides.forEach((slide) => {
  slide.classList.remove("active");
});

contents.forEach((content) => {
  content.classList.remove("active");
});

btns[manual].classList.add("active");
slides[manual].classList.add("active");
contents[manual].classList.add("active");
}

btns.forEach((btn, i) => {
btn.addEventListener("click", () => {
  sliderNav(i);
});
});
</script>

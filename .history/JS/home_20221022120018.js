
const logo = document.querySelector(".logo");
const nav = document.querySelector("nav");

//reveal elements on page loading
window.addEventListener("load", () => {
  logo.style.transform = "translateY(0)";
  nav.style.transform = "translateY(0)";

  setTimeout(() => {
    info.style.transform = "translateY(0)";
    info.style.opacity = "1";
  }, 500);
});


//hide and display home info on scrolldown and up
window.onscroll = function(){
  if(document.body.scrollTop > 500 || document.documentElement.scrollTop > 500){
    info.style.opacity = "0";
    info.style.transition = "0.6s";
  }
  else{
    info.style.opacity = "1";
    info.style.transition = "0.6s";
  }
}
  
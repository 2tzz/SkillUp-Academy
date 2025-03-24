
const logo = document.querySelector(".logo");
const navbar = document.querySelector("navbar");
const search_bar=document.querySelector("search_bar");

//reveal elements on page loading
window.addEventListener("load", () => {
  logo.style.transform = "translateY(0)";
  navbar.style.transform = "translateY(0)";
  search_bar.style.transform ="translateY(0)";
});

 //scrolling effects on website elements
 /*window.addEventListener("scroll", () => {
    const scrollVal = window.scrollY;
  });
*/
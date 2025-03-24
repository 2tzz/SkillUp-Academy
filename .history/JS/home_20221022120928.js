
const logo = document.querySelector(".logo");
const nav = document.querySelector("nav");
const search_bar=document.querySelector("search_bar");

//reveal elements on page loading
window.addEventListener("load", () => {
  logo.style.transform = "translateY(0)";
  nav.style.transform = "translateY(0)";
  search_bar.style.transform="translate(0)";
});

  
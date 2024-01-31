
$(document).ready(function () {
  $("#open").on("click", function () {
    $("#ul").css("display", "block");
    $("#open").css("display", "none");
    $("#close").css("display", "block");
  })

  $("#close").on("click", function () {
    $("#ul").css("display", "none");
    $("#open").css("display", "block");
    $("#close").css("display", "none");
  })

  
  AOS.init();




})


// ================================================================
// ================================================================
// var navLink = document.querySelector("#nav-links");
// const close = document.querySelector("#close");

// const navLink = document.querySelector("#nav-links");
// console.log(navLink);
// const close= document.querySelector("#close");
// const menu= document.querySelector("#menu");
// console.log(close)
// console.log("hello")
// close.addEventListener("click",()=>{

//   navLink.style.left="-250px";
//   // navLink.style.display="none";
// })
// menu.addEventListener("click",()=>{

//   navLink.style.left="0px";
//   navLink.style.display="block";
// })

let searchBtn=document.querySelector("#search-btn");
let searchBar=document.querySelector(".search-bar-container");

let formBtn=document.querySelector("#login-btn");
let LoginForm=document.querySelector(".login-form-container");
let formClose=document.querySelector("#form-close");

let VideoBtn=document.querySelectorAll(".vid-btn");

 window.onscroll = () =>{
    searchBtn.classList.remove("fa-times");
    searchBar.classList.remove("active");
 }

searchBtn.addEventListener('click',() =>{
    searchBtn.classList.toggle("fa-times");
    searchBar.classList.toggle("active");
});
formBtn.addEventListener('click',() =>{
    LoginForm.classList.add("active");
});
formClose.addEventListener('click',() =>{
    LoginForm.classList.remove("active");

});

VideoBtn.forEach(btn =>{
    btn.addEventListener('click', ()=>{
        document.querySelector('.controls .active').classList.remove('active');
        btn.classList.add("active");
        let src=btn.getAttribute('data-src');
        document.querySelector('#video-slider').src=src;
    });
});
var swiper = new Swiper(".review-slider", {
    pagination: {
      el: ".swiper-pagination",
      type: "progressbar",
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
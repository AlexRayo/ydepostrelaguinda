// Add your JS customizations here

//
// var header = document.getElementById("header");

document.querySelector(".icon-menu").onclick = function () {
  //e.stopPropagation();
  menuPhone(); };

function menuPhone() {
  document.querySelector(".menu-container").classList.toggle("d-menu");
	document.getElementById("main-layer").classList.toggle("main-layer-style");
  var line = document.querySelectorAll(".icon-line");
    line[1].classList.toggle("rotate-1");
    line[2].classList.toggle("rotate-2");
    line[0].classList.toggle("rotate-1");
    line[0].classList.toggle("opacity-line-0");
}
//HIDE TOP BAR ON SCROLLING
//the delay avoid snaping on first scroll
// var delay = 50;
// var prevScrollpos = window.pageYOffset + delay;

// window.onscroll = function() {
// var currentScrollPos = window.pageYOffset;
//   if (prevScrollpos > currentScrollPos) {
//     document.getElementById("navbar").style.top = "0";
//   } else {
//     document.getElementById("navbar").style.top = "-120px";
//   }
//   prevScrollpos = currentScrollPos;
// }
//SMOTH SCROLLING
//let smooth_link = document.querySelectorAll('a[href^="#"]');
// document.querySelectorAll('a[href^="#"]').forEach(anchor => {
//     anchor.addEventListener('click', function (e) {
//         e.preventDefault();

//         document.querySelector(this.getAttribute('href')).scrollIntoView({
//             behavior: 'smooth'
//         });
//     });
// });

// function headerAnimation() {
//     if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
//       header.classList.add("header-js");
//     } else {
//       header.classList.remove("header-js");
//     }
//   }

//PARALLAX
// window.addEventListener('scroll', function(e) {
//     //headerAnimation();
//     const target = document.querySelectorAll('.scroll');

//     var index = 0, length = target.length;
//     //loop through all selected targets
//     for (index; index < length; index++) {
//         var pos = window.pageYOffset * target[index].dataset.rate;

//         if(target[index].dataset.direction === 'vertical') {
//             target[index].style.transform = 'translate3d(0px,'+pos+'px, 0px)';
//         } else {
//             var posX = window.pageYOffset * target[index].dataset.ratex;
//             var posY = window.pageYOffset * target[index].dataset.ratey;

//             target[index].style.transform = 'translate3d('+posX+'px, '+posY+'px, 0px)';
//         }
//     }


// });

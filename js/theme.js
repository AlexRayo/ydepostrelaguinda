/**
 * File skip-link-focus-fix.js.
 *
 * Helps with accessibility for keyboard only users.
 *
 * Learn more: https://git.io/vWdr2
 */
(function () {
  var isWebkit = navigator.userAgent.toLowerCase().indexOf('webkit') > -1,
      isOpera = navigator.userAgent.toLowerCase().indexOf('opera') > -1,
      isIe = navigator.userAgent.toLowerCase().indexOf('msie') > -1;

  if ((isWebkit || isOpera || isIe) && document.getElementById && window.addEventListener) {
    window.addEventListener('hashchange', function () {
      var id = location.hash.substring(1),
          element;

      if (!/^[A-z0-9_-]+$/.test(id)) {
        return;
      }

      element = document.getElementById(id);

      if (element) {
        if (!/^(?:a|select|input|button|textarea)$/i.test(element.tagName)) {
          element.tabIndex = -1;
        }

        element.focus();
      }
    }, false);
  }
})();
// Add your JS customizations here
//
// var header = document.getElementById("header");
document.querySelector(".icon-menu").onclick = function () {
  //e.stopPropagation();
  menuPhone();
};

function menuPhone() {
  document.querySelector(".menu-container").classList.toggle("d-menu");
  document.getElementById("main-layer").classList.toggle("main-layer-style");
  var line = document.querySelectorAll(".icon-line");
  line[1].classList.toggle("rotate-1");
  line[2].classList.toggle("rotate-2");
  line[0].classList.toggle("rotate-1");
  line[0].classList.toggle("opacity-line-0");
} //HIDE TOP BAR ON SCROLLING
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
org_html = document.getElementsByClassName("woocommerce-result-count").innerHTML;
new_html = "<div id='woocommerce-result-count'>" + org_html + "</div>";
document.getElementsByClassName("woocommerce-result-count").innerHTML = new_html;

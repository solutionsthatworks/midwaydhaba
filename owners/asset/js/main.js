/*!
 * Anand Systems Inc -  v0.0.1
 * 2021 Sandesh K
 */

!function(){"use strict";var l=(e,t=!1)=>(e=e.trim(),t?[...document.querySelectorAll(e)]:document.querySelector(e)),i=(t,e,o,i=!1)=>{let a=l(e,i);a&&(i?a.forEach(e=>e.addEventListener(t,o)):a.addEventListener(t,o))},e=(e,t)=>{e.addEventListener("scroll",t)};let t=l("#navbar .scrollto",!0);var o=()=>{var o=window.scrollY+200;t.forEach(e=>{var t;!e.hash||(t=l(e.hash))&&(o>=t.offsetTop&&o<=t.offsetTop+t.offsetHeight?e.classList.add("active"):e.classList.remove("active"))})};window.addEventListener("load",o),e(document,o);var a=e=>{var t=l("#header").offsetHeight,e=l(e).offsetTop;window.scrollTo({top:e-t,behavior:"smooth"})};let s=l("#header");s&&(o=()=>{100<window.scrollY?s.classList.add("header-scrolled"):s.classList.remove("header-scrolled")},window.addEventListener("load",o),e(document,o));let n=l(".back-to-top");n&&(c=()=>{100<window.scrollY?n.classList.add("active"):n.classList.remove("active")},window.addEventListener("load",c),e(document,c)),i("click",".mobile-nav-toggle",function(e){l("#navbar").classList.toggle("navbar-mobile"),this.classList.toggle("bi-list"),this.classList.toggle("bi-x")}),i("click",".navbar .dropdown > a",function(e){l("#navbar").classList.contains("navbar-mobile")&&(e.preventDefault(),this.nextElementSibling.classList.toggle("dropdown-active"))},!0),i("click",".scrollto",function(e){if(l(this.hash)){e.preventDefault();let t=l("#navbar");if(t.classList.contains("navbar-mobile")){t.classList.remove("navbar-mobile");let e=l(".mobile-nav-toggle");e.classList.toggle("bi-list"),e.classList.toggle("bi-x")}a(this.hash)}},!0),window.addEventListener("load",()=>{window.location.hash&&l(window.location.hash)&&a(window.location.hash)});let r=l("#preloader");r&&window.addEventListener("load",()=>{r.remove()}),GLightbox({selector:".glightbox"});var c=l(".skills-content");c&&new Waypoint({element:c,offset:"80%",handler:function(e){let t=l(".progress .progress-bar",!0);t.forEach(e=>{e.style.width=e.getAttribute("aria-valuenow")+"%"})}}),window.addEventListener("load",()=>{var e=l(".portfolio-container");if(e){let t=new Isotope(e,{itemSelector:".portfolio-item"}),o=l("#portfolio-flters li",!0);i("click","#portfolio-flters li",function(e){e.preventDefault(),o.forEach(function(e){e.classList.remove("filter-active")}),this.classList.add("filter-active"),t.arrange({filter:this.getAttribute("data-filter")}),t.on("arrangeComplete",function(){AOS.refresh()})},!0)}}),GLightbox({selector:".portfolio-lightbox"}),new Swiper(".portfolio-details-slider",{speed:400,loop:!0,autoplay:{delay:5e3,disableOnInteraction:!1},pagination:{el:".swiper-pagination",type:"bullets",clickable:!0}}),window.addEventListener("load",()=>{AOS.init({duration:1e3,easing:"ease-in-out",once:!0,mirror:!1})}),console.log("Test","color: green; background: yellow; font-size: 24px;","Success!")}();
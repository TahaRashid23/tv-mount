// Initialize Wow
new WOW().init();

// Banner Slider
$(".bannerSlider").slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 3500,
  arrows: false,
  dots: true,
});
// testimonialSlider
$('.testimonialSlider').slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 3500,
  arrows: true,
  dots: false,
  responsive: [{
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: false,
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
      }
    }
  ]
});

function openNav() {
  document.getElementById("mySidenav").style.width = "100%";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}


// function reveal() {
//   var reveals = document.querySelectorAll(".reveal");

//   for (var i = 0; i < reveals.length; i++) {
//     var windowHeight = window.innerHeight;
//     var elementTop = reveals[i].getBoundingClientRect().top;
//     var elementVisible = 150;

//     if (elementTop < windowHeight - elementVisible) {
//       reveals[i].classList.add("active");
//     } else {
//       reveals[i].classList.remove("active");
//     }
//   }
// }

// window.addEventListener("scroll", reveal);

// let page = 0;
// let limit = Math.max(document.body.scrollHeight, document.body.offsetHeight,
//   document.documentElement.clientHeight, document.documentElement.scrollHeight, document.documentElement.offsetHeight);
// let vh = Math.max(document.documentElement.clientHeight, window.innerHeight || 0);
// let done = Math.round(limit / vh) - 1;

// let clock = 0;
// window.onwheel = function () {
//   //console.log(clock);
//   if (clock == 0) {
//     clock = 1;

//     let pos = event.deltaY;
//     let scroll = 0;
//     //console.log(event.deltaY);
//     //console.log(scroll);
//     let go = (event.deltaY < 0) ? -1 : +1;
//     page = page + go;
//     if (page < 0) page = 0;
//     if (page > done) page = done;
//     //console.log(page);

//     $('html, body').animate({
//       scrollTop: vh * page
//     });
//     setTimeout(function () {
//       clock = 0
//     }, 1000);

//   }
// }


// // loader
const fade = () => {
  const wrapper =
    document.querySelector('.wrapper');
  wrapper.classList.add('fade');
};
window.addEventListener('load', fade);

// year
const year = document.getElementById("year");
year.textContent = new Date().getFullYear();


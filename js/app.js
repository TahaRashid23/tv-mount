// Initialize Wow
new WOW().init();

// Banner Slider
$(".bannerSlider").slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  // autoplay: true,
  // autoplaySpeed: 3500,
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
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
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

// let main = document.querySelectorAll("main");
// let menu = document.querySelectorAll("header ul a");

// window.onscroll = () => {
//   main.forEach((i) => {
//     let top = window.scrollY;
//     let offset = i.offsetTop - 150;
//     let height = i.offsetHeight;
//     let id = i.getAttribute("id");

//     if (top >= offset && top < offset + height) {
//       menu.forEach((link) => {
//         link.classList.remove("active");
//         document
//           .querySelector("header ul a[href*=" + id + "]")
//           .classList.add("active");
//       });
//     }
//   });
// };

function reveal() {
  var reveals = document.querySelectorAll(".reveal");

  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 150;

    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("active");
    } else {
      reveals[i].classList.remove("active");
    }
  }
}

window.addEventListener("scroll", reveal);

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
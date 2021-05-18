const hotelSwiper = new Swiper('.hotel__swiper-container', {
  // Optional parameters
  loop: true,
  // Navigation arrows
  navigation: {
    nextEl: '.hotel__slider-button--next',
    prevEl: '.hotel__slider-button--prev',
    hideOnClick: true,
  },
  // Navigation keyboard
  keyboard: {
    enabled: true,
    onlyInViewport: false,
  },

  speed: 1000,

  effect: 'fade',
  fadeEffect: {
    crossFade: true,
  },
});

const rewiewsSwiper = new Swiper('.reviews__swiper-container', {
  // Optional parameters
  loop: true,
  // Navigation arrows
  navigation: {
    nextEl: '.reviews__slider-button--next',
    prevEl: '.reviews__slider-button--prev',
    hideOnClick: true,
  },
  // Navigation keyboard
  keyboard: {
    enabled: true,
    onlyInViewport: false,
  },
});

$('.parallax-window').parallax({ imageSrc: 'img/bg-newsletter.jpg' });

//menu

let menuBtn = document.querySelector('.menu-button');
let menu = document.querySelector('.navbar-menu');
let menuLines = document.querySelectorAll('.menu-button__line');

menuBtn.addEventListener('click', function () {
  menuLines.forEach((item) => {
    item.classList.toggle('menu-button__line--active');
  });

  menu.classList.toggle('navbar-menu--visible');
});

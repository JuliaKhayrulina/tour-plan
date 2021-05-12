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

  speed: 1000,
});

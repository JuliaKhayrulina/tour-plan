$(document).ready(function () {
  const hotelSwiper = new Swiper('.hotel__swiper-container', {
    //===========hotel-swiper====================//
    loop: true,
    navigation: {
      nextEl: '.hotel__slider-button--next',
      prevEl: '.hotel__slider-button--prev',
      hideOnClick: true,
    },
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

  //===============reviews-swiper=======================//
  const reviewsSwiper = new Swiper('.reviews__swiper-container', {
    loop: true,
    navigation: {
      nextEl: '.reviews__slider-button--next',
      prevEl: '.reviews__slider-button--prev',
      hideOnClick: true,
    },
    keyboard: {
      enabled: true,
      onlyInViewport: false,
    },
  });

  $('.parallax-window').parallax({ imageSrc: 'img/bg-newsletter.jpg' });

  //==================mobile-menu========================//
  let menuBtn = document.querySelector('.menu-button');
  let menu = document.querySelector('.navbar-menu');
  let menuLines = document.querySelectorAll('.menu-button__line');

  menuBtn.addEventListener('click', function () {
    menuLines.forEach((item) => {
      item.classList.toggle('menu-button__line--active');
    });

    menu.classList.toggle('navbar-menu--visible');
  });

  //===================modal===========================//

  const modalBtn = document.querySelectorAll('[data-toggle=modal]');
  const closeModalBtn = document.querySelector('.modal__close');
  const closeModalButton = document.querySelector('.close');
  closeModalBtn.addEventListener('click', closeModal);
  closeModalButton.addEventListener('click', closeModal);

  for (let button of modalBtn) {
    button.addEventListener('click', openModal);
  }

  function openModal() {
    const btn = this;
    const targetModal = btn.getAttribute('data-href');
    const childs = document.querySelector(`${targetModal}`).children;

    for (let child of childs) {
      if (child.classList.contains('modal__overlay')) {
        child.classList.add('modal__overlay--visible');
      } else if (child.classList.contains('modal__dialog')) {
        child.classList.add('modal__dialog--visible');
      }
    }
  }

  function closeModal(event) {
    event.preventDefault();
    const modalOverlay = document.querySelector('.modal__overlay--visible');
    const modalDialog = document.querySelector('.modal__dialog--visible');

    modalOverlay.classList.remove('modal__overlay--visible');
    modalDialog.classList.remove('modal__dialog--visible');
  }
  document.addEventListener('keydown', (event) => {
    if (event.key == 'Escape') {
      closeModal(event);
    }
  });
});

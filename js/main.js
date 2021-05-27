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

  //===================modal windows===========================//

  const openModalBtn = document.querySelectorAll('[data-toggle=modal]');
  const closeModalBtn = document.querySelector('.modal__close');
  const closeModalButton = document.querySelector('.close');
  const modalOverlay = document.querySelectorAll('.modal__overlay');

  //открытие по кнопкам
  for (let button of openModalBtn) {
    button.addEventListener('click', openModal);
  }

  function openModal() {
    const btn = this;
    const targetModal = btn.getAttribute('data-href');
    const childs = document.querySelector(`${targetModal}`).children;
    document.body.classList.add('no-scroll');

    for (let child of childs) {
      if (child.classList.contains('modal__overlay')) {
        child.classList.add('modal__overlay--visible');
      } else if (child.classList.contains('modal__dialog')) {
        child.classList.add('modal__dialog--visible');
      }
    }
  }
  //закрытие по кнопкам
  closeModalBtn.addEventListener('click', closeModal);
  closeModalButton.addEventListener('click', closeModal);

  //закрытие вне модального окна
  for (let overlay of modalOverlay) {
    overlay.addEventListener('click', closeModal);
  }
  //закрытие по клавише Esc
  document.addEventListener('keydown', (event) => {
    if (event.key == 'Escape') {
      closeModal(event);
    }
  });

  function closeModal(event) {
    event.preventDefault();
    const modalOverlay = document.querySelector('.modal__overlay--visible');
    const modalDialog = document.querySelector('.modal__dialog--visible');

    modalOverlay.classList.remove('modal__overlay--visible');
    modalDialog.classList.remove('modal__dialog--visible');
    document.body.classList.remove('no-scroll');
  }

  //==========Validation of the form=================================//

  $('.form').each(function () {
    $(this).validate({
      errorClass: 'invalid',
      rules: {
        name: {
          required: true,
          minlength: 2,
        },
        email: {
          required: true,
          email: true,
        },
        phone: {
          required: true,
          minlength: 18,
        },
      },
      messages: {
        name: {
          required: 'Please specify your name',
          minlength: 'The name must be at least 2 characters',
        },
        email: {
          required: 'We need your email address to contact you',
          email: 'Your email address must be in the format of name@domain.com',
        },
        phone: {
          required: 'Please, enter your phone number',
          minlength: 'Phone number must be 11 digits',
        },
      },
    });
  });

  $('.phone-mask').each(function () {
    $(this).mask('+7 (999) 999-99-99');
  });

  AOS.init();

  //=========Маскировка карты==============================//
  let map_container = document.getElementById('map_container');
  let options_map = {
    once: true,
    passive: true,
    capture: true,
  };
  map_container.addEventListener('click', start_lazy_map, options_map);
  map_container.addEventListener('mouseover', start_lazy_map, options_map);
  map_container.addEventListener('mousemove', start_lazy_map, options_map);
  map_container.addEventListener('touchstart', start_lazy_map, options_map);
  map_container.addEventListener('touchmove', start_lazy_map, options_map);

  let map_loaded = false;
  function start_lazy_map() {
    if (!map_loaded) {
      let map_block = document.getElementById('gmap_lazy');
      map_loaded = true;
      map_block.setAttribute('src', map_block.getAttribute('data-src'));
      map_block.removeAttribute('data-src');
      console.log('YMAP LOADED');
    }
  }
});

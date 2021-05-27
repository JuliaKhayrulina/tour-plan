<?php include('header.php')?>
<nav class="breadcrumb">
  <div class="container">
    <ul class="breadcrumb-list">
      <li class="breadcrumb-list__item">
        <a href="index.php" class="breadcrumb-list__link">Home</a>
      </li>
      <li class="breadcrumb-list__item">Grand Hilton Hotel</li>
    </ul>
  </div>
</nav>
<section class="hotel">
  <div class="container">
    <div class="hotel-info">
      <div class="hotel-info__text">
        <div class="hotel-wrapper">
          <div class="stars">
            <img src="./img/Star.svg" alt="star" class="stars__icon" width="8" height="8"/>
            <img src="./img/Star.svg" alt="star" class="stars__icon" width="8" height="8"/>
            <img src="./img/Star.svg" alt="star" class="stars__icon" width="8" height="8"/>
            <img src="./img/Star.svg" alt="star" class="stars__icon" width="8" height="8"/>
            <img src="./img/Star.svg" alt="star" class="stars__icon" width="8" height="8"/>
          </div>
          <h1 class="hotel-name hotel-info__name">Grand Hilton Hotel</h1>
          <span class="offer hotel-info__offer">Flash Offer</span>
        </div>
        <p class="hotel-description hotel-info__description">
          Half-Board/ All Inclusive + Complimentary Activities + Child Stays Free
        </p>
      </div>
      <div data-toggle="modal" data-href="#rating-modal" class="rating hotel-info__ratings btn-hover">
        <span class="rating__text">User Rattings</span>
        <span class="rating__counter">4.5/<span class="rating__counter-sm">5</span></span>
      </div>
    </div>
    <div class="hotel-grid">
      <div class="hotel__slider">
        <!-- Slider main container -->
        <div class="hotel__swiper-container swiper-container">
          <!-- Additional required wrapper -->
          <div class="hotel__swiper-wrapper swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
              <picture>
                <source srcset="./img/slide1-sm.webp" media="(max-width: 420px)" type="image/webp">
                <source srcset="./img/slide1.webp" class="hotel__swiper-img" type="image/webp">
                <img src="./img/slide1.jpg" alt="My default image" class="hotel__swiper-img">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="./img/slide2-sm.webp" media="(max-width: 420px)" type="image/webp">
                <source srcset="./img/slide2.webp" class="hotel__swiper-img" type="image/webp">
                <img src="./img/slide2.jpg" alt="My default image" class="hotel__swiper-img">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="./img/slide3-sm.webp" media="(max-width: 420px)" type="image/webp">
                <source srcset="./img/slide3.webp" class="hotel__swiper-img" type="image/webp">
                <img src="./img/slide3.jpg" alt="My default image" class="hotel__swiper-img">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="./img/slide4-sm.webp" media="(max-width: 420px)" type="image/webp">
                <source srcset="./img/slide4.webp" class="hotel__swiper-img" type="image/webp">
                <img src="./img/slide4.jpg" alt="My default image" class="hotel__swiper-img">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="./img/slide5-sm.webp" media="(max-width: 420px)" type="image/webp">
                <source srcset="./img/slide5.webp" class="hotel__swiper-img" type="image/webp">
                <img src="./img/slide5.jpg" alt="My default image" class="hotel__swiper-img">
              </picture>
            </div>
          </div>
          <!-- If we need navigation buttons -->
          <button class="hotel__slider-button hotel__slider-button--prev"></button>
          <button class="hotel__slider-button hotel__slider-button--next"></button>
        </div>
      </div>
      <div class="hotel-inner">
        <div class="booking">
          <div class="booking__info">
            <div class="booking__price">
              <span class="booking__start">price starts as</span>
              <strong class="booking__pricetag">$ 8,500</strong>
              <span class="booking__per-room">per room / night</span>
            </div>
            <div class="room">
              <div class="room__text">
                <img src="./img/user.svg" alt="icon: user" class="room__icon" width="14" height="14"/>
                <span class="room__descr">2 x Guests</span>
              </div>
              <div class="booking__text room__text">
                <img src="./img/home.svg" alt="icon: home" class="room__icon" width="14" height="14"/>
                <span class="room__descr">1 x Room</span>
              </div>
            </div>
          </div>
          <div class="booking__call-center">
            <span class="booking__heading">Quick Booking</span>
            <a href="tel:12100" class="booking__number">
              <img src="./img/phone-call.svg" alt="icon: call" class="booking__call-icon" width="14" height="14" />
              <span class="booking__num">12100</span>
            </a>
          </div>
          <button data-toggle="modal" data-href="#booking-modal" class="booking__btn btn-hover">
            View Other Options
          </button>
        </div>
        <div id="map_container" class="container-fluid">
          <iframe
            id="gmap_lazy"
            class="map-google"
            data-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.0368437468687!2d98.29460202301452!3d7.891214379503197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30503b7bfcd9f903%3A0xf7065fac1e3d7c48!2sDoubleTree%20by%20Hilton%20Phuket%20Banthai%20Resort!5e0!3m2!1sru!2sru!4v1620732259542!5m2!1sru!2sru"
            loading="lazy"
          ></iframe>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include('footer.php')?>
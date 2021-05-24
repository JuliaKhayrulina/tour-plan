<?php include('header.php')?>
<nav class="breadcrumb">
      <div class="container">
        <ul class="breadcrumb-list">
          <li class="breadcrumb-list__item">
            <a href="index.php" class="breadcrumb-list__link">Home</a>
          </li>
          <li class="breadcrumb-list__item">
            <a href="index.php" class="breadcrumb-list__link">Flash Offers</a>
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
            <img src="./img/Star.svg" alt="star" class="stars__icon" />
            <img src="./img/Star.svg" alt="star" class="stars__icon" />
            <img src="./img/Star.svg" alt="star" class="stars__icon" />
            <img src="./img/Star.svg" alt="star" class="stars__icon" />
            <img src="./img/Star.svg" alt="star" class="stars__icon" />
          </div>
          <h1 class="hotel-name hotel-info__name">Grand Hilton Hotel</h1>
          <span class="offer hotel-info__offer">Flash Offer</span>
        </div>
        <p class="hotel-description hotel-info__description">
          Half-Board/ All Inclusive + Complimentary Activities + Child Stays Free
        </p>
      </div>
      <div data-toggle="modal" data-href="#rating-modal" class="rating hotel-info__ratings">
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
              <img class="hotel__swiper-img" src="./img/slide1.jpg" alt="slide" />
            </div>
            <div class="swiper-slide">
              <img class="hotel__swiper-img" src="./img/slide2.jpg" alt="slide" />
            </div>
            <div class="swiper-slide">
              <img class="hotel__swiper-img" src="./img/slide3.jpg" alt="slide" />
            </div>
            <div class="swiper-slide">
              <img class="hotel__swiper-img" src="./img/slide4.jpg" alt="slide" />
            </div>
            <div class="swiper-slide">
              <img class="hotel__swiper-img" src="./img/slide5.jpg" alt="slide" />
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
                <img src="./img/user.svg" alt="icon: user" class="room__icon" />
                <span class="room__descr">2 x Guests</span>
              </div>
              <div class="booking__text room__text">
                <img src="./img/home.svg" alt="icon: home" class="room__icon" />
                <span class="room__descr">1 x Room</span>
              </div>
            </div>
          </div>
          <div class="booking__call-center">
            <span class="booking__heading">Quick Booking</span>
            <a href="tel:12100" class="booking__number">
              <img src="./img/phone-call.svg" alt="icon: call" class="booking__call-icon" />
              <span class="booking__num">12100</span>
            </a>
          </div>
          <button data-toggle="modal" data-href="#booking-modal" class="booking__btn btn-hover">
            View Other Options
          </button>
        </div>
        <div class="map">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.0368437468687!2d98.29460202301452!3d7.891214379503197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30503b7bfcd9f903%3A0xf7065fac1e3d7c48!2sDoubleTree%20by%20Hilton%20Phuket%20Banthai%20Resort!5e0!3m2!1sru!2sru!4v1620732259542!5m2!1sru!2sru"
            class="map__google"
            allowfullscreen=""
            loading="lazy"
          ></iframe>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="packages">
  <div class="container packages-container">
    <h2 class="packages__title">Other Packages</h2>
    <div class="packages-grid">
      <div class="packages-item">
        <div class="packages-item__inner">
          <span class="offer packages-item__offer packages-item__offer--big">Flash Offer</span>
          <img src="./img/blueHaven.jpg" alt="hotel: Blue Haven" class="packages-item__img" />
        </div>
        <div class="packages-item__descr packages-item__descr--big">
          <div class="stars packages-item__stars">
            <img src="./img/Star.svg" alt="star" class="stars__icon" />
            <img src="./img/Star.svg" alt="star" class="stars__icon" />
            <img src="./img/Star.svg" alt="star" class="stars__icon" />
            <img src="./img/Star.svg" alt="star" class="stars__icon" />
            <img src="./img/Star.svg" alt="star" class="stars__icon" />
          </div>
          <h3 class="packages-item__subtitle packages-item__subtitle--big">Hotel Blue Haven</h3>
          <p class="packages-item__info">
            Aute quis duis excepteur excepteur ipsum cat eiusmod consectetur enim laborum magna
            llit. Ipsum est fugiat velit ea llamco do esse ut in veniam sun in onsequat. Aute quis
            duis epteur excepteur ipsum occaecat eiusmod nsectetur enim laborum magna mollit. Ipsum
            est fugiat velit ea ullamco do
          </p>
          <div class="room packages-item__room packages-item__room--big">
            <div class="room__text packages-item__room-text">
              <img
                src="./img/mark.svg"
                alt="icon: mark"
                class="room__icon packages-item__room-icon"
              />
              <span class="room__descr packages-item__room-descr">1749 Wheeler Ridge Delaware</span>
            </div>
            <div class="room__text packages-item__room-text">
              <img
                src="./img/user.svg"
                alt="icon: user"
                class="room__icon packages-item__room-icon"
              />
              <span class="room__descr packages-item__room-descr">2 x Guests</span>
            </div>
            <div class="room__text packages-item__room-text">
              <img
                src="./img/home.svg"
                alt="icon: home"
                class="room__icon packages-item__room-icon"
              />
              <span class="room__descr packages-item__room-descr">1 x Room</span>
            </div>
          </div>
          <span class="packages-item__pricetag-last">$ 10,500</span>
          <div class="packages-item__price">
            <span class="packages-item__pricetag">$ 8,500</span>
            <button
              data-toggle="modal"
              data-href="#booking-modal"
              class="packages-item__btn btn-hover"
            >
              Book Now
            </button>
          </div>
        </div>
      </div>
      <div class="packages-item">
        <div class="packages-item__inner">
          <span class="offer packages-item__offer">Flash Offer</span>
          <img src="./img/belleMare.jpg" alt="hotel: LUX* Belle Mare" class="packages-item__img" />
        </div>
        <div class="packages-item__descr">
          <h3 class="packages-item__subtitle">LUX* Belle Mare</h3>
          <div class="room packages-item__room">
            <div class="room__text packages-item__room-text">
              <img
                src="./img/mark.svg"
                alt="icon: mark"
                class="room__icon packages-item__room-icon"
              />
              <span class="room__descr packages-item__room-descr">1749 Wheeler Ridge Delaware</span>
            </div>
            <div class="room__text packages-item__room-text">
              <img
                src="./img/user.svg"
                alt="icon: user"
                class="room__icon packages-item__room-icon"
              />
              <span class="room__descr packages-item__room-descr">2 x Guests</span>
            </div>
            <div class="room__text packages-item__room-text">
              <img
                src="./img/home.svg"
                alt="icon: home"
                class="room__icon packages-item__room-icon"
              />
              <span class="room__descr packages-item__room-descr">1 x Room</span>
            </div>
          </div>
          <span class="packages-item__pricetag-last">$ 8,500</span>
          <div class="packages-item__price">
            <span class="packages-item__pricetag">$ 3,000</span>
            <button
              data-toggle="modal"
              data-href="#booking-modal"
              class="packages-item__btn btn-hover"
            >
              Book Now
            </button>
          </div>
        </div>
      </div>
      <div class="packages-item">
        <div class="packages-item__inner">
          <span class="offer packages-item__offer">Flash Offer</span>
          <img src="./img/whitePalace.jpg" alt="hotel: White Palace" class="packages-item__img" />
        </div>
        <div class="packages-item__descr">
          <h3 class="packages-item__subtitle">White Palace</h3>
          <div class="room packages-item__room">
            <div class="room__text packages-item__room-text">
              <img
                src="./img/mark.svg"
                alt="icon: mark"
                class="room__icon packages-item__room-icon"
              />
              <span class="room__descr packages-item__room-descr">1749 Wheeler Ridge Delaware</span>
            </div>
            <div class="room__text packages-item__room-text">
              <img
                src="./img/user.svg"
                alt="icon: user"
                class="room__icon packages-item__room-icon"
              />
              <span class="room__descr packages-item__room-descr">2 x Guests</span>
            </div>
            <div class="room__text packages-item__room-text">
              <img
                src="./img/home.svg"
                alt="icon: home"
                class="room__icon packages-item__room-icon"
              />
              <span class="room__descr packages-item__room-descr">1 x Room</span>
            </div>
          </div>
          <span class="packages-item__pricetag-last">$ 10,500</span>
          <div class="packages-item__price">
            <span class="packages-item__pricetag">$ 9,500</span>
            <button
              data-toggle="modal"
              data-href="#booking-modal"
              class="packages-item__btn btn-hover"
            >
              Book Now
            </button>
          </div>
        </div>
      </div>
      <div class="packages-item">
        <div class="packages-item__inner">
          <span class="offer packages-item__offer">Flash Offer</span>
          <img src="./img/luxuryPlace.jpg" alt="hotel: Luxury Place" class="packages-item__img" />
        </div>
        <div class="packages-item__descr">
          <h3 class="packages-item__subtitle">Luxury Place</h3>
          <div class="room packages-item__room">
            <div class="room__text packages-item__room-text">
              <img
                src="./img/mark.svg"
                alt="icon: mark"
                class="room__icon packages-item__room-icon"
              />
              <span class="room__descr packages-item__room-descr">1749 Wheeler Ridge Delaware</span>
            </div>
            <div class="room__text packages-item__room-text">
              <img
                src="./img/user.svg"
                alt="icon: user"
                class="room__icon packages-item__room-icon"
              />
              <span class="room__descr packages-item__room-descr">2 x Guests</span>
            </div>
            <div class="room__text packages-item__room-text">
              <img
                src="./img/home.svg"
                alt="icon: home"
                class="room__icon packages-item__room-icon"
              />
              <span class="room__descr packages-item__room-descr">1 x Room</span>
            </div>
          </div>
          <span class="packages-item__pricetag-last">$ 4,500</span>
          <div class="packages-item__price">
            <span class="packages-item__pricetag">$ 2,500</span>
            <button
              data-toggle="modal"
              data-href="#booking-modal"
              class="packages-item__btn btn-hover"
            >
              Book Now
            </button>
          </div>
        </div>
      </div>
      <div class="packages-item">
        <div class="packages-item__inner">
          <span class="offer packages-item__offer">Flash Offer</span>
          <img src="./img/fiveStar.jpg" alt="hotel: Hotel Five Star" class="packages-item__img" />
        </div>
        <div class="packages-item__descr">
          <h3 class="packages-item__subtitle">Hotel Five Star</h3>
          <div class="room packages-item__room">
            <div class="room__text packages-item__room-text">
              <img
                src="./img/mark.svg"
                alt="icon: mark"
                class="room__icon packages-item__room-icon"
              />
              <span class="room__descr packages-item__room-descr">1749 Wheeler Ridge Delaware</span>
            </div>
            <div class="room__text packages-item__room-text">
              <img
                src="./img/user.svg"
                alt="icon: user"
                class="room__icon packages-item__room-icon"
              />
              <span class="room__descr packages-item__room-descr">2 x Guests</span>
            </div>
            <div class="room__text packages-item__room-text">
              <img
                src="./img/home.svg"
                alt="icon: home"
                class="room__icon packages-item__room-icon"
              />
              <span class="room__descr packages-item__room-descr">1 x Room</span>
            </div>
          </div>
          <span class="packages-item__pricetag-last">$ 6,500</span>
          <div class="packages-item__price">
            <span class="packages-item__pricetag">$ 3,500</span>
            <button
              data-toggle="modal"
              data-href="#booking-modal"
              class="packages-item__btn btn-hover"
            >
              Book Now
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section
  class="newsletter parallax-window"
  data-parallax="scroll"
  data-image-src="./img/bg-newsletter.jpg"
>
  <div class="newsletter-wrapper">
    <div class="newsletter-inner">
      <h2 class="newsletter-title">subscribe to our</h2>
      <span class="newsletter-strong">Newsletter</span>
    </div>
    <form action="send.php" method="POST" class="form subscribe newsletter__subscribe">
      <input type="email" class="subscribe__input" placeholder="Your email address" name="email" required/>
      <button class="subscribe__btn btn-hover">Send</button>
    </form>
  </div>
</section>
<section class="reviews">
  <div class="container">
    <h2 class="reviews__title">What people think about us</h2>
    <div class="reviews__swiper-container swiper-container">
      <div class="reviews__swiper-wrapper swiper-wrapper">
        <!-- Slides -->
        <div class="reviews-slider swiper-slide">
          <div class="reviews-slider__item">
            <div class="reviews-slider__profile">
              <img
                src="./img/reviews-avatar.jpg"
                alt="user: Megan Fox"
                class="reviews-slider__avatar"
              />
              <h3 class="reviews-slider__username">Megan Fox</h3>
              <span class="reviews-slider__date">Stayed 18 Nov, 2019</span>
              <div class="stars">
                <img src="./img/Star.svg" alt="star" class="stars__icon" />
                <img src="./img/Star.svg" alt="star" class="stars__icon" />
                <img src="./img/Star.svg" alt="star" class="stars__icon" />
                <img src="./img/Star.svg" alt="star" class="stars__icon" />
                <img src="./img/Star.svg" alt="star" class="stars__icon" />
              </div>
            </div>
            <p class="reviews-slider__text">
              It was very nice hotel with cleanliness. Staff behavior was good and polite. They
              welcome us very well. Issue was only that Lift was not in working and we were allotted
              to 3rd floor and amenities articles were in corner of gallery which were giving bad
              feeling. Breakfast was good and support of the staff was also very nice. Location is
              not good as per atmosphere, it is very nearby most of the popular places but self
              location in a narrow street is not good. Overall it was a good experience and could
              recommend.
            </p>
          </div>
        </div>
        <div class="reviews-slider swiper-slide">
          <div class="reviews-slider__item">
            <div class="reviews-slider__profile">
              <img
                src="./img/reviews-avatar2.jpg"
                alt="user: Samanta Ray"
                class="reviews-slider__avatar"
              />
              <h3 class="reviews-slider__username">Samanta Ray</h3>
              <span class="reviews-slider__date">Stayed 11 May, 2020</span>
              <div class="stars">
                <img src="./img/Star.svg" alt="star" class="stars__icon" />
                <img src="./img/Star.svg" alt="star" class="stars__icon" />
                <img src="./img/Star.svg" alt="star" class="stars__icon" />
                <img src="./img/Star.svg" alt="star" class="stars__icon" />
                <img src="./img/Star.svg" alt="star" class="stars__icon" />
              </div>
            </div>
            <p class="reviews-slider__text">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam officiis iure
              molestias, totam culpa delectus soluta! Nesciunt obcaecati iure cum cupiditate nobis,
              fugiat consectetur, atque ullam voluptatum eligendi quo ipsam, nemo veritatis a rem
              rerum doloremque pariatur! Amet eius incidunt in a, quibusdam sapiente odit provident
              repellendus non voluptatum corporis quos consequatur.
            </p>
          </div>
        </div>
        <div class="reviews-slider swiper-slide">
          <div class="reviews-slider__item">
            <div class="reviews-slider__profile">
              <img
                src="./img/reviews-avatar3.jpg"
                alt="user: Mark"
                class="reviews-slider__avatar"
              />
              <h3 class="reviews-slider__username">Mark</h3>
              <span class="reviews-slider__date">Stayed 2 Jun, 2020</span>
              <div class="stars">
                <img src="./img/Star.svg" alt="star" class="stars__icon" />
                <img src="./img/Star.svg" alt="star" class="stars__icon" />
                <img src="./img/Star.svg" alt="star" class="stars__icon" />
                <img src="./img/Star.svg" alt="star" class="stars__icon" />
                <img src="./img/Star.svg" alt="star" class="stars__icon" />
              </div>
            </div>
            <p class="reviews-slider__text">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque, placeat at? Nisi
              esse voluptate commodi ad architecto excepturi perspiciatis eum iste, reiciendis
              facilis quidem quod, ullam voluptatum. Quas incidunt sed quis iure ullam et? Expedita
              fuga molestias sequi nam atque voluptas perferendis repellat, cumque iusto fugiat
              voluptates dolores qui doloremque ad temporibus nesciunt vitae sunt esse eveniet ipsum
              ipsam eum!
            </p>
          </div>
        </div>
      </div>
      <button class="reviews__slider-button reviews__slider-button--prev"></button>
      <button class="reviews__slider-button reviews__slider-button--next"></button>
    </div>
  </div>
</section>
<section class="activities">
  <div class="container">
    <h2 class="activities__title">Other Activities</h2>
    <div class="activities-wrapper">
      <div class="card">
        <img src="./img/activities-1.jpg" alt="The curious corner of chamarel" class="card__img" />
        <h3 class="card__title">The curious corner of&nbsp;chamarel</h3>
        <button data-toggle="modal" data-href="#booking-modal" class="card__btn btn-hover">
          Book Now
        </button>
      </div>
      <div class="card">
        <img src="./img/activities-2.jpg" alt="Gymkhana club golf course" class="card__img" />
        <h3 class="card__title">Gymkhana club golf course</h3>
        <button data-toggle="modal" data-href="#booking-modal" class="card__btn btn-hover">
          Book Now
        </button>
      </div>
      <div class="card">
        <img
          src="./img/activities-3.jpg"
          alt="Tamarind falls hiking trip - full day"
          class="card__img"
        />
        <h3 class="card__title">Tamarind falls hiking trip&nbsp;- full day</h3>
        <button data-toggle="modal" data-href="#booking-modal" class="card__btn btn-hover">
          Book Now
        </button>
      </div>
      <div class="card">
        <img src="./img/activities-4.jpg" alt="The blue marine discovery quest" class="card__img" />
        <h3 class="card__title">The blue marine discovery quest</h3>
        <button data-toggle="modal" data-href="#booking-modal" class="card__btn btn-hover">
          Book Now
        </button>
      </div>
    </div>
  </div>
</section>
<?php include('footer.php')?>

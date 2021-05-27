<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="./img/favicon.ico" type="image/x-icon" />
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;600;700&family=Nunito:wght@400;600;800&display=swap" as="style" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;600;700&family=Nunito:wght@400;600;800&display=swap"
      rel="stylesheet"
    />

    <link rel="preload" href="./css/style.min.css" as="style" />
    <link rel="preload" href="./css/swiper-bundle.min.css" as="style" />
    <link rel="stylesheet" href="./css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./css/aos.css" />
    <link rel="stylesheet" href="./css/style.min.css" />
    <title>Best Tour Plan - Hotel Booking</title>
  </head>
  <body>
    <header class="navbar navbar--mobile-fixed">
      <div class="container">
        <div class="navbar-top">
          <a href="index.php" class="logo">
            <img src="./img/horizontal-logo.svg" alt="Logo: Best Tour Plan" class="logo__image" />
          </a>

          <form action="#" class="search navbar__search navbar__search--mobile-hidden">
            <input type="text" class="search__input" placeholder="Search Location" />
            <button class="search__btn btn-hover">
              <img src="./img/search.svg" alt="icon: search" width="16" height="16"/>
            </button>
          </form>

          <a href="#" class="user navbar__user navbar__user--mobile-hidden">
            <img src="./img/user_avatar.jpg" alt="user: Nathan" class="user__avatar" />
            <span class="user__name">Nathan</span>
          </a>
          <button class="menu-button navbar-top__menu-button">
            <span class="menu-button__line"></span>
            <span class="menu-button__line"></span>
            <span class="menu-button__line"></span>
          </button>
        </div>
      </div>

      <nav class="navbar-menu">
        <div class="container">
          <ul class="navbar-menu__list">
            <li class="navbar-menu__item navbar-menu__item--mobile-visible">
              <a href="#" class="user navbar__user navbar__user--mobile-visible">
                <img src="./img/user_avatar.jpg" alt="user: Nathan" class="user__avatar" />
                <span class="user__name user__name--light">Nathan</span>
              </a>
            </li>
            <li class="navbar-menu__item navbar-menu__item--mobile-visible">
              <form action="#" class="search navbar__search navbar__search--mobile-visible">
                <input type="text" class="search__input" placeholder="Search Location" />
                <button class="search__btn">
                  <img src="./img/search.svg" alt="icon: search" width="16" height="16" />
                </button>
              </form>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">All Deals</a>
            </li>
            <li class="navbar-menu__item">
              <a href="hotels.php" class="navbar-menu__link">Hotels</a>
            </li>
            <li class="navbar-menu__item">
              <a href="activities.php" class="navbar-menu__link">Activities</a>
            </li>
            <li class="navbar-menu__item">
              <a href="hotel-day-packages.php" class="navbar-menu__link">Hotel Day Packages</a>
            </li>
            <li class="navbar-menu__item">
              <a href="restaurants.php" class="navbar-menu__link">Restaurants</a>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">Events</a>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">Rodrigues</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

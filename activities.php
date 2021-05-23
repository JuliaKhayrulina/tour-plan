<?php include('header.php')?>
<nav class="breadcrumb">
      <div class="container">
        <ul class="breadcrumb-list">
          <li class="breadcrumb-list__item">
            <a href="index.php" class="breadcrumb-list__link">Home</a>
          </li>
          <li class="breadcrumb-list__item">Activities</li>
        </ul>
      </div>
    </nav>
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

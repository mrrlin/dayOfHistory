<?php

/* @var $this yii\web\View */
/**
 * @var Site $model
 */
$this->title = 'Day';
?>
<nav class="navbar navbar-expand-lg navbar-light menu menu-mobile">
  <button class="navbar-toggler menu-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto menu-list">
      <li class="nav-item menu-item">
        <img class="menu-item-icon" src="img/icon-main.png" alt="icon">
        <a class="nav-link menu-item-text" href="#">Главная</a>
      </li>
      <li class="nav-item menu-item">
        <img class="menu-item-icon" src="img/icon-all-days-month.png" alt="icon">
        <a class="nav-link menu-item-text" href="#">Все даты месяца</a>
      </li>
      <li class="nav-item menu-item">
        <img class="menu-item-icon" src="img/icon-important-days.png" alt="icon">
        <a class="nav-link menu-item-text" href="#">Важные даты года</a>
      </li>
      <li class="nav-item menu-item">
        <img class="menu-item-icon" src="img/icon-about-project.png" alt="icon">
        <a class="nav-link menu-item-text" href="#">О проекте</a>
      </li>
    </ul>
  </div>
</nav>

<?php
    $currentDay = new DateTimeImmutable();
    $yesterday = $currentDay->sub(new DateInterval("P1D"));
    $tomorrow = $currentDay->add(new DateInterval("P1D"));
?>
<div class="days-week text-center">
    <div class="change-day">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <p class="list-days-text swiper-slide" data-date="<?=$yesterday->format("*-m-d")?>">Вчера</p>
                <p class="list-days-text swiper-slide" data-date="<?=$currentDay->format("*-m-d")?>">Сегодня</p>
                <p class="list-days-text swiper-slide" data-date="<?=$tomorrow->format("*-m-d")?>">Завтра</p>
            </div>
        </div>
        <div class="sw-nav">
            <span class="swiper-button-prev"></span>
            <span class="swiper-button-next"></span>
        </div>
    </div>
</div>
    
<div class="js-cards">
    <img class="preloader" src="img/loading.gif" />
    <div class="loading-background"></div>
    <div class="events">
        <?= $this->render('cards', [
            "models" => $models
        ]); ?>
    </div>
</div>
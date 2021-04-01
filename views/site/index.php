<?php

/* @var $this yii\web\View */
/**
 * @var Site $model
 */
$this->title = 'Day';
?>

<div class="menu-icon">
    <span class="menu-icon__line"></span>
    <span class="menu-icon__line"></span>
    <span class="menu-icon__line"></span>
</div>

</div>
<nav class="main-menu">
    <ul class="menu text-center"> 
        <li class="menu-item">
            <img class="menu-item-icon" src="img/icon-main.png" alt="icon">
            <a class="menu-ref" href="#">
                <p class="menu-item-text">Главная</p>
            </a>
        </li>
        <li class="menu-item">
            <img class="menu-item-icon" src="img/icon-all-days-month.png" alt="icon">
            <a class="menu-ref" href="#">
                <p class="menu-item-text">Все даты месяца</p>
            </a>
        </li>
        <li class="menu-item">
            <img class="menu-item-icon" src="img/icon-important-days.png" alt="icon">
            <a class="menu-ref" href="#">
                <p class="menu-item-text">Важные даты года</p>
            </a>
        </li>
        <li class="menu-item">
            <img class="menu-item-icon" src="img/icon-about-project.png" alt="icon">
            <a class="menu-ref" href="#">
                <p class="menu-item-text">О проекте</p>
            </a>
        </li>
    </ul>
</nav>
<div class="drop-down">
<div class="drop-down__top">
    <div class="center">
        <div class="drop-down__close">
            <p class="menu-text">Меню</p>
        </div>
            <ul class="menu text-center"> 
                <li class="menu-item">
                    <img class="menu-item-icon" src="img/icon-main.png" alt="icon">
                    <a class="menu-ref" href="#">
                        <p class="menu-item-text">Главная</p>
                    </a>
                </li>
                <li class="menu-item">
                    <img class="menu-item-icon" src="img/icon-all-days-month.png" alt="icon">
                    <a class="menu-ref" href="#">
                        <p class="menu-item-text">Все даты месяца</p>
                    </a>
                </li>
                <li class="menu-item">
                    <img class="menu-item-icon" src="img/icon-important-days.png" alt="icon">
                    <a class="menu-ref" href="#">
                        <p class="menu-item-text">Важные даты года</p>
                    </a>
                </li>
                <li class="menu-item">
                    <img class="menu-item-icon" src="img/icon-about-project.png" alt="icon">
                    <a class="menu-ref" href="#">
                        <p class="menu-item-text">О проекте</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
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
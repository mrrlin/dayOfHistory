<?php

/* @var $this \yii\web\View */
/* @var $content string */
/**
* @var Site $model 
*/

use app\widgets\Alert;
use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<?php
    function month() {
        $cur_month = date("m");
        //echo $cur_month;
        switch($cur_month) {
            case 01: $tmp_str = "январь"; break;
            case 02: $tmp_str = "февраль"; break;
            case 03: $tmp_str = "март"; break;
            case 04: $tmp_str = "апрель"; break;
            case 05: $tmp_str = "май"; break;
            case 06: $tmp_str = "июнь"; break;
            case 07: $tmp_str = "июль"; break;
            case '08': $tmp_str = "август"; break;
            case '09': $tmp_str = "сентябрь"; break;
            case 10: $tmp_str = "октябрь"; break;
            case 11: $tmp_str = "ноябрь"; break;
            case 12: $tmp_str = "декабрь"; break;
        }
        $tmp_symb = mb_substr($tmp_str, -1);
        if($tmp_symb == "ь") {
            $month = str_replace("ь", "я", $tmp_str);
            return $month;
            // $pattern = "/ь/";
            // $replace = "я";
            // $month = preg_replace($pattern, $replace, $tmp_str);
            // return $month;
        }
        if($tmp_symb == "т") {
            $month = str_replace("т", "та", $tmp_str);
            return $month;
        }
        if($tmp_symb === "й") {
            $month = str_replace("й", "я", $tmp_str);
            return $month;
        }
    }
?>
    <header class="header">
        <div class="container">
            <img class="bookmark" src="img/bookMark.png" alt="bookmark">
            <p class="bookmark-text-day"><?= $cur_day = date("d"); ?></p>
            <p class="bookmark-text-month"><?= month(); ?></p>
            <p class="page-title">День в истории</p>
            <p class="page-title-bottom">Владимирского края</p>
        </div>
    </header>
    
    <div class="body-background">
        <div class="container">
            <?= $content ?>
            <footer class="footer">
                <div class="container">
                    <p class="footer-text text-center">© ГБУК "Владимирская областная научная библиотека". 2017 - 2019</p>
                </div>
            </footer>
        </div>

</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\bootstrap\Button;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use lajax\languagepicker\widgets\LanguagePicker;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    
</head>
<body>
<?php $this->beginBody() ?>


    <header style=" box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">

    <?php



    Yii::$app->user->isGuest ? (
                $endDiv = 'Продлить подписку'
            ) : (
                $endDiv = Yii::$app->user->identity->username
            );

    NavBar::begin([
        'brandLabel' => Html::img('@web/img/header/logo.png', ['alt'=>Yii::$app->name]),
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-expand-md ',
            'style' => 'background-color: #fff;'

        ]

    ]);?>

    <?php
    echo Nav::widget([
        'options' => ['class' => ' col-sm-12 col-md-9 navbar navbar-expand-lg navbar-nav collapse nav-wid text-center','id'=>'navigation',
            'style' => ' font-size: 15px; '],
        'items' => array(
            array('label' => 'Преимущества', 'url' => ('#why-we')),
            array('label' => 'Цены', 'url' => ('#price')),
            array('label' =>  'Реферальная система', 'url' => ('#system')),
            array('label' =>  'Помощь', 'url' => ('#help')),
        )]);

    echo Button::widget([
        'label' => $endDiv,
        'options' => ['class' => 'btn btn-outline-success text-center area d-flex', 'style' => ' color: #000; background-color: #fff; border: 1px solid #55A462; border-radius: 4px; justify-content:center; margin: 0 auto !important;', "data-toggle"=>"modal", "data-target"=>"#step2_1"],
    ]);
?>

    <?php
    NavBar::end();
    ?>
    </header>
<div class="wrap">
        <?= $content ?>


</div>

<footer class="footer" style="background-color: #000;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <img src="img/header/logo-footer.png" alt="LOGO" style="height:60px; ">
            </div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

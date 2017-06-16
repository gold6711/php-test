<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
<meta charset="<?= Yii::$app->charset ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?= Html::csrfMetaTags() ?>
<title><?= Html::encode($this->title) ?></title>
<?php $this->head() ?>
<link rel="icon" href="http://php-test/web/images/ico/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="http://php-test/web/images/ico/favicon.ico" type="image/x-icon">
</head><!--/head-->

<body>
<?php $this->beginBody() ?>
<header id="header"><!--header-->
    <div class="header_top">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><i class="fa fa-phone"></i> +7 (916) 267 06 49</li>
                            <li><i class="fa fa-envelope" style="padding-top: 12px; padding-left: 12px;"></i> gold6711@gmail.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="text-center">
                            <li>ТЕСТОВОЕ ЗАДАНИЕ</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header><!--/header-->

<?= $content; ?>



<footer id="footer"><!--Footer-->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p class="pull-left">Copyright © 2017</p>
                <p class="pull-right">TEST PHP Junior</p>
            </div>
        </div>
    </div>
</footer><!--/Footer-->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
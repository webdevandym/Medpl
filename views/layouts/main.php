<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
// use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language = 'ru'?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=PT+Sans&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
    <div class="top_menu">
    <div class="top">
        <div class="wrapper">
       
             <?php
                NavBar::begin([
                    'brandLabel' => Html::img('@web/web/images/logo.png',['alt'=>Yii::$app->name,'class'=>'logo']),
                    'brandUrl' => Yii::$app->homeUrl,
                    'brandOptions'=>[
                        'class' => 'navbar-brand',
                    ],
                    'renderInnerContainer' => false,
                    'innerContainerOptions' => [
                        'class'=> 'col-sm-3'
                    ],
                    'options' => [
                        'class' => 'navbar-default ',
                        'id'=>'topmenu',
                    ],
                ]);
    
            $searchform = '<form class="navbar-form" role="search" id="search-form">
                <div class="input-group" id = "input-grp">
                    <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
                    <div class="input-group-btn" >
                        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                    </div>
                </div>
                </form>';

            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right', 'id' => 'dropmenu'],
                'encodeLabels'=>false,
                'items' => [
                    ['label' => '<span class="phone_top">(067) 999-99-99</span>'
                        .       '<span class="opened">Пн-Пт, 9:00-18:00</span>',
                     'url' => false
                    ],
                    ['label' => $searchform ,
                     'url' => false
                    ],
                    [
                    'label' => 'Русский',
                    'items' => [
                             ['label' => 'Українська', 'url' => '#1'],
                             ['label' => 'English', 'url' => '#'],
                        ],
                    ],
                ],
            ]); 
            NavBar::end();
            ?>
        </div>
    </div>
    <div class="mainmenu">
        <div class="wrapper">
            <div class="hidden-lg hidden-md hidden-xs">
                <?php
                    NavBar::begin();
                    echo Nav::widget([
                        'options' => ['class' => 'navbar-nav', 'id'=>'nav-min'],
                        'items' => [
                            '<li class="active"><a href="#home">О ДМС</a></li>',
                           '<li><a href="#simple">Простые</a></li>',
                           '<li><a href="#privat">Индивидуальные </a></li>',
                           '<li><a href="#family">Семейные </a></li>',
                           '<li><a href="#other">Нестандартные </a></li>',
                             /* Yii::$app->user->isGuest ?
                                ['label' => 'Login', 'url' => ['/site/login']] :
                                [
                                    'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                                    'url' => ['/site/logout'],
                                    'linkOptions' => ['data-method' => 'post']
                                ],*/
                        ],
                    ]);
                    NavBar::end();
                    ?>
            </div>
            <div class="hidden-sm">
                <?php
                    NavBar::begin();
                    echo Nav::widget([
                        'options' => ['class' => 'navbar-nav', 'id'=>'nav'],
                        'items' => [
                           '<li class="active"><a href="#home">О ДМС</a></li>',
                           '<li><a href="#simple">Простые программы</a></li>',
                           '<li><a href="#privat">Индивидуальные программы</a></li>',
                           '<li><a href="#family">Семейные программы</a></li>',
                           '<li><a href="#other">Нестандартные условия</a></li>',
                            // ['label' => 'О ДМС', 'url' => ['#']],
                            // ['label' => 'Простые программы', 'url' => ["#simple"]],
                            // ['label' => 'Индивидуальные программы', 'url' => ['/site/privat-programs']],
                            // ['label' => 'Семейные программы', 'url' => ['/site/family-programs']],
                            // ['label' => 'Нестандартные условия', 'url' => ['/site/other-programs']],
                             /* Yii::$app->user->isGuest ?
                                ['label' => 'Login', 'url' => ['/site/login']] :
                                [
                                    'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                                    'url' => ['/site/logout'],
                                    'linkOptions' => ['data-method' => 'post']
                                ],*/
                        ],
                    ]);
                    NavBar::end();
                    ?>
                
            </div>
        </div>    
    </div>
</div>
 <?= $content ?>
    
<footer class="myfooter">
    <div class="container">
            <div class="imgPart">
                <a class="footerImg" href="/index.php">
                  <img class="logo" src="/web/images/logo.png" alt="My Application">
                </a>
                <p id = "logoTxt">&copy; 2016 Медполис, все права защищены.</p>
            </div>
            <div class="footerEmail">
                <p>email: info@medpolis.com.ua</p>
                <p>тел: +38 (067) 999-99-99,+38 (050) 999-99-99</p>
            </div>
            <div class="socLink">
                <?php
                    $socialIco = array("fb","tw","in","ut","sk");
                    $socialLink = array("#","#","#","#","#");
                    $max = sizeof($socialIco);
                    for ($i=0; $i < $max  ; $i++) { 
                         echo <<<END
                         <a href = "$socialLink[$i]" class="SocialImg">
                            <img src="../web/images/$socialIco[$i]soc.png" alt="" class = "imageIn">
                        </a>
END;
                     } 
                ?>
            </div>
            <div class="sublink">
                <ul class="footerLink">
                    <li ><a href="#home">О ДМС</a></li>
                    <li ><a href="#simple">Простые</a></li>
                    <li ><a href="#privat">Индивидуальные </a></li>
                    <li> <a href="#family">Семейные</a></li>
                    <li> <a href="#other">Нестандартные условия</a></li>
                </ul>
            </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

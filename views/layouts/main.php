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
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <!-- <style type = "text/css">@font-face{font-family:'Glyphicons Halflings';src:url(../web/fonts/glyphicons-halflings-regular.eot);src:url(../web/fonts/glyphicons-halflings-regular.eot?#iefix) format("embedded-opentype"),url(../web/fonts/glyphicons-halflings-regular.woff2) format("woff2"),url(../web/fonts/glyphicons-halflings-regular.woff) format("woff"),url(../web/fonts/glyphicons-halflings-regular.ttf) format("truetype"),url(../web/fonts/glyphicons-halflings-regular.svg#glyphicons_halflingsregular) format("svg")}.glyphicon{position:relative;top:1px;display:inline-block;font-family:'Glyphicons Halflings';font-style:normal;font-weight:400;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.glyphicon-search:before{content:"\e003"}html{font-family:sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%}body{margin:0}nav,section{display:block}a{background-color:transparent}a:active,a:hover{outline:0}b{font-weight:700}img{border:0}button,input{margin:0;font:inherit;color:inherit}button{overflow:visible;text-transform:none;-webkit-appearance:button;cursor:pointer}button::-moz-focus-inner,input::-moz-focus-inner{padding:0;border:0}input{line-height:normal}@media print{*,:before,:after{color:#000!important;text-shadow:none!important;background:transparent!important;box-shadow:none!important}a,a:visited{text-decoration:underline}a[href]:after{content:" (" attr(href) ")"}a[href^="#"]:after{content:""}img{page-break-inside:avoid;max-width:100%!important}p{orphans:3;widows:3}.navbar{display:none}}*{box-sizing:border-box}:before,:after{box-sizing:border-box}html{font-size:10px;-webkit-tap-highlight-color:rgba(0,0,0,0)}body{font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;line-height:1.42857143;color:#333;background-color:#fff}input,button{font-family:inherit;font-size:inherit;line-height:inherit}a{color:#337ab7;text-decoration:none}a:hover,a:focus{color:#23527c;text-decoration:underline}a:focus{outline:thin dotted;outline:5px auto -webkit-focus-ring-color;outline-offset:-2px}img{vertical-align:middle}.sr-only{position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0,0,0,0);border:0}p{margin:0 0 10px}ul{margin-top:0;margin-bottom:10px}ul ul{margin-bottom:0}.container{padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}@media (min-width: 768px){.container{width:750px}}@media (min-width: 992px){.container{width:970px}}@media (min-width: 1200px){.container{width:1170px}}.col-md-3,.col-sm-4,.col-xs-6{position:relative;min-height:1px;padding-right:15px;padding-left:15px}.col-xs-6{float:left;width:50%}@media (min-width: 768px){.col-sm-4{float:left;width:33.33333333%}}@media (min-width: 992px){.col-md-3{float:left;width:25%}}.form-control{display:block;width:100%;height:34px;padding:6px 12px;font-size:14px;line-height:1.42857143;color:#555;background-color:#fff;background-image:none;border:1px solid #ccc;border-radius:4px;box-shadow:inset 0 1px 1px rgba(0,0,0,.075);-webkit-transition:border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;-webkit-transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s;transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s}.form-control:focus{border-color:#66afe9;outline:0;box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6)}.form-control::-moz-placeholder{color:#999;opacity:1}.form-control:-ms-input-placeholder{color:#999}.btn{display:inline-block;padding:6px 12px;margin-bottom:0;font-size:14px;font-weight:400;line-height:1.42857143;text-align:center;white-space:nowrap;vertical-align:middle;-ms-touch-action:manipulation;touch-action:manipulation;cursor:pointer;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;background-image:none;border:1px solid transparent;border-radius:4px}.btn:focus,.btn:active:focus{outline:thin dotted;outline:5px auto -webkit-focus-ring-color;outline-offset:-2px}.btn:hover,.btn:focus{color:#333;text-decoration:none}.btn:active{background-image:none;outline:0;box-shadow:inset 0 3px 5px rgba(0,0,0,.125)}.btn-default{color:#333;background-color:#fff;border-color:#ccc}.btn-default:focus{color:#333;background-color:#e6e6e6;border-color:#8c8c8c}.btn-default:hover{color:#333;background-color:#e6e6e6;border-color:#adadad}.btn-default:active{color:#333;background-color:#e6e6e6;border-color:#adadad}.btn-default:active:hover,.btn-default:active:focus{color:#333;background-color:#d4d4d4;border-color:#8c8c8c}.btn-default:active{background-image:none}.fade{opacity:0;-webkit-transition:opacity .15s linear;transition:opacity .15s linear}.fade.in{opacity:1}.collapse{display:none}.collapse.in{display:block}.collapsing{position:relative;height:0;overflow:hidden;-webkit-transition-timing-function:ease;transition-timing-function:ease;-webkit-transition-duration:.35s;transition-duration:.35s;-webkit-transition-property:height,visibility;transition-property:height,visibility}.caret{display:inline-block;width:0;height:0;margin-left:2px;vertical-align:middle;border-top:4px dashed;border-top:4px solid \9;border-right:4px solid transparent;border-left:4px solid transparent}.dropdown{position:relative}.dropdown-toggle:focus{outline:0}.dropdown-menu{position:absolute;top:100%;left:0;z-index:1000;display:none;float:left;min-width:160px;padding:5px 0;margin:2px 0 0;font-size:14px;text-align:left;list-style:none;background-color:#fff;background-clip:padding-box;border:1px solid #ccc;border:1px solid rgba(0,0,0,.15);border-radius:4px;box-shadow:0 6px 12px rgba(0,0,0,.175)}.dropdown-menu > li > a{display:block;padding:3px 20px;clear:both;font-weight:400;line-height:1.42857143;color:#333;white-space:nowrap}.dropdown-menu > li > a:hover,.dropdown-menu > li > a:focus{color:#262626;text-decoration:none;background-color:#f5f5f5}@media (min-width: 768px){.navbar-right .dropdown-menu{right:0;left:auto}}.input-group{position:relative;display:table;border-collapse:separate}.input-group .form-control{position:relative;z-index:2;float:left;width:100%;margin-bottom:0}.input-group-btn,.input-group .form-control{display:table-cell}.input-group-btn{width:1%;white-space:nowrap;vertical-align:middle}.input-group .form-control:first-child{border-top-right-radius:0;border-bottom-right-radius:0}.input-group-btn:last-child > .btn{border-top-left-radius:0;border-bottom-left-radius:0}.input-group-btn{position:relative;font-size:0;white-space:nowrap}.input-group-btn > .btn{position:relative}.input-group-btn > .btn:hover,.input-group-btn > .btn:focus,.input-group-btn > .btn:active{z-index:2}.input-group-btn:last-child > .btn{z-index:2;margin-left:-1px}.nav{padding-left:0;margin-bottom:0;list-style:none}.nav > li{position:relative;display:block}.nav > li > a{position:relative;display:block;padding:10px 15px}.nav > li > a:hover,.nav > li > a:focus{text-decoration:none;background-color:#eee}.navbar{position:relative;min-height:50px;margin-bottom:20px;border:1px solid transparent}@media (min-width: 768px){.navbar{border-radius:4px}}@media (min-width: 768px){.navbar-header{float:left}}.navbar-collapse{padding-right:15px;padding-left:15px;overflow-x:visible;-webkit-overflow-scrolling:touch;border-top:1px solid transparent;box-shadow:inset 0 1px 0 rgba(255,255,255,.1)}@media (min-width: 768px){.navbar-collapse{width:auto;border-top:0;box-shadow:none}.navbar-collapse.collapse{display:block!important;height:auto!important;padding-bottom:0;overflow:visible!important}}.container > .navbar-header,.container > .navbar-collapse{margin-right:-15px;margin-left:-15px}@media (min-width: 768px){.container > .navbar-header,.container > .navbar-collapse{margin-right:0;margin-left:0}}.navbar-brand{float:left;height:50px;padding:15px;font-size:18px;line-height:20px}.navbar-brand:hover,.navbar-brand:focus{text-decoration:none}.navbar-brand > img{display:block}.navbar-toggle{position:relative;float:right;padding:9px 10px;margin-top:8px;margin-right:15px;margin-bottom:8px;background-color:transparent;background-image:none;border:1px solid transparent;border-radius:4px}.navbar-toggle:focus{outline:0}.navbar-toggle .icon-bar{display:block;width:22px;height:2px;border-radius:1px}.navbar-toggle .icon-bar + .icon-bar{margin-top:4px}@media (min-width: 768px){.navbar-toggle{display:none}}.navbar-nav{margin:7.5px -15px}.navbar-nav > li > a{padding-top:10px;padding-bottom:10px;line-height:20px}@media (min-width: 768px){.navbar-nav{float:left;margin:0}.navbar-nav > li{float:left}.navbar-nav > li > a{padding-top:15px;padding-bottom:15px}}.navbar-form{padding:10px 15px;border-top:1px solid transparent;border-bottom:1px solid transparent;box-shadow:inset 0 1px 0 rgba(255,255,255,.1),0 1px 0 rgba(255,255,255,.1);margin:8px -15px}@media (min-width: 768px){.navbar-form .form-control{display:inline-block;width:auto;vertical-align:middle}.navbar-form .input-group{display:inline-table;vertical-align:middle}.navbar-form .input-group .input-group-btn,.navbar-form .input-group .form-control{width:auto}.navbar-form .input-group > .form-control{width:100%}}@media (min-width: 768px){.navbar-form{width:auto;padding-top:0;padding-bottom:0;margin-right:0;margin-left:0;border:0;box-shadow:none}}.navbar-nav > li > .dropdown-menu{margin-top:0;border-top-left-radius:0;border-top-right-radius:0}@media (min-width: 768px){.navbar-right{float:right!important;margin-right:-15px}}.navbar-default{background-color:#f8f8f8;border-color:#e7e7e7}.navbar-default .navbar-brand{color:#777}.navbar-default .navbar-brand:hover,.navbar-default .navbar-brand:focus{color:#5e5e5e;background-color:transparent}.navbar-default .navbar-nav > li > a{color:#777}.navbar-default .navbar-nav > li > a:hover,.navbar-default .navbar-nav > li > a:focus{color:#333;background-color:transparent}.navbar-default .navbar-nav > .active > a,.navbar-default .navbar-nav > .active > a:hover,.navbar-default .navbar-nav > .active > a:focus{color:#555;background-color:#e7e7e7}.navbar-default .navbar-toggle{border-color:#ddd}.navbar-default .navbar-toggle:hover,.navbar-default .navbar-toggle:focus{background-color:#ddd}.navbar-default .navbar-toggle .icon-bar{background-color:#888}.navbar-default .navbar-collapse,.navbar-default .navbar-form{border-color:#e7e7e7}.alert-danger{color:#a94442;background-color:#f2dede;border-color:#ebccd1}.container:before,.container:after,.nav:before,.nav:after,.navbar:before,.navbar:after,.navbar-header:before,.navbar-header:after,.navbar-collapse:before,.navbar-collapse:after{display:table;content:" "}.container:after,.nav:after,.navbar:after,.navbar-header:after,.navbar-collapse:after{clear:both}@media (max-width: 767px){.hidden-xs{display:none!important}}@media (min-width: 768px) and (max-width: 991px){.hidden-sm{display:none!important}}@media (min-width: 992px) and (max-width: 1199px){.hidden-md{display:none!important}}@media (min-width: 1200px){.hidden-lg{display:none!important}}@media (min-width:1200px){.container{width:1170px}input{margin-left:0}}@media (min-width:768px) and (max-width:979px){.container{width:724px}input{margin-left:0}}@media (max-width:767px){body{padding-right:20px;padding-left:20px}.container{width:auto}}@media (max-width:979px){body{padding-top:0}.navbar .container{width:auto;padding:0}}@media screen and (min-width: 750px){.fluid_wigth{max-width:1024px;width:75%;margin:0 auto}}@media screen and (min-width: 1260px){#nav>li>a{padding:10px 25px!important}}@media screen and (max-width: 700px){#titleTxt{font-size:22px!important;line-height:35px!important;overflow:hidden}#inText1{font-size:16px!important;line-height:28px!important}}@media screen and (max-width: 600px){.content_part1{width:100%!important;background:#f7f7f7!important}.row_text1{padding:25px 20px 50px!important}.row_text1,.Img_block,.content_part1_center{text-align:center;width:100%!important;max-width:100%!important}#img_bl1{margin:10px 5px!important}#titleTxt{font-size:22px!important;line-height:35px!important;overflow:hidden}#inText1{font-size:16px!important;line-height:28px!important}}html,body,div,span,p,a,img,b,i,ul,li,form,nav,section{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline}nav,section{display:block}body{line-height:1}ul{list-style:none}html,body{height:100%;font-family:'PT Sans',sans-serif}.wrapper{margin:0 auto;max-width:1024px;position:relative}.top{background-color:#123d72;position:relative}.logo{display:block;position:relative}a.navbar-brand:before{display:block;position:absolute;top:0;content:"";left:-170px;background:url(../../../web/images/bg_header.jpg) no-repeat;width:298px;height:108px}.navbar{border:none;background-color:#fff}.navbar-brand{padding:20px}.phone_top:before{content:"";height:30px;width:30px;background:url(../../../web/images/phone.png) no-repeat;border-radius:100%;background-color:#0c5596;position:absolute;top:-2px;left:-45px;background-position:center}.opened{display:block;text-align:right;font-size:9px;letter-spacing:1.8px;text-transform:uppercase}.phone_top{display:inline-block;font-weight:700;font-size:28px;position:relative}#topmenu .nav > li > a{padding:30px 25px}#nav > li > a,#nav-min > li > a{padding:10px 15px;color:#113d73}#nav > li:hover > a,#nav-min > li:hover > a{color:#008ee6}#nav .active > a,#nav-min .active > a{background:#fff}#nav li,#nav-min li{border-bottom:2px solid #fff}#nav li.active,#nav-min li.active{-webkit-transition-property:border-bottom-color,color;transition-property:border-bottom-color,color;-webkit-transition-duration:2.5s;transition-duration:2.5s;-webkit-transition-delay:0.2s,.3s;transition-delay:0.2s,.3s;-webkit-transition-timing-function:cubic-bezier(0.1,0.8,0.5,2),ease-in;transition-timing-function:cubic-bezier(0.1,0.8,0.5,2),ease-in;border-bottom:2px solid #113d73}#nav-min{float:none;margin:0 auto;display:table}.nav{margin-bottom:0;text-align:center;vertical-align:middle}.navbar-form .btn,.navbar-form .form-control{border-radius:34px}.top_menu{box-sizing:border-box;position:fixed;right:0;left:0;z-index:1030;border-bottom:1px solid #d1d1d1;box-shadow:0 4px 6px rgba(0,0,0,0.2)}.content_beg{padding-top:220px;position:relative}.content_part1{width:100%;background:#f7f7f7;background:url(../../../web/images/banner.jpg) 45% 0 rgba(0,0,0,0);background-size:cover}.content_part1_center{max-width:1024px;width:50%;margin:0 auto}@media screen and (min-width: 10px){.content_beg{padding-top:153px}}.mainmenu{background:#fff}#topmenu.navbar-default .navbar-brand{color:rgba(119,119,119,1);height:108px}#topmenu.navbar-default{font-size:14px;background-color:rgba(18,61,114,1);border-bottom-width:1px}#topmenu.navbar-default .navbar-nav>li>a{color:rgba(255,255,255,1);background-color:rgba(18,61,114,1)}#topmenu.navbar-default .navbar-nav>li>a:hover{color:rgba(255,255,255,1);background-color:rgba(18,61,114,1)}#topmenu.navbar-default .navbar-toggle{border-color:#123d72;display:none}#topmenu.navbar-default .navbar-toggle:hover,#topmenu.navbar-default .navbar-toggle:focus{background-color:#123d72}#topmenu.navbar-default .navbar-toggle .icon-bar{background-color:#123d72}#topmenu.navbar-default .navbar-toggle:hover .icon-bar,#topmenu.navbar-default .navbar-toggle:focus .icon-bar{background-color:#123d72}#dropmenu > .dropdown{margin-top:10px}.navbar{min-height:40px;margin-bottom:0}@media (min-width: 1024px){.navbar-right{display:block!important}}@media (max-width: 1024px){#dropmenu > .dropdown{display:none!important}#input-grp{width:75%!important}}.Img_block{padding:2px 0;position:relative;margin:0 auto;width:81.25%;position:relative}.Img_block:after{content:"";position:absolute;bottom:0;left:0;width:100%;height:2px}#img_bl1{margin:0 0 0 50%;position:relative}.row_text1{width:100%;max-width:350px;padding:25px 0 50px 20px}#titleTxt{font-weight:700;font-size:32px;line-height:45px;text-transform:uppercase;color:#113D73}#inText1{margin-top:7px;font-size:24px;line-height:32px;letter-spacing:-.28px;color:#113D73}.content_part2_title{border-bottom:1px solid #d1d1d1;box-shadow:0 4px 6px rgba(0,0,0,0.1);z-index:999;position:relative;color:#113d73;padding-bottom:35px}.block2_title{display:block;font-size:24px;line-height:38px;letter-spacing:-.3px;color:#113D73;text-align:center;max-width:900px;margin:70px auto}.block2_title:after{content:"";border-bottom:3px solid #09f;border-radius:10%;position:absolute;width:90px;margin-top:35px;margin-left:-45px;text-align:center}</style> -->
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

            // $searchform = '<form class="navbar-form" role="search" id="search-form">
            //     <div class="input-group" id = "input-grp">
            //         <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
            //         <div class="input-group-btn" >
            //             <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            //         </div>
            //     </div>
            //     </form>';

             $searchform = '  <form action="" class="search-form">
             <div class="form-group has-feedback">
                <label for="search" class="sr-only">Поиск</label>
                <input type="text" class="form-control" name="search" id="search" placeholder="Поиск">
                <span class="glyphicon glyphicon-search form-control-feedback"></span>
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
            'label' => '<a href = "#RU"><span> RU </span></a>' . '<a href = "#UA"> <span> UA </span></a>' . '<a href = "#ENG"> <span> ENG </span></a>',
            'url' => false,
            'visible' => true,
            'options' => ['class' => 'langSelect']
            ],
            ],
            ]); 
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav', 'id'=>'nav-test'],
            'items' => [
            '<li class="active"><a href="#home">О ДМС</a></li>',
            '<li><a href="#simple">Простые</a></li>',
            '<li><a href="#privat">Индивидуальные </a></li>',
            '<li><a href="#family">Семейные </a></li>',
            '<li><a href="#other">Нестандартные </a></li>',
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
                ],
                ]);
            NavBar::end();
            ?>
        </div>
        <div class="hidden-sm hidden-xs">
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
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    k rel="stylesh<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!--[if lte IE 8]><script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script><![endif]-->
    <!--[if gt IE 8]><!--><script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script><!--<![endif]-->
    <link href='https://fonts.googleapis.com/css?family=PT+Sans&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="web/css/bootstrap.css">
    <lineet" href="web/css/concat/bundle.css">
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

<?php
/**
 * @package    haraka
 * @author     Brian Teeman
 * @copyright  (C) 2016 - 2017 - Brian Teeman
 * @license    GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

defined('_JEXEC') or die;
?>

<!DOCTYPE html>
<!--[if lt IE 7 ]>
<html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>
<html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>
<html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>
<html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" lang="en"><!--<![endif]-->
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Greenkey studio-school :-)</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
          content="Школа-студия Greenkey: программирование, создание/разработка сайтов и программ, дизайн, реклама, рекламные ролики. Обслуживание компьютеров для физлиц и организаций, хостинг и администрирование сайтов.
          Компьютерные курсы для детей и взрослых. Светодиодные уличные экраны. Полиграфическая продукция, печать."/>
    <meta name="keywords" content="портфолио, web дизайн портфолио, сайт визитка, web дизайн, web дизайн корпоративных сайтов, лучший web дизайн, web дизайн услуги, html, дизайн web страниц,
    разработка фирменного стиля, разработка корпоративного стиля, анимация и дизайн, создание роликов, рекламных баннеров, рекламные ролики, видеоролик, цена ролик сайт дизайн, виртуальный тур,
    создание виртуального 3d тура, заказать виртуальный тур, виртуальный тур недорого, виртуальная панорама, Малоярославец, Обнинск, Жуков, Боровск, Балабаново, Калужская область,
    создание корпоративного сайта, создание мобильного сайта, создание web сайта, сделать сайт, сделать сайт-визитку, сколько стоит создание сайта, размещение сайта, разработка сайта студия,
    создание сайта компании, обслуживание сайта, восстановить сайт,  редизайн сайта логотип баннер, редизайн, редизайн верстка, web design, design studio, web site design, website design,
    ecommerce web site design, professional web design, web design company, raster design, web page design, logo design, 3d design, создать логотип, разработать логотип, нарисовать логотип,
    фирменный стиль, корпоративный стиль, стильный дизайн, заказать сайт, где заказать сайт, заказать сайт портфолио, хочу заказать сайт, дешево заказать сайт, сделать сайто недорого,
    заказать баннер, хостинг, создание сайтов, реклама, услуги, обслуживание компьютеров, обслуживание компьютеров в организации, компьютерная помощь, удаление вирусов, восстановление систем,
    ремонт компьютеров, сломался компьютер, обучение работе на компьютере, компьютерные курсы, компьютерные курсы для детей, бесплатные компьютерные курсы, компьютерные курсы для взрослых,
    светодиодные экраны, реклама на светодиодных экранах, уличные светодиодные экраны, купить светодиодный экран"/>
    <meta name="author" content="Codrops"/>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
          integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

    <!-- Favicons -->
    <link href="/images/logo/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon"/>

    <style>
        body, div, dl, dt, dd, ul, ol, li, h1, h2, h3, h4, h5, h6, pre, code, form, fieldset, legend, input, textarea, p, blockquote, th, td {
            margin: 0;
            padding: 0;
            font-family: "Open Sans", Helvetica, Arial, sans-serif;
        }

        body {
            height: 100%;
        }

        .cf {
            float: none;
            clear: both;
        }

        ol, ul {
            list-style: none;
        }

        .cb-slideshow,
        .cb-slideshow:after {
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0px;
            left: 0px;
            z-index: 0;
        }

        .cb-slideshow:after {
            content: '';
            background: transparent url(../images/pattern.png) repeat top left;
        }

        .cb-slideshow li span {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0px;
            left: 0px;
            color: transparent;
            background-size: cover;
            background-position: 50% 50%;
            background-repeat: none;
            opacity: 0;
            z-index: 0;
            -webkit-backface-visibility: hidden;
            -webkit-animation: imageAnimation 36s linear infinite 0s;
            -moz-animation: imageAnimation 36s linear infinite 0s;
            -o-animation: imageAnimation 36s linear infinite 0s;
            -ms-animation: imageAnimation 36s linear infinite 0s;
            animation: imageAnimation 36s linear infinite 0s;
        }

        .cb-slideshow li:nth-child(1) span {
            background-image: url(/images/counter/6.jpg)
        }

        .cb-slideshow li:nth-child(2) span {
            background-image: url(/images/counter/5.jpg);
            -webkit-animation-delay: 6s;
            -moz-animation-delay: 6s;
            -o-animation-delay: 6s;
            -ms-animation-delay: 6s;
            animation-delay: 6s;
        }

        .cb-slideshow li:nth-child(3) span {
            background-image: url(/images/counter/4.jpg);
            -webkit-animation-delay: 12s;
            -moz-animation-delay: 12s;
            -o-animation-delay: 12s;
            -ms-animation-delay: 12s;
            animation-delay: 12s;
        }

        .cb-slideshow li:nth-child(4) span {
            background-image: url(/images/counter/3.jpg);
            -webkit-animation-delay: 18s;
            -moz-animation-delay: 18s;
            -o-animation-delay: 18s;
            -ms-animation-delay: 18s;
            animation-delay: 18s;
        }

        .cb-slideshow li:nth-child(5) span {
            background-image: url(/images/counter/2.jpg);
            -webkit-animation-delay: 24s;
            -moz-animation-delay: 24s;
            -o-animation-delay: 24s;
            -ms-animation-delay: 24s;
            animation-delay: 24s;
        }

        .cb-slideshow li:nth-child(6) span {
            background-image: url(/images/counter/1.jpg);
            -webkit-animation-delay: 30s;
            -moz-animation-delay: 30s;
            -o-animation-delay: 30s;
            -ms-animation-delay: 30s;
            animation-delay: 30s;
        }

        .cb-slideshow li:nth-child(7) span {
            background-image: url(/images/counter/7.jpg);
            -webkit-animation-delay: 36s;
            -moz-animation-delay: 36s;
            -o-animation-delay: 36s;
            -ms-animation-delay: 36s;
            animation-delay: 36s;
        }

        .cb-slideshow li:nth-child(8) span {
            background-image: url(/images/counter/8.jpg);
            -webkit-animation-delay: 42s;
            -moz-animation-delay: 42s;
            -o-animation-delay: 42s;
            -ms-animation-delay: 42s;
            animation-delay: 42s;
        }

        .cb-slideshow li:nth-child(9) span {
            background-image: url(/images/counter/9.jpg);
            -webkit-animation-delay: 48s;
            -moz-animation-delay: 48s;
            -o-animation-delay: 48s;
            -ms-animation-delay: 48s;
            animation-delay: 48s;
        }

        .cb-slideshow li:nth-child(10) span {
            background-image: url(/images/counter/13.jpg);
            -webkit-animation-delay: 54s;
            -moz-animation-delay: 54s;
            -o-animation-delay: 54s;
            -ms-animation-delay: 54s;
            animation-delay: 54s;
        }

        @-webkit-keyframes imageAnimation {
            0% {
                opacity: 0;
                -webkit-animation-timing-function: ease-in;
            }
            8% {
                opacity: 1;
                -webkit-transform: scale(1.05);
                -webkit-animation-timing-function: ease-out;
            }
            17% {
                opacity: 1;
                -webkit-transform: scale(1.1) rotate(3deg);
            }
            25% {
                opacity: 0;
                -webkit-transform: scale(1.15) rotate(4deg);
            }
            100% {
                opacity: 0
            }
        }

        @-moz-keyframes imageAnimation {
            0% {
                opacity: 0;
                -moz-animation-timing-function: ease-in;
            }
            8% {
                opacity: 1;
                -moz-transform: scale(1.05);
                -moz-animation-timing-function: ease-out;
            }
            17% {
                opacity: 1;
                -moz-transform: scale(1.1) rotate(3deg);
            }
            25% {
                opacity: 0;
                -moz-transform: scale(1.15) rotate(4deg);
            }
            100% {
                opacity: 0
            }
        }

        @-o-keyframes imageAnimation {
            0% {
                opacity: 0;
                -o-animation-timing-function: ease-in;
            }
            8% {
                opacity: 1;
                -o-transform: scale(1.05);
                -o-animation-timing-function: ease-out;
            }
            17% {
                opacity: 1;
                -o-transform: scale(1.1) rotate(3deg);
            }
            25% {
                opacity: 0;
                -o-transform: scale(1.15) rotate(4deg);
            }
            100% {
                opacity: 0
            }
        }

        @-ms-keyframes imageAnimation {
            0% {
                opacity: 0;
                -ms-animation-timing-function: ease-in;
            }
            8% {
                opacity: 1;
                -ms-transform: scale(1.05);
                -ms-animation-timing-function: ease-out;
            }
            17% {
                opacity: 1;
                -ms-transform: scale(1.1) rotate(3deg);
            }
            25% {
                opacity: 0;
                -ms-transform: scale(1.15) rotate(4deg);
            }
            100% {
                opacity: 0
            }
        }

        @keyframes imageAnimation {
            0% {
                opacity: 0;
                animation-timing-function: ease-in;
            }
            8% {
                opacity: 1;
                transform: scale(1.05);
                animation-timing-function: ease-out;
            }
            17% {
                opacity: 1;
                transform: scale(1.1) rotate(3deg);
            }
            25% {
                opacity: 0;
                transform: scale(1.15) rotate(4deg);
            }
            100% {
                opacity: 0
            }
        }

        /* Show at least something when animations not supported */
        .no-cssanimations .cb-slideshow li span {
            opacity: 1;
        }

        #counter {
            width: 100%;
            padding: 0;
            margin: 1.2em 0 0 0;
            z-index: 100;
            color: #fff;
        / / position: absolute;
        }

        .countdown_section {
            color: #fff;
            display: inline-block;
            text-align: center;
            width: 24%;
            box-sizing: border-box;
            font-size: .938em;
            text-transform: lowercase;
            font-style: italic;
            padding: 1.8em 0 1.2em 0;
            margin: 0;
            border-top: 2px solid rgba(255, 255, 255, .2);
            border-bottom: 2px solid rgba(255, 255, 255, .2)
        }

        .countdown_section:first-child {
            border-left: 0
        }

        .countdown_amount {
            color: #fff;
            display: block;
            font-size: 3.33em;
            font-weight: 700;
            font-style: normal;
            line-height: .75em
        }

        @media only screen and (max-width: 1024px) {
            body {
                font-size: 90%
            }

            #rc-connect {
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                width: 100%;
                height: 100%;
            }
        }

        @media only screen and (max-width: 768px) {
            #counter {
                width: 90%;
                padding: 0;
                margin: 1.5em 0 0 0;
                float: left
            }

            body {
                font-size: 80%
            }
        }

        .slide__content {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1000;
            overflow: hidden;
            -webkit-transition: all .4s;
            transition: all .4s;
        }

        .slide__overlay {
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 100%;
            transition: opacity 0.2s 0.5s, -webkit-transform 0.5s 0.5s;
            transition: transform 0.5s 0.5s, opacity 0.2s 0.5s;
            transition: transform 0.5s 0.5s, opacity 0.2s 0.5s, -webkit-transform 0.5s 0.5s;
            will-change: transform, opacity;
        }

        @media (max-width: 991px) {
            .slide__overlay {
                display: none;
            }
        }

        .slide__overlay path {
            opacity: 0.6;
        }

        .slide__text {
            position: relative;
            width: 30%;
            min-width: 350px;
            top: 48%;
            left: 5%;
            color: #fff;
            font-size: .8em;
            transition: opacity 0.5s 0.8s, -webkit-transform 0.5s 0.8s;
            transition: transform 0.5s 0.8s, opacity 0.5s 0.8s;
            transition: transform 0.5s 0.8s, opacity 0.5s 0.8s, -webkit-transform 0.5s 0.8s;
            will-change: transform, opacity;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        @media (max-width: 991px) {
            .slide__text {
                position: absolute;
                left: 0;
                top: auto;
                bottom: 0;
                width: 100%;
                min-width: 250px;
                height: 280px;
                text-align: left;
                -webkit-transform: translateY(0);
                transform: translateY(0);
                transition: opacity 0.5s 0.5s, -webkit-transform 0.5s 0.5s;
                transition: transform 0.5s 0.5s, opacity 0.5s 0.5s;
                transition: transform 0.5s 0.5s, opacity 0.5s 0.5s, -webkit-transform 0.5s 0.5s;
                padding: 0 1rem;
                background: rgba(0, 0, 0, 0.6);
            }
        }

        .slide__text-desc {
            font-size: 1em;
            margin: .5em 0;
        }

        .slide__text-link {
            z-index: 5;
            width: 60%;
            display: block;
            position: relative;
            padding: 0.5rem;
            cursor: pointer;
            font-family: "Open Sans", Helvetica, Arial, sans-serif;
            font-size: 1.2rem;
            color: white;
            text-decoration: none;
            -webkit-perspective: 1000px;
            perspective: 1000px;
        }

        @media (max-width: 991px) {
            .slide__text-link {
                width: auto;
                float: left;
                font-size: .8rem;
            }
        }

        .slide__text-link:before {
            z-index: -1;
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #6d9116;
            -webkit-transform-origin: 50% 100%;
            transform-origin: 50% 100%;
            -webkit-transform: rotateX(-85deg);
            transform: rotateX(-85deg);
            transition: -webkit-transform 0.3s;
            transition: transform 0.3s;
            transition: transform 0.3s, -webkit-transform 0.3s;
            will-change: transform;
        }

        .slide__text-link:hover:before {
            -webkit-transform: rotateX(0);
            transform: rotateX(0);
        }

        .logo {
            height: 100px;
        }

        @media (max-width: 991px) {
            .logo {
                height: 80px;
                float: left;
                margin: 10px;
            }

            .slide__text h2 {
                margin-top: 1em;
            }

            .slide__text br {
                float: none;
                clear: both;
            }
        }

        .social_links {
            position: absolute;
            top: 10px;
            right: 10px;
            z-index: 2000;
        }

        .social_links li {
            display: block;
            float: right;
        }

        .social_links li a {
            display: block;
            padding: 4px 6px 6px 6px;
            margin: 5px;
            color: white;
            width: 30px;
            height: 32px;
            border: 1px solid black;
            background-color: black;
            opacity: .6;
            border-radius: 25px;
            font-size: 24px;
            text-align: center;
            transition: all 0.5s;
        }

        .social_links li a.vk:hover {
            background-color: #4a76a8;
            border-color: #4a76a8;
        }

        .social_links li a.tg:hover {
            background-color: #36aee2;
            border-color: #36aee2;
        }

        .social_links li a.vb:hover {
            background-color: #7b519d;
            border-color: #7b519d;
        }

        .social_links li a.wa:hover {
            background-color: #3cbc29;
            border-color: #3cbc29;
        }

        .social_links li a.sk:hover {
            background-color: #0078d7;
            border-color: #0078d7;
        }

        .social_links li a.fb:hover {
            background-color: #4867aa;
            border-color: #4867aa;
        }

        .social_links li a.ok:hover {
            background-color: #ee8208;
            border-color: #ee8208;
        }

        .social_links li a.tm:hover {
            background-color: #2196f3;
            border-color: #2196f3;
        }

        .social_links li a.gh:hover {
            background-color: #000;
            border-color: #000;
        }

        .social_links li a.bb:hover {
            background-color: #0052cc;
            border-color: #0052cc;
        }

        .social_links li a.uw:hover {
            background-color: #6fda44;
            border-color: #6fda44;
        }

        .social_links li a.go:hover {
            background-color: #dc4c41;
            border-color: #dc4c41;
        }

        .social_links li a.bi:hover {
            background-color: #fff;
            border-color: #fff;
            color: #0bbbef;
        }

        .social_links li a:hover {
            opacity: 1;
        }

        @media (max-width: 716px) {
            .social_links {
                max-width: 380px;
            }
        }

        @media (max-width: 400px) {

            .social_links li a {
                display: block;
                padding: 2px 3px 3px 3px;
                margin: 3px;
                color: white;
                width: 20px;
                height: 21px;
                border: 1px solid black;
                background-color: black;
                opacity: .6;
                border-radius: 205px;
                font-size: 16px;
                text-align: center;
                transition: all 0.5s;
            }
        }

        .counters {
            position: absolute;
            left: 3px;
            bottom: 0;
            witdh: 300px;
            height: 18px;
        }

        #map {
            position: absolute;
            z-index: 5000;
            left: 0px;
            top: 45%;
            width: 35px;
            height: 35px;
            padding: 4px 6px 6px 6px;
            border-bottom-right-radius: 8px;
            border-top-right-radius: 8px;
            background-color: white;
            color: #000;
            font-size: 16px;
        }

        .perspective {
            width: 100%;
            height: 100%;
        }

        /* Modal view */
        .perspective.modalview {
            position: fixed;
            -webkit-perspective: 1500px;
            perspective: 1500px;
        }

        /* Effect airbnb */
        .effect-airbnb .container {
            -webkit-transition: -webkit-transform 0.4s;
            transition: transform 0.4s;
            -webkit-transform-origin: 50% 50%;
            transform-origin: 50% 50%;
        }

        .effect-airbnb.animate .container {
            -webkit-transform: translateZ(-1500px) translateX(100%) rotateY(-85deg);
            transform: translateZ(-1500px) translateX(100%) rotateY(-85deg);
        }

        .effect-airbnb.animate .slide__content {
            left: -100%;
        }

        .no-csstransforms3d .effect-airbnb.animate .container {
            left: 75%;
        }

        #yandexmap {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
        }

    </style>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.min.js"></script>
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
</head>
<body id="page" class="perspective effect-airbnb">

<div id="yandexmap"></div>

<ul class="cb-slideshow container">
    <li><span>Image 01</span></li>
    <li><span>Image 02</span></li>
    <li><span>Image 03</span></li>
    <li><span>Image 04</span></li>
    <li><span>Image 05</span></li>
    <li><span>Image 06</span></li>
    <li><span>Image 07</span></li>
    <li><span>Image 08</span></li>
    <li><span>Image 09</span></li>
    <li><span>Image 10</span></li>
</ul>

<ul class="social_links">
    <li><a href="https://upwork.com" class="bb"><i class="fas fa-thumbs-up"></i></a></li>
    <li><a href="https://bitbucket.org/greenkeyschool/" class="bb"><i class="fab fa-bitbucket"></i></a></li>
    <li><a href="https://github.com/greenkey-m" class="gh"><i class="fab fa-github-alt"></i></a></li>
    <li><a href="https://templatemonster.com" class="tm"><i class="fab fa-optin-monster"></i></a></li>
    <li><a href="https://greenkey.bitrix24.ru" class="bi"><i class="far fa-clock"></i></a></li>
    <li><a href="https://plus.google.com/105646816264008898254" class="go"><i class="fab fa-google-plus-g"></i></a></li>
    <li><a href="https://ok.ru/group/53872013410478" class="ok"><i class="fab fa-odnoklassniki"></i></a></li>
    <li><a href="https://www.facebook.com/matt.ru.395" class="fb"><i class="fab fa-facebook-f"></i></a></li>
    <li><a href="skype: M_e_r_l_e" class="sk"><i class="fab fa-skype"></i></a></li>
    <li><a href="whatsapp://send?phone=79106005999" class="wa"><i class="fab fa-whatsapp"></i></a></li>
    <li><a href="viber://chat?+79106005999" class="vb"><i class="fab fa-viber"></i></a></li>
    <li><a href="http://t-do.ru/greenkeystudio" class="tg"><i class="fab fa-telegram-plane"></i></a></li>
    <li><a href="https://vk.com/greenkeystudio" class="vk"><i class="fab fa-vk"></i></a></li>
</ul>


<div class="slide__content">
    <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMidYMid slice">
        <path class="slide__overlay-path" d="M0,0 250,0 360,405 0,405"/>
    </svg>
    <div class="slide__text">
        <img class="logo" src="/images/logo/logo_full_small.png"/>
        <h2 class="slide__text-heading">В разработке!</h2>
        <h1 class="slide__text-desc">Студия "Greenkey", школа ИТ "Green School".</h1>
        <p>+7 (910) 6005-999, +7 (953) 3293-999</p>
        <p>info@greenkey.ru</p>
        <br/>
        <a class="slide__text-link" href="http://greenkey.rpce.ru/">Полиграфия!</a>
        <a class="slide__text-link" href="http://greenkey.freshdesk.com/">Техподдержка</a>
        <a class="slide__text-link" href="http://reg.greenkey.ru/">Регистрация доменов</a>
        <div class="cf"></div>
        <div id="counter" class="hasCountdown">
            <!-- javascript inserts the countdown here -->
        </div>
    </div>


    <div class="counters">
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-122190129-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }

            gtag('js', new Date());

            gtag('config', 'UA-122190129-1');
        </script>


        <!-- Yandex.Metrika informer -->
        <a href="https://metrika.yandex.ru/stat/?id=30842581&amp;from=informer"
           target="_blank" rel="nofollow"><img
                    src="https://informer.yandex.ru/informer/30842581/1_0_FFFFECFF_FFFFCCFF_0_pageviews"
                    style="width:80px; height:15px; border:0;" alt="Яндекс.Метрика"
                    title="Яндекс.Метрика: данные за сегодня (просмотры)" class="ym-advanced-informer"
                    data-cid="30842581" data-lang="ru"/></a>
        <!-- /Yandex.Metrika informer -->

        <!-- Yandex.Metrika counter -->
        <script type="text/javascript">
            (function (d, w, c) {
                (w[c] = w[c] || []).push(function () {
                    try {
                        w.yaCounter30842581 = new Ya.Metrika2({
                            id: 30842581,
                            clickmap: true,
                            trackLinks: true,
                            accurateTrackBounce: true,
                            webvisor: true
                        });
                    } catch (e) {
                    }
                });

                var n = d.getElementsByTagName("script")[0],
                    s = d.createElement("script"),
                    f = function () {
                        n.parentNode.insertBefore(s, n);
                    };
                s.type = "text/javascript";
                s.async = true;
                s.src = "https://mc.yandex.ru/metrika/tag.js";

                if (w.opera == "[object Opera]") {
                    d.addEventListener("DOMContentLoaded", f, false);
                } else {
                    f();
                }
            })(document, window, "yandex_metrika_callbacks2");
        </script>
        <noscript>
            <div><img src="https://mc.yandex.ru/watch/30842581" style="position:absolute; left:-9999px;" alt=""/></div>
        </noscript>
        <!-- /Yandex.Metrika counter -->

        <h1 style="font-size:18px; margin-top: 15px;">Школа-студия Greenkey: программирование, создание/разработка
            сайтов и программ, дизайн, реклама, рекламные ролики.
            Обслуживание компьютеров для физлиц и организаций, хостинг и администрирование сайтов. Компьютерные курсы
            для детей и взрослых. Светодиодные уличные экраны.
            Полиграфическая продукция, печать. Web дизайн портфолио, сайт визитка, web дизайн, web дизайн корпоративных
            сайтов, лучший web дизайн, web дизайн услуги,
            html, дизайн web страниц, разработка фирменного стиля, разработка корпоративного стиля, анимация и дизайн,
            создание роликов, рекламных баннеров, рекламные ролики, видеоролик, цена ролик сайт дизайн, виртуальный тур,
            создание виртуального 3d тура, заказать виртуальный тур, виртуальный тур недорого, виртуальная панорама,
            Малоярославец, Обнинск, Жуков, Боровск, Балабаново, Калужская область,
            создание корпоративного сайта, создание мобильного сайта, создание web сайта, сделать сайт, сделать
            сайт-визитку, сколько стоит создание сайта, размещение сайта, разработка сайта студия,
            создание сайта компании, обслуживание сайта, восстановить сайт, редизайн сайта логотип баннер, редизайн,
            редизайн верстка, web design, design studio, web site design, website design,
            ecommerce web site design, professional web design, web design company, raster design, web page design, logo
            design, 3d design, создать логотип, разработать логотип, нарисовать логотип,
            фирменный стиль, корпоративный стиль, стильный дизайн, заказать сайт, где заказать сайт, заказать сайт
            портфолио, хочу заказать сайт, дешево заказать сайт, сделать сайто недорого,
            заказать баннер, хостинг, создание сайтов, реклама, услуги, обслуживание компьютеров, обслуживание
            компьютеров в организации, компьютерная помощь, удаление вирусов, восстановление систем,
            ремонт компьютеров, сломался компьютер, обучение работе на компьютере, компьютерные курсы, компьютерные
            курсы для детей, бесплатные компьютерные курсы, компьютерные курсы для взрослых,
            светодиодные экраны, реклама на светодиодных экранах, уличные светодиодные экраны, купить светодиодный
            экран, вы хотите создать свой сайт, каталог, магазин в интернете? вам нужна реклама?</h1>

    </div>

    <!-- RedConnect -->
    <script id="rhlpscrtg" type="text/javascript" charset="utf-8" async="async"
            src="https://web.redhelper.ru/service/main.js?c=greenkey"></script>
    <div style="display: none"><a class="rc-copyright"
                                  href="http://redconnect.ru">Обратный звонок RedConnect</a></div>
    <!--/RedConnect -->

</div>

<button id="map"><i class="fas fa-map-marked-alt"></i></button>

<!--script at the bottom for the countdown -->
<?php if ($countdown == 1) : ?>
    <script>
        $('#counter').countdown('<?php echo $countdown_date; ?>')
            .on('update.countdown', function (event) {
                var $this = $(this).html(event.strftime(''
                    + '<span class="countdown_section"><span class="countdown_amount">%D</span><br> <?php echo JText::_('PLG_SYSTEM_HARAKA_COUNTDOWN_DAYS'); ?> </span> '
                    + '<span class="countdown_section"><span class="countdown_amount">%H</span><br> <?php echo JText::_('PLG_SYSTEM_HARAKA_COUNTDOWN_HRS'); ?> </span> '
                    + '<span class="countdown_section"><span class="countdown_amount">%M</span><br> <?php echo JText::_('PLG_SYSTEM_HARAKA_COUNTDOWN_MINS'); ?> </span> '
                    + '<span class="countdown_section"><span class="countdown_amount">%S</span><br> <?php echo JText::_('PLG_SYSTEM_HARAKA_COUNTDOWN_SEC'); ?> </span>'));
            });
    </script>
<?php endif; ?>

<script>
    $(document).ready(function () {
        $("#map").click(function () {
            $('.perspective').toggleClass("modalview").toggleClass("animate");
        })
    });

    ymaps.ready(init);
    function init(){
        // Создание карты.
        var myMap = new ymaps.Map("yandexmap", {
            center: [55.012363, 36.467184],
            zoom: 17
        });
        myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
            panoLayer: 'yandex#panorama',
            hintContent: 'Greenkey, школа-студия: ул. Кутузова 28, оф.4',
        }, {
            preset: 'islands#nightIcon',
            openEmptyBalloon: true,
            balloonPanelMaxMapArea: 0,

            iconLayout: 'default#image',
            iconImageHref: '/images/marker.png',
            iconImageSize: [44, 48],
            // Смещение левого верхнего угла иконки относительно
            // её "ножки" (точки привязки).
            iconImageOffset: [-22, -48]
        });


        // Функция, устанавливающая для метки макет содержимого ее балуна.
        function setBalloonContentLayout (placemark, panorama) {
            // Создание макета содержимого балуна.
            var BalloonContentLayout = ymaps.templateLayoutFactory.createClass(
                '<div id="panorama" style="width:256px;height:156px"></div>', {
                    // Переопределяем функцию build, чтобы при формировании макета
                    // создавать в нем плеер панорам.
                    build: function () {
                        // Сначала вызываем метод build родительского класса.
                        BalloonContentLayout.superclass.build.call(this);
                        // Добавляем плеер панорам в содержимое балуна.
                        this._openPanorama();
                    },
                    // Аналогично переопределяем функцию clear, чтобы удалять
                    // плеер панорам при удалении макета с карты.
                    clear: function () {
                        this._destroyPanoramaPlayer();
                        BalloonContentLayout.superclass.clear.call(this);
                    },
                    // Добавление плеера панорам.
                    _openPanorama: function () {
                        if (!this._panoramaPlayer) {
                            // Получаем контейнер, в котором будет размещаться наша панорама.
                            var el = this.getParentElement().querySelector('#panorama');
                            this._panoramaPlayer = new ymaps.panorama.Player(el, panorama, {
                                controls: ['panoramaName']
                            });
                        }
                    },
                    // Удаление плеера панорамы.
                    _destroyPanoramaPlayer: function () {
                        if (this._panoramaPlayer) {
                            this._panoramaPlayer.destroy();
                            this._panoramaPlayer = null;
                        }
                    }
                });
            // Устанавливаем созданный макет в опции метки.
            placemark.options.set('balloonContentLayout', BalloonContentLayout);
        }

        // В этой функции выполняем проверку на наличие панорамы в данной точке.
        // Если панорама нашлась, то устанавливаем для балуна макет с этой панорамой,
        // в противном случае задаем для балуна простое текстовое содержимое.
        function requestForPanorama (e) {
            var placemark = e.get('target'),
                // Координаты точки, для которой будем запрашивать панораму.
                coords = placemark.geometry.getCoordinates(),
                // Тип панорамы (воздушная или наземная).
                panoLayer = placemark.properties.get('panoLayer');

            placemark.properties.set('balloonContent', "Идет проверка на наличие панорамы...");

            // Запрашиваем объект панорамы.
            ymaps.panorama.locate(coords, {
                layer: panoLayer
            }).then(
                function (panoramas) {
                    if (panoramas.length) {
                        // Устанавливаем для балуна макет, содержащий найденную панораму.
                        setBalloonContentLayout(placemark, panoramas[0]);
                    } else {
                        // Если панорам не нашлось, задаем
                        // в содержимом балуна простой текст.
                        placemark.properties.set('balloonContent', "Для данной точки панорамы нет.");
                    }
                },
                function (err) {
                    placemark.properties.set('balloonContent',
                        "При попытке открыть панораму произошла ошибка: " + err.toString());
                }
            );
        }

        // Слушаем на метках событие 'balloonopen': как только балун будет впервые открыт,
        // выполняем проверку на наличие панорамы в данной точке и в случае успеха создаем
        // макет с найденной панорамой.
        // Событие открытия балуна будем слушать только один раз.
        myPlacemark.events.once('balloonopen', requestForPanorama);


        myMap.geoObjects.add(myPlacemark);
    }
</script>

</body>
</html>
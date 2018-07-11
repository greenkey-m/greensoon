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
    <title>Fullscreen Background Image Slideshow with CSS3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
          content="Fullscreen Background Image Slideshow with CSS3 - A Css-only fullscreen background image slideshow"/>
    <meta name="keywords" content="css3, css-only, fullscreen, background, slideshow, images, content"/>
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
            padding: 2em 0 1.5em 0;
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
        }

        .slide__overlay {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            min-height: 1000px;
            transition: opacity 0.2s 0.5s, -webkit-transform 0.5s 0.5s;
            transition: transform 0.5s 0.5s, opacity 0.2s 0.5s;
            transition: transform 0.5s 0.5s, opacity 0.2s 0.5s, -webkit-transform 0.5s 0.5s;
            will-change: transform, opacity;
            -webkit-transform: translate3d(-20%, 0, 0);
            transform: translate3d(-20%, 0, 0);
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
            padding: 6px 6px 6px 6px;
            margin: 5px;
            color: white;
            width: 30px;
            height: 30px;
            border: 1px solid black;
            background-color: black;
            opacity: .6;
            border-radius: 205px;
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

        .social_links li a:hover {
            opacity: 1;
        }

        @media (max-width: 605px) {
            .social_links {
                max-width: 350px;
            }
        }

         @media (max-width: 340px) {

            .social_links li a {
                display: block;
                padding: 3px 3px 3px 3px;
                margin: 3px;
                color: white;
                width: 20px;
                height: 20px;
                border: 1px solid black;
                background-color: black;
                opacity: .6;
                border-radius: 205px;
                font-size: 16px;
                text-align: center;
                transition: all 0.5s;
            }
        }

    </style>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.min.js"></script>
</head>
<body id="page">
<ul class="cb-slideshow">
    <li><span>Image 01</span></li>
    <li><span>Image 02</span></li>
    <li><span>Image 03</span></li>
    <li><span>Image 04</span></li>
    <li><span>Image 05</span></li>
    <li><span>Image 06</span></li>
</ul>

<ul class="social_links">
    <li><a href="https://upwork.com" class="bb"><i class="fas fa-thumbs-up"></i></a></li>
    <li><a href="https://bitbucket.org/greenkeyschool/" class="bb"><i class="fab fa-bitbucket"></i></a></li>
    <li><a href="https://github.com/greenkey-m" class="gh"><i class="fab fa-github-alt"></i></a></li>
    <li><a href="https://templatemonster.com" class="tm"><i class="fab fa-optin-monster"></i></a></li>
    <li><a href="https://plus.google.com/105646816264008898254" class="go"><i class="fab fa-google-plus-g"></i></a></li>
    <li><a href="https://ok.ru/group/53872013410478" class="ok"><i class="fab fa-odnoklassniki"></i></a></li>
    <li><a href="https://www.facebook.com/matt.ru.395" class="fb"><i class="fab fa-facebook-f"></i></a></li>
    <li><a href="skype: M_e_r_l_e" class="sk"><i class="fab fa-skype"></i></a></li>
    <li><a href="" class="wa"><i class="fab fa-whatsapp"></i></a></li>
    <li><a href="" class="vb"><i class="fab fa-viber"></i></a></li>
    <li><a href="" class="tg"><i class="fab fa-telegram-plane"></i></a></li>
    <li><a href="https://vk.com/greenkeystudio" class="vk"><i class="fab fa-vk"></i></a></li>
</ul>


<div class="slide__content">
    <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
        <path class="slide__overlay-path" d="M0,0 320,0 450,405 0,405"/>
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


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-122190129-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-122190129-1');
    </script>


    <!-- Yandex.Metrika informer -->
    <a href="https://metrika.yandex.ru/stat/?id=30842581&amp;from=informer"
       target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/30842581/1_0_FFFFECFF_FFFFCCFF_0_pageviews"
                                           style="width:80px; height:15px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры)" class="ym-advanced-informer" data-cid="30842581" data-lang="ru" /></a>
    <!-- /Yandex.Metrika informer -->

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function() {
                try {
                    w.yaCounter30842581 = new Ya.Metrika2({
                        id:30842581,
                        clickmap:true,
                        trackLinks:true,
                        accurateTrackBounce:true,
                        webvisor:true
                    });
                } catch(e) { }
            });

            var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () { n.parentNode.insertBefore(s, n); };
            s.type = "text/javascript";
            s.async = true;
            s.src = "https://mc.yandex.ru/metrika/tag.js";

            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else { f(); }
        })(document, window, "yandex_metrika_callbacks2");
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/30842581" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->


    <!-- RedConnect -->
    <script id="rhlpscrtg" type="text/javascript" charset="utf-8" async="async"
            src="https://web.redhelper.ru/service/main.js?c=greenkey"></script>
    <div style="display: none"><a class="rc-copyright"
                                  href="http://redconnect.ru">Обратный звонок RedConnect</a></div>
    <!--/RedConnect -->

</div>


<!--script at the bottom for the countdown -->
<?php if ($countdown == 1) : ?>
    <script>
        $('#counter').countdown('<?php echo $countdown_date; ?>')
            .on('update.countdown', function (event) {
                var $this = $(this).html(event.strftime(''
                    + '<span class="countdown_section"><span class="countdown_amount">%D</span><br> <?php echo JText::_('PLG_SYSTEM_HARAKA_COUNTDOWN_DAYS'); ?> </span> '
                    + '<span class="countdown_section"><span class="countdown_amount">%H</span><br> <?php echo JText::_('PLG_SYSTEM_HARAKA_COUNTDOWN_HRS'); ?> </span> '
                    + '<span class="countdown_section"><span class="countdown_amount">%M</span><br> <?php echo JText::_('PLG_SYSTEM_HARAKA_COUNTDOWN_MINS'); ?> </span> '
                    + '<span class="countdown_section"><span class="countdown_amount">%S</span><br> <?php echo JText::_('PLG_SYSTEM_HARAKA_COUNTDOWN_MINS'); ?> </span>'));
            });
    </script>
<?php endif; ?>

</body>
</html>
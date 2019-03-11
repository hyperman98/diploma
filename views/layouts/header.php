<!DOCTYPE html>
<html lang="en">
<head>
    <title>Главная</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" media="screen" href="/template/css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/template/css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/template/css/grid_12.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/template/css/slider.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/template/css/time.css">
    <!-- <link rel="stylesheet" href="/template/css/reset.css"> <!-- CSS reset -->
    <link href="/template/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="/template/css/modalwindow.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/template/css/demo.css">
    <script src="/template/js/jquery-1.7.min.js"></script>
    <script src="/template/js/jquery.easing.1.3.js"></script>
    <script src="/template/js/tms-0.3.js"></script>
    <script src="/template/js/tms-0.4.1.js"></script>
    <script src="/template/js/tms_presets.js"></script>
    <script src="/template/js/cufon-yui.js"></script>
    <script src="/template/js/FF-cash.js"></script>
    <script src="/template/js/confirm.js"></script>
    <script src="/template/js/politic.js"></script>
    <script src="/tempalte/js/FF-cash.js"></script>
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/template//template/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
   		<script type="text/javascript" src="/template//template//template/js/html5.js"></script>
    	<link rel="stylesheet" type="text/css" media="screen" href="/template/css/ie.css">
	<![endif]-->
</head>
<body>
<div class="main">
	<div class="bg-img"></div>
<!--==============================header=================================-->
<script>$(document).ready(function(){
var my_link = location.pathname;
$('.menu li a[href="'+my_link+'"]').parent().addClass('current');
});
</script>
    <header>
        <h1><a href="">Фитнес<strong>центр</strong></a></h1>
        <nav>
        	<div class="social-icons">
            	<a href="#" class="icon-2"></a>
            	<a href="#" class="icon-1"></a>
                    </div>
              <div class="userfunc">
              <a href="/cart" style="padding:5px; color:black;"><i class="fa fa-shopping-cart" style="margin-right:5px; margin-top:5px;"></i>Покупки в фитнес-баре(<span id="cart-count"><?php echo Cart::countItems(); ?></span>)</a>
              <?php if (User::isGuest()): ?>
              <a class="icon-3" href="/user/register/">Регистрация</a>
              <a class="icon-4" href="/user/login/">Вход</a>
            <?php else: ?>
              <a class="icon-3" href="/user/logout/">Выход</a>
              <a class="icon-4" href="/cabinet/">Личный кабинет</a>
            <?php endif; ?>
          </div>
            <ul class="menu">
                <li><a href="/">Главная</a></li>
                <li><a href="/about_us">О нас</a></li>
                <li><a href="/timetable">Расписание</a></li>
                <li><a href="/fitobar">Фитнес-бар</a></li>
                <li><a href="/comments">Отзывы</a></li>
                <li><a href="/gallery">Галерея</a></li>
                <li><a href="/contacts">Контакты</a></li>
            </ul>
        </nav>
    </header>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Администраторская панель</title>
	<link rel="stylesheet" href="/template/css/admin.css" type="text/css" media="all" />
	<script src="/template/js/jquery-1.7.min.js"></script>
</head>
<body>
<!-- Header -->
<div id="header">
	<div class="shell">
		<!-- Logo + Top Nav -->
		<div id="top">
			<h1><a style="color:black;" href="#">Администраторская панель</a></h1>
			<div id="top-navigation">
				Добро пожаловать <a href="#"><strong>Администратор</strong></a>
				<span>|</span>
				<a href="/">Перейти на сайт</a>
			</div>
		</div>
		<!-- End Logo + Top Nav -->

		<!-- Main Nav -->
		<div id="navigation">
			<script>
			$(document).ready(function(){
			var my_link = location.pathname;
			$('.navy li a[href="'+my_link+'"]').parent().addClass('active');
			});
			</script>
			<ul class="navy">
			    <li><a href="/admin/news" style="color:black;"><span>Управление новостями</span></a></li>
			    <li><a href="/admin/orders" style="color:black;"><span>Управление заказами услуг</span></a></li>
			    <li><a href="/admin/category" style="color:black;"><span>Управление услугами</span></a></li>
					<li><a href="/admin/products" style="color:black;"><span>Управление товарами</span></a></li>
					<li><a href="/admin/prorders" style="color:black;"><span>Управление заказами товаров</span></a></li>
			</ul>
		</div>
		<!-- End Main Nav -->
	</div>
</div>

<?php include_once ROOT . '/views/layouts/header.php'; ?>
<script>
$(document).ready(function(){
$('.gallery')._TMS({
  show:0,
  pauseOnHover:true,
  prevBu:'.prev',
  nextBu:'.next',
  playBu:'.play',
  duration:700,
  preset:'fade',
  pagination:$('.img-pags').uCarousel({show:4,shift:0}),
  pagNums:false,
  slideshow:7000,
  numStatus:true,
  banners:false,
  waitBannerAnimation:false,
  progressBar:false
})
 })
</script>
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100//template//template/imagesbanners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
   		<script type="text/javascript" src="js/html5.js"></script>
    	<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
	<![endif]-->
<!-- </head>
<body>
<div class="main">
	<div class="bg-img"></div>
<!--==============================header=================================-->
  <!--  <header>
        <h1><a href="index.html">Fitness <strong>Club.</strong></a></h1>
        <nav>
        	<div class="social-icons">
            	<a href="#" class="icon-2"></a>
            	<a href="#" class="icon-1"></a>
            </div>
            <ul class="menu">
                <li><a href="index.html">About</a></li>
                <li><a href="trainings.html">Trainings</a></li>
                <li><a href="timetable.html">Timetable</a></li>
                <li><a href="nutrition.html">Nutrition</a></li>
                <li class="current"><a href="gallery.html">Gallery</a></li>
                <li><a href="contacts.html">Contacts</a></li>
            </ul>
        </nav>
    </header>-->
<!--==============================content================================-->
<section id="content">
       <div class="container_12">
         <div class="grid_12">
           <div id="slide">
               <div class="gallery">
                   <ul class="items">
                       <li><img src="/template/images/gallery-big-1.jpg" alt=""></li>
                       <li><img src="/template/images/gallery-big-5.jpg" alt=""></li>
                       <li><img src="/template/images/gallery-big-2.jpg" alt=""></li>
                       <li><img src="/template/images/gallery-big-6.jpg" alt=""></li>
                       <li><img src="/template/images/gallery-big-3.jpg" alt=""></li>
                       <li><img src="/template/images/gallery-big-7.jpg" alt=""></li>
                       <li><img src="/template/images/gallery-big-4.jpg" alt=""></li>
                       <li><img src="/template/images/gallery-big-8.jpg" alt=""></li>
                   </ul>
               </div>
               <a href="#" class="prev"></a><a href="#" class="next"></a>
           </div>
         </div>
         <div class="grid_12 top-1">
           <div class="block-3 box-shadow">
             <h2 class="p4"><span class="color-1">Фото</span> галерея</h2>
                 <div class="pag">
                     <div class="img-pags">
                       <ul>
                         <li><a href="#"><span><img src="/template/images/gallery-1.jpg" alt=""></span></a></li>
                         <li><a href="#"><span><img src="/template/images/gallery-5.jpg" alt=""></span></a></li>
                         <li><a href="#"><span><img src="/template/images/gallery-2.jpg" alt=""></span></a></li>
                         <li><a href="#"><span><img src="/template/images/gallery-6.jpg" alt=""></span></a></li>
                         <li><a href="#"><span><img src="/template/images/gallery-3.jpg" alt=""></span></a></li>
                         <li><a href="#"><span><img src="/template/images/gallery-7.jpg" alt=""></span></a></li>
                         <li><a href="#"><span><img src="/template/images/gallery-4.jpg" alt=""></span></a></li>
                         <li><a href="#"><span><img src="/template/images/gallery-8.jpg" alt=""></span></a></li>
                       </ul>
                     </div>
                 </div>
           </div>
         </div>
         <div class="clear"></div>
       </div>
   </section>
<!--==============================footer=================================-->
<?php include_once ROOT . '/views/layouts/footer.php'; ?>

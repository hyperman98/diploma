<?php include_once(ROOT . '/views/layouts/header.php');?>
<!--==============================content================================-->
<script>
$(window).load(function(){
$('.slider')._TMS({
prevBu:'.prev',
nextBu:'.next',
pauseOnHover:true,
pagNums:false,
duration:800,
easing:'easeOutQuad',
preset:'Fade',
slideshow:7000,
pagination:'.pagination',
waitBannerAnimation:false,
banners:'fade'
  })
})
</script>
    <section id="content">
        <div class="container_12">
          <div class="grid_12">
            <div class="slider">
              <ul class="items">
                 <li><img src="/template/images/slider-1.jpg" alt="">
                    <div class="banner">
                        <p class="font-1">Воплотите<span>мечту</span></p>
                        <p class="font-2">Идите к своей цели, несмотря ни на что.<br> Мы поможем вам в этом.</p>
                    </div>
                </li>
                <li><img src="/template/images/slider-2.jpg" alt="">
                    <div class="banner">
                        <p class="font-1">Качественный<span>инвентарь</span></p>
                        <p class="font-2">Хорошие тренажеры, которые помогут вам достичь вашей цели</p>
                    </div>
                </li>
                <li><img src="/template/images/slider-3.jpg" alt="">
                    <div class="banner">
                        <p class="font-1">Множество<span>программ</span></p>
                        <p class="font-2">Огромное количество желаемых процедур</p>
                    </div>
                </li>
              </ul>
              <div class="pagination">
                  <ul>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                  </ul>
              </div>
            </div>
          </div>
          <div class="grid_12 top-1">
          	<div class="block-1 box-shadow">
            	<p class="font-3">Фитнес-центр - один из самых <span class="color-1" href="" target="_blank" rel="nofollow">лучших спортивных организаций</span>. Наш фитнес-центр обеспечит вас необходимыми тренажерами для создания красивой фигуры.<a href="" class="color-1"> Фитнес-центр </a>имеет хорошую репутацию.Считается одним из лучших в городе.</p>
            </div>
          </div>
          <div class="grid_12 top-1">
          	<div class="box-shadow">
            	<div class="wrap block-2">
                    <div class="col-1">
                    	<h2 class="p3"><span class="color-1">Последние</span> новости</h2>
                      <?php foreach ($latestNews as $news):?>
                        <div class="wrap box-1">
                            <img src="<?php echo News::getImage($news['id']); ?>" width="200" class="img-border img-indent">
                            <div class="extra-wrap">
                            <p class="p2"><strong><?php echo $news['title'];?></strong></p>
                                <p><?php echo $news['short_content']?></p>
                            </div>
                        </div>
                      <?php endforeach; ?>
                      <?php echo $pagination->get();?>
                    </div>
                    <div class="col-2">
                        <h2 class="p3"><span class="color-1">Услуги</span></h2>
                        <ul class="list-1">
                          <?php foreach ($categories as $categoriesItem):?>
                        	<li><a href="category/<?php echo $categoriesItem['id']?>"><?php echo $categoriesItem['name'];?></a></li>
                          <?php endforeach;?>
                        </ul>
                        <!-- <div class="form-search">
                        	<h2><span class="color-1">Поиск</span></h2>
                            <form id="form-search" method="get">
                              <input type="text" name="q" placeholder="Введите услугу">
                              <a href="#" class="search_button">Искать</a>
                            </form>
                        </div> -->
                    </div>
                </div>
            </div>
          </div>
          <div class="clear"></div>
        </div>
    </section>
<!--==============================footer=================================-->
<?php include_once(ROOT . '/views/layouts/footer.php');?>

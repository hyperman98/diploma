<?php include_once(ROOT . '/views/layouts/header.php');?>
<!--==============================content================================-->
<section>
  <div class="container_12">
    <!-- <div class="grid_12">
      <div class="slider">
        <ul class="items">
           <li><img src="/template/images/slider-1.jpg" alt="">
              <div class="banner">
                  <p class="font-1">Special<span>Program</span></p>
                  <p class="font-2">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna.</p>
                  <a href="#">Read More</a>
              </div>
          </li>
          <li><img src="/template/images/slider-2.jpg" alt="">
              <div class="banner">
                  <p class="font-1">Get Free<span>Training</span></p>
                  <p class="font-2">Liquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.</p>
                  <a href="#">Read More</a>
              </div>
          </li>
          <li><img src="/template/images/slider-3.jpg" alt="">
              <div class="banner">
                  <p class="font-1">Join<span>our team</span></p>
                  <p class="font-2">Liquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.</p>
                  <a href="#">Read More</a>
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
    </div> -->
    <div class="grid_12 top-1">
      <div class="box-shadow">
        <div class="wrap block-2">
              <div class="col-1">
                <h2 class="p3"><span class="color-1"><?php echo $category['name'];?></span></h2>
                  <div class="wrap box-1">
                      <img src="<?php echo Category::getImage($category['id']); ?>" width="200" alt="" class="img-border img-indent">
                      <div class="extra-wrap">
                          <p><?php echo $category['full_text'];?></p>
                          <p style="border-bottom:1px solid green;border-top:1px solid green;">Цена: <?php echo $category['price'];?> руб</p>
                            <input type="submit" data-id="<?php echo $category['id']; ?>" class="search_button" id="open_window" value="Заказать">
                      </div>
                  </div>
                  <div class="overlay" title="окно"></div>
                    <form method="post" class="popup">
                    <div class="close_window">x</div>
                    <label>Имя:</label><br>
                    <input class="txt" name="name" placeholder="Имя" value="<?php echo $user['name']; ?>"><br>
                    <label>Телефон:</label>
                    <input class="txt" type="text" name="tel" placeholder="Телефон" value="<?php echo $user['tel']; ?>"><br>
                    <input type="submit" name="submit" class="search_button add-service-cart" value="Подтвердить">
                  </form>
              </div>
              <div class="col-2">
                  <h2 class="p3"><span class="color-1">Услуги</span></h2>
                  <ul class="list-1">
                    <?php foreach ($categories as $item): ?>
                    <li><a href="<?php echo $item['id']?>"><?php echo $item['name'];?></a></li>
                  <?php endforeach; ?>
                  </ul>
                  <!-- <div class="form-search">
                    <h2><span class="color-1">Поиск</span></h2>
                      <form id="form-search" method="post">
                        <input type="text" placeholder="Введите запрос">
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

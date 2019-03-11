<?php include_once(ROOT . '/views/layouts/header.php');?>
<section id="content">
    <div class="container_12">
      <div class="grid_12 top-1">
        <div class="block-1 box-shadow">
          <p class="font-3">В фитнес-баре вы найдете, то что вам поможет усилить эффект от тренировок, и сделать ваши занятия более комфортными.</p>
        </div>
      </div>
      <div class="grid_12 top-1">
        <div class="box-shadow">
          <div class="wrap block-2">
            <div class="col-1">
              <h2 class="p3"><span class="color-1">Некоторые</span> товары</h2>
              <?php foreach ($products as $el):?>
                <div class="wrap box-1">
                    <img src="<?php echo Fit::getImage($el['id']); ?>" width="150" height="150" class="img-border img-indent">
                    <div class="extra-wrap">
                    <p class="p2"><strong><?php echo $el['name'];?></strong></p>
                        <p><?php echo $el['description']?></p>
                        <p><?php echo $el['price']?> руб</p>
                        <a href="" data-id="<?php echo $el['id']; ?>" class="add-to-cart"><input type="submit" class="search_button" value="В корзину"></a>
                    </div>
                </div><br>
              <?php endforeach; ?>
            </div>
                <div class="col-2">
                    <h2 class="p3"><span class="color-1">Препараты</span></h2>
                    <ul class="list-1">
                      <?php foreach ($categories as $item):?>
                      <li><a href="/fitobar/<?php echo $item['id'];?>"
                        class="<?php if ($categoryId == $item['id']) echo 'active'; ?>"
                        >
                        <?php echo $item['name'];?></a></li>

                      <?php endforeach;?>
                    </ul>
                </div>
            </div>
        </div>
      </div>
      <div class="clear"></div>
    </div>
</section>
<?php include_once(ROOT . '/views/layouts/footer.php');?>

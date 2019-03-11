<?php include_once(ROOT . '/views/layouts/header.php');?>
<section id="content">
    <div class="container_12">
      <div class="grid_12 top-1">
        <div class="box-shadow">
          <div class="wrap block-2">
            <div class="col-1">
              <h2 class="p3"><span class="color-1"><?php echo $fit['name']; ?></span></h2>
              <?php foreach ($elements as $item):?>
                <div class="wrap box-1">
                    <img src="<?php echo Fit::getImage($item['id']); ?>" width="150" height="150" class="img-border img-indent">
                    <div class="extra-wrap">
                    <p class="p2"><strong><?php echo $item['name'];?></strong></p>
                        <p><?php echo $item['description']?></p>
                        <p><?php echo $item['price']?> руб</p>
                        <a href="/cart/add/<?php echo $item['id']; ?>" class="add-to-cart" data-id="<?php echo $item['id']; ?>"><input type="submit" class="search_button" value="В корзину"></a>
                    </div>
                </div><br>
              <?php endforeach; ?>
            </div>
                <div class="col-2">
                    <h2 class="p3"><span class="color-1">Препараты</span></h2>
                    <ul class="list-1">
                      <?php foreach ($categories as $item):?>
                      <li><a href="<?php echo $item['id']?>"><?php echo $item['name'];?></a></li>

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

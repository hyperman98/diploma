<?php include_once ROOT . '/views/layouts/header.php'; ?>
<!--==============================content================================-->
    <section id="content">
        <div class="container_12">
          <div class="grid_12">
          	<div class="box-shadow">
            	<div class="wrap block-2">
                    <!-- <div class="col-2">
                        <h2 class="p3"><span class="color-1">Events</span> Schedule</h2>
                        <p class="p2"><strong>Nam liber tempor cum</strong></p>
                        <p>Option congue nihil imperdiet doming id quod mazim placerat facer possim assum:</p>
                        <img src="images/page3-img1.jpg" alt="" class="img-border pad-1">
                        <ul class="list-2">
                        	<li><a href="#">Lorem ipsum dolor sit amet</a></li>
                            <li><a href="#">Consectetuer adipiscing elit</a></li>
                            <li><a href="#">Diam nonummy nibh</a></li>
                            <li><a href="#">Euismod tincidunt ut laoreet</a></li>
                            <li><a href="#">Dolore magna aliquamerat</a></li>
                        </ul>
                        <a href="#" class="button top-5">Read more</a>
                    </div> -->
                <?php if ($productsInCart): ?>
                  <table class="cart">
                    <tr>
                      <th>Наименование</th>
                      <th>Стоимость, руб</th>
                      <th>Количество, шт</th>
                      <th>Удаление</th>
                    </tr>
                    <?php foreach ($products as $product): ?>
                        <tr>
                            <td style="padding:5px;"><?php echo $product['name']; ?></td>
                            <td><?php echo $product['price']; ?></td>
                            <td><?php echo $productsInCart[$product['id']]; ?></td>
                            <td>
                              <a href="/cart/delete/<?php echo $product['id']; ?>">
                                  <i class="fa fa-times"></i>
                            </a>
                          </td>
                        </tr>
                      <?php endforeach; ?>
                      <tr>
                        <td style="background-color: lightgray; color:black;">Общая стоимость: </td>
                        <td> <?php echo $totalPrice;?></td>
                      </tr>
                    </table>
                    <a href="/cart/checkout"><input type="submit" class="search_button" value="Оформить заказ"></a>
                    <?php else: ?>
                      <h1 style="font-size:2.5em;"><span class="color-1">Корзина</span> пуста</h1><br><br><br>
                      <a style="font-size:1.5em;margin-left:30px;color:black" href="/fitobar">Вернитесь к покупкам</a>
                    <?php endif; ?>
                </div>
            </div>
          </div>
          <div class="clear"></div>
        </div>
    </section>
<!--==============================footer=================================-->
<?php include_once ROOT . '/views/layouts/footer.php'; ?>

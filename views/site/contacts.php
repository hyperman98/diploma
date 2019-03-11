<?php include_once ROOT . '/views/layouts/header.php';; ?>
<!--==============================content================================-->
    <section id="content">
        <div class="container_12">
          <div class="grid_12">
          	<div class="box-shadow">
            	<div class="wrap block-2">
                    <div class="col-3">
                    	<h2><span class="color-1">Найди </span>нас</h2>
                        <div class="map img-border">
                          <!-- <iframe src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Brooklyn,+New+York,+NY,+United+States&amp;aq=0&amp;sll=37.0625,-95.677068&amp;sspn=61.282355,146.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Brooklyn,+Kings,+New+York&amp;ll=40.649974,-73.950005&amp;spn=0.01628,0.025663&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe> -->
                          <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A7680a7f7b589fc02b1732dae79d12be1c074a81b4bf1ebf8c635581c4327e46c&amp;width=200&amp;height=200&amp;lang=ru_RU&amp;scroll=true"></script>
                        </div>
                        <dl>
                            <dt class="color-1"><strong>Курчатова, 7<br></strong></dt>
                            <dd><span>Телефон:</span>+7 (351) 729-80-97</dd>
                            <dd><span>Секретарь:</span>+7 (351) 729-80-99</dd>
                        </dl>
                    </div>
                    <div class="col-4">
                    	<h2><span class="color-1">Обратная </span>связь</h2>
                        <form id="form" method="post" >
                            <fieldset>
                              <label><input style="border:1px solid silver; border-radius:5px;" type="text" name="userName" placeholder="Имя" value="<?php echo $user['name']; ?>" required></label>
                              <label><input style="border:1px solid silver; border-radius:5px;" type="text" name="userEmail" placeholder="Email" value="<?php echo $user['email'];?>"  required></label>
                              <label><textarea style="border:1px solid silver; border-radius:5px;" name="userText" placeholder="Сообщение" required></textarea></label>
                              <!-- <div class="btns"><a href="#" class="button">Clear</a> -->
                                <input type="submit" style="height:50px;width:100px; margin-top:30px;color:green; border:1px solid silver; border-radius:5px;" name= "submit" class="btns" value="Отправить">
                              </div>
                            </fieldset>
                          </form>
                    </div>
                </div>
            </div>
          </div>
          <div class="clear"></div>
        </div>
    </section>
<!--==============================footer=================================-->
<?php include_once ROOT . '/views/layouts/footer.php'; ?>

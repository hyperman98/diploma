<?php include_once(ROOT . '/views/layouts/header.php');?>
<!--==============================content================================-->
<section>
<div class="container_12">
  <div class="grid_12 top-1">
    <div class="box-shadow">
      <div class="wrap block-2">
          <div class="col-1">
            <div class="form-search" style="width:100%;">
              <h2>Оформление</h2><br>
              <?php if ($result): ?>
                  <p>Заказ оформлен. Мы Вам перезвоним.</p>
              <?php else: ?>
                  <p>Выбрано товаров: <?php echo $totalQuantity; ?>, на сумму: <?php echo $totalPrice; ?> руб</p><br/>
              <?php if (!$result): ?>
                  <div>
                    <?php if (isset($errors) && is_array($errors)): ?>
                        <ul>
                              <?php foreach ($errors as $error): ?>
                              <li> - <?php echo $error; ?></li>
                              <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                          </div>
          <p>Заполните данную форму для оформления</p>
        <form method="post" id="form-search">
          <input style="border 1px solid black;" type="text" placeholder="Имя" name="userName" value="<?php echo $userName?>" required><br>
          <input style="border 1px solid black;" type="text" placeholder="Ваш телефон" name="userPhone" value="<?php echo $userTel; ?>" required><br>
          <input type="submit" name="submit" class="search_button" style="color:lightgreen;height:50px;" value="Оформить">
        </form>
        </div>
      <?php endif; ?>
    <?php endif ?>
      </div>
    </div>
  </div>
</div>
</section>
<!--==============================footer=================================-->
<?php include_once(ROOT . '/views/layouts/footer.php');?>

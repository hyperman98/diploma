<?php include_once(ROOT . '/views/layouts/header.php');?>
<!--==============================content================================-->
<section>
<div class="container_12">
  <div class="grid_12 top-1">
    <div class="box-shadow">
      <div class="wrap block-2">
          <div class="col-1">
              <div class="form-search" style="width:100%;">
            <?php if ($result): ?>
                    <p>Сообщение отправлено! Мы скоро с вами свяжемся!</p>
                <?php else: ?>
        <?php if (isset($errors) && is_array($errors)): ?>
          <ul>
            <?php foreach ($errors as $error):?>
              <li> - <?php echo $error; ?></li>
            <?php endforeach;?>
          </ul>
        <?php endif;?>
        <?php endif; ?>
        <form method="post" id="form-search">
          <h2>Обратная связь</h2>
          <h5>Есть вопрос? Хотите записаться на услугу? Напишите нам</h5>
          <input type="text" name="userName"  placeholder="Имя" value="<?php echo $userName?>" required><br>
          <input type="email" name="userEmail" placeholder="Email" value="<?php echo $userEmail?>" required><br>
          <textarea name="message" rows="8" cols="80"></textarea>
          <input type="submit" name="submit" class="search_button" style="color:lightblue;height:50px;" value="Отправить">
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<!--==============================footer=================================-->
<?php include_once(ROOT . '/views/layouts/footer.php');?>

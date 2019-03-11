<?php include_once(ROOT . '/views/layouts/header.php');?>
<!--==============================content================================-->
<section>
<div class="container_12">
  <div class="grid_12 top-1">
    <div class="box-shadow">
      <div class="wrap block-2">
          <div class="col-1">
              <div class="form-search" style="width:100%; margin-left:10px;">
            <?php if ($result): ?>
                    <p>Вы зарегистрированы!</p>
                <?php else: ?>
        <?php if (isset($errors) && is_array($errors)): ?>
          <ul>
            <?php foreach ($errors as $error):?>
              <li> - <?php echo $error; ?></li>
            <?php endforeach;?>
          </ul>
        <?php endif;?>
        <?php endif; ?>
        <form method="post" class="reg" style="margin-left:15em;">
          <h2 style="margin-bottom:5px;">Регистрация</h2><hr>
          <input style="border 1px solid black;" type="text" name="name"  placeholder="Имя" value="<?php echo $name?>" required><br>
          <input style="border 1px solid black;" type="email" name="email" placeholder="Email" value="<?php echo $email?>" required><br>
          <input style="border 1px solid black;" type="password" name="password" placeholder="Пароль" value="<?php echo $password?>" required><br>
          <input style="border 1px solid black;" type="password" name="repassword" placeholder="Повторите пароль" value="<?php echo $repassword?>" required><br>
          <input style="border 1px solid black;" type="text" name="tel" placeholder="Телефон" value="<?php echo $tel?>" required><br><br>
          <input style="position: absolute; left:155px; bottom:155px;" type="checkbox" id="politics" onclick="check();" value="" autocomplete="off"/><span style="margin-left:70px;">Согласие</span> <a href="/police">обработку персональных данных</a><br><br>
          <input type="submit" name="submit" class="search_button" style="color:lightgreen;height:50px; margin-bottom:10px;" value="Регистрация" disabled>
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

<?php include_once(ROOT . '/views/layouts/header.php');?>
<!--==============================content================================-->
<section>
<div class="container_12">
  <div class="grid_12 top-1">
    <div class="box-shadow">
      <div class="wrap block-2">
          <div class="col-1">
            <div class="form-search" style="width:100%;">
            <?php if (isset($errors) && is_array($errors)): ?>
              <ul>
                <?php foreach ($errors as $error):?>
                  <li> - <?php echo $error; ?></li>
                <?php endforeach;?>
              </ul>
            <?php endif;?>
        <form method="post" class="reg" style="margin-left:15em;">
          <h2>Авторизация</h2><hr>
          <input style="border 1px solid black;" type="email" placeholder="Email" name="email" value="<?php echo $email?>" required><br>
          <input style="border 1px solid black;" type="password" placeholder="Пароль" name="password" value="<?php echo $password?>" required><br>
          <input type="submit" name="submit" class="search_button" style="color:lightgreen;height:50px;" value="Войти">
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

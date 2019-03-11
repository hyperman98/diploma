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
        <form method="post" id="form-search">
          <h2>Редактирование данных</h2><br>
          <input type="text" name="name" value="<?php echo $name; ?>" required style="border:1px solid silver; border-radius:5px;"><br>
          <input type="password" name="password" placeholder="Введите новый пароль" required style="border:1px solid silver; border-radius:5px;"><br>
          <input type="submit" name="submit" value="Сохранить" class="search_button" style="color:green;height:50px; border:1px solid silver;">
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

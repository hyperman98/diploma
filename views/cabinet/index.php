<?php include_once(ROOT . '/views/layouts/header.php');?>
<!--==============================content================================-->
<style>

    .welcome{height: 150px;}
    a.update{font-size: 1.5em;margin-left: 30px; color:black;}
    a.update:hover{color:#3CB371;}

</style>
<section>
<div class="container_12">
  <div class="grid_12 top-1">
    <div class="box-shadow">
      <div class="wrap block-2">
        <div class="col-1">
          <div class="welcome">
            <h1 style="font-size:2.5em;">Здравствуйте <span class="color-1"><?php echo $user['name'];?></span></h1><br><br><br><br>
          <a class="update" href="/cabinet/edit">Редактировать данные</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<!--==============================footer=================================-->
<?php include_once(ROOT . '/views/layouts/footer.php');?>

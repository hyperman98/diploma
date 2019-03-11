<?php include_once ROOT . '/views/layouts/header_admin.php'; ?>

<div id="content">
  <div style="margin-left:30em; margin-top:5em;" class="box">
    <!-- Box Head -->
    <div class="box-head">
      <h2>Удаление заказа товара</h2>
    </div>
    <!-- End Box Head -->

    <form action="" method="post">

      <!-- Form -->
      <div class="form">
          <p>
            <span class="req">Удалить заказ товара # <?php echo $id;?></span>
            <!-- <label>Article Title <span>(Required Field)</span></label>
            <input type="text" class="field size1" /> -->
          </p>
          <!-- <p class="inline-field">
            <label>Date</label>
            <select class="field size2">
              <option value="">23</option>
            </select>
            <select class="field size3">
              <option value="">July</option>
            </select>
            <select class="field size3">
              <option value="">2009</option>
            </select>
          </p> -->
      </div>
      <!-- End Form -->

      <!-- Form Buttons -->
      <div class="buttons">
        <input type="submit" name="submit" class="button" value="Удалить" />
      </div>
      <!-- End Form Buttons -->
    </form>
  </div>
  <div id="sidebar" style="height:350px; visibility:hidden;">

    <!-- Box -->
    <div class="box">

      <!-- Box Head -->
      <div class="box-head">
        <h2>Управление сортировкой</h2>
      </div>
      <!-- End Box Head-->

      <div class="box-content">
        <span>Сортировка</span>
        <div class="cl">&nbsp;</div>

        <p class="select-all"><input type="checkbox" class="checkbox" /><label>select all</label></p>
        <p><a href="#">Delete Selected</a></p>

        <!-- Sort -->
        <div class="sort">
          <label>Sort by</label>
          <select class="field">
            <option value="">Title</option>
          </select>
          <select class="field">
            <option value="">Date</option>
          </select>
          <select class="field">
            <option value="">Author</option>
          </select>
        </div>
        <!-- End Sort -->

      </div>
    </div>
    <!-- End Box -->
  </div>
  <!-- End Sidebar -->
</div>

<?php include_once ROOT . '/views/layouts/footer_admin.php'; ?>

<?php include_once ROOT . '/views/layouts/header_admin.php'; ?>
<!-- End Header -->

<!-- Container -->
<div id="container">
	<div class="shell">

		<!-- Small Nav -->
		<!-- <div class="small-nav">
			<a href="#">Администрирование</a>
			<span>&gt;</span>
			Нынешние заказы
		</div> -->
		<!-- End Small Nav -->

		<!-- Message OK -->
		<!-- <div class="msg msg-ok">
			<p><strong>Your file was uploaded succesifully!</strong></p>
			<a href="#" class="close">close</a>
		</div>
		<!-- End Message OK -->

		<!-- Message Error -->
		<!-- <div class="msg msg-error">
			<p><strong>You must select a file to upload first!</strong></p>
			<a href="#" class="close">close</a>
		</div> -->
		<!-- End Message Error -->
		<br />
		<!-- Main -->
		<div id="main">
			<div class="cl">&nbsp;</div>

			<!-- Content -->
			<div id="content">

				<!-- Box -->
				<div class="box">
					<!-- Box Head -->
					<div class="box-head">
						<h2 class="left">Просмотр заказа</h2>
						<!-- <div class="right">
							<label>search articles</label>
							<input type="text" class="field small-field" />
							<input type="submit" class="button" value="search" />
						</div> -->
					</div>
					<!-- End Box Head -->

					<!-- Table -->
<form action="#" method="post">
					<div class="table">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<th width="13"><input type="checkbox" class="checkbox" /></th>
                <th>ID заказа</th>
								<th>Дата заказа</th>
								<th>Клиент</th>
                <th>ID клиента</th>
								<th>Номер</th>
								<th>Статус заказа</th>
							</tr>
                <tr>
								<td><input type="checkbox" class="checkbox" /></td>
                <td><h3><a href="#"><?php echo $order['id']; ?></a></h3></td>
								<td><h3><?php echo $order['date']; ?></h3></td>
								<td><h3><?php echo $order['user_name']; ?></h3></td>
                <td><h3><?php echo $order['user_id']; ?></h3></td>
								<td><h3><?php echo $order['user_phone']; ?></h3></td>
								<td><h3><?php echo Order::getStatusText($order['status']); ?></h3></td>
                </tr>
							<!-- <tr class="odd">
								<td><input type="checkbox" class="checkbox" /></td>
								<td><h3><a href="#">Lorem ipsum dolor sit amet, consectetur.</a></h3></td>
								<td><a href="#" class="ico del">Delete</a><a href="#" class="ico edit">Edit</a></td>
							</tr>
							<tr>
								<td><input type="checkbox" class="checkbox" /></td>
								<td><h3><a href="#">Lorem ipsum dolor sit amet, consectetur.</a></h3></td>
								<td><a href="#" class="ico del">Delete</a><a href="#" class="ico edit">Edit</a></td>
							</tr>
							<tr class="odd">
								<td><input type="checkbox" class="checkbox" /></td>
								<td><h3><a href="#">Lorem ipsum dolor sit amet, consectetur.</a></h3></td>
								<td><a href="#" class="ico del">Delete</a><a href="#" class="ico edit">Edit</a></td>
							</tr>
							<tr>
								<td><input type="checkbox" class="checkbox" /></td>
								<td><h3><a href="#">Lorem ipsum dolor sit amet, consectetur.</a></h3></td>
								<td><a href="#" class="ico del">Delete</a><a href="#" class="ico edit">Edit</a></td>
							</tr>
							<tr class="odd">
								<td><input type="checkbox" class="checkbox" /></td>
								<td><h3><a href="#">Lorem ipsum dolor sit amet, consectetur.</a></h3></td>
								<td><a href="#" class="ico del">Delete</a><a href="#" class="ico edit">Edit</a></td>
							</tr>
							<tr>
								<td><input type="checkbox" class="checkbox" /></td>
								<td><h3><a href="#">Lorem ipsum dolor sit amet, consectetur.</a></h3></td>
								<td><a href="#" class="ico del">Delete</a><a href="#" class="ico edit">Edit</a></td>
							</tr>
							<tr class="odd">
								<td><input type="checkbox" class="checkbox" /></td>
								<td><h3><a href="#">Lorem ipsum dolor sit amet, consectetur.</a></h3></td>
								<td><a href="#" class="ico del">Delete</a><a href="#" class="ico edit">Edit</a></td>
							</tr> -->
						</table>


						<!-- Pagging -->
						<!-- <div class="pagging">
							<div class="left">Showing 1-12 of 44</div>
							<div class="right">
								<a href="#">Previous</a>
								<a href="#">1</a>
								<a href="#">2</a>
								<a href="#">3</a>
								<a href="#">4</a>
								<a href="#">245</a>
								<span>...</span>
								<a href="#">Next</a>
								<a href="#">View all</a>
							</div>
						</div> -->
						<!-- End Pagging -->

					</div>
						</form>
					<!-- Table -->

				</div>
        <div class="box">
          <!-- Box Head -->
          <div class="box-head">
            <h2>Список заказанных товаров</h2>
          </div>
          <!-- End Box Head -->
            <!-- Form -->
            <div class="table">
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <th width="13"><input type="checkbox" class="checkbox" /></th>
                  <th>ID товара</th>
                  <th>Название</th>
                  <th>Цена</th>
                  <th>Количество</th>
                  <th>Описание</th>
                </tr>
                <?php foreach ($products as $product): ?>
                  <tr>
                  <td><input type="checkbox" class="checkbox" /></td>
                  <td><h3><a href="#"><?php echo $product['id']; ?></a></h3></td>
                  <td><h3><?php echo $product['name']; ?></h3></td>
                  <td><h3><?php echo $product['price']; ?></h3></td>
                  <td><h3><?php echo $productQuantity[$product['id']]; ?></h3></td>
                  <td><h3><?php echo $product['description']; ?></h3></td>
                  </tr>
                  <?php endforeach;?>
                </table>
        </div>
				<!-- End Box -->

				<!-- Box -->
				<!-- <div class="box"> -->
					<!-- Box Head -->
					<!-- <div class="box-head">
						<h2>Добавление новой услуги</h2>
					</div> -->
					<!-- End Box Head -->

					<!-- <form method="post"> -->

						<!-- Form -->
						<!-- <div class="form">
								<p>
									<label><span>Название</span></label>
									<input name="name" type="text" class="field size1" />
								</p>
								<p>
									<label><span>Изображение</span></label>
									<input type="file" class="field size1" />
								</p> -->
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

								<!-- <p>
									<label><span>Описание</span></label>
									<textarea name="full_text" class="field size1" rows="10" cols="30"></textarea>
								</p>

						</div> -->
						<!-- End Form -->

						<!-- Form Buttons -->
						<!-- <div class="buttons">
							<input type="submit" class="button" name="submit" value="Сохранить">
						</div> -->
						<!-- End Form Buttons -->
					<!-- </form>
				</div> -->
				<!-- End Box -->

			</div>
			<!-- End Content -->

			<!-- Sidebar -->
			<!-- <div id="sidebar"> -->

				<!-- Box -->
				<!-- <div class="box"> -->

					<!-- Box Head -->
					<!-- <div class="box-head">
						<h2>Управление сортировкой</h2>
					</div> -->
					<!-- End Box Head-->

					<!-- <div class="box-content">
						<span>Сортировка</span>
						<div class="cl">&nbsp;</div>

						<p class="select-all"><input type="checkbox" class="checkbox" /><label>select all</label></p>
						<p><a href="#">Delete Selected</a></p> -->

						<!-- Sort -->
						<!-- <div class="sort">
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
						</div> -->
						<!-- End Sort -->

					<!-- </div>
				</div> -->
				<!-- End Box -->
			<!-- </div> -->
			<!-- End Sidebar -->

			<div class="cl">&nbsp;</div>
		</div>
		<!-- Main -->
	</div>
	<div id="sidebar" style="height:480px; visibility:hidden;">

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
<!-- End Container -->

<!-- Footer -->
<?php include_once ROOT . '/views/layouts/footer_admin.php'; ?>

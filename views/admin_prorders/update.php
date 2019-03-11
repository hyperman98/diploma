<?php include_once ROOT . '/views/layouts/header_admin.php'; ?>
<!-- End Header -->

<!-- Container -->
<div id="container">
	<div class="shell">

		<!-- Small Nav -->
		<!-- <div class="small-nav">
			<a href="#">Администрирование</a>
			<span>&gt;</span>
			Нынешние новости
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

				<!-- Box -->
				<div class="box">
					<!-- Box Head -->
					<div class="box-head">
						<h2>Редактирование заказа #<?php echo $id;?></h2>
					</div>
					<!-- End Box Head -->

					<form method="post">

						<!-- Form -->
						<div class="form">
								<p>
									<label><span>Клиент</span></label>
									<input name="name" type="text" class="field size1" value="<?php echo $order['user_name']; ?>"/>
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

								<p>
									<label><span>Телефон</span></label>
									<input name="tel" class="field size1" rows="10" cols="30" value="<?php echo $order['user_phone']; ?>">
								</p>

								<p>
									<label><span>Статус заказа</span></label>
									<select name="status">
                            <option value="1" <?php if ($order['status'] == 1) echo ' selected="selected"'; ?>>Новый заказ</option>
                            <option value="2" <?php if ($order['status'] == 2) echo ' selected="selected"'; ?>>В обработке</option>
                            <option value="3" <?php if ($order['status'] == 3) echo ' selected="selected"'; ?>>Закрыт</option>
                </select>
								</p>
								<p>
									<label><span>Дата</span></label>
									<input name="date" class="field size1" rows="10" cols="30" value="<?php echo $order['date']; ?>">
								</p>

						</div>
						<!-- End Form -->

						<!-- Form Buttons -->
						<div class="buttons">
							<input type="submit" class="button" name="submit" value="Сохранить">
						</div>
						<!-- End Form Buttons -->
					</form>
				</div>
				<!-- End Box -->

			</div>
			<!-- End Content -->

			<!-- Sidebar -->
			<div id="sidebar" style="visibility:hidden;">

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

			<div class="cl">&nbsp;</div>
		</div>
		<!-- Main -->
	</div>
</div>
<!-- End Container -->

<!-- Footer -->
<?php include_once ROOT . '/views/layouts/footer_admin.php'; ?>

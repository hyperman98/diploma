<?php include_once ROOT . '/views/layouts/header.php'; ?>
<!--==============================content================================-->
<style>
  .chooses:hover{
    border-radius: 10px;
    background-color: lightgreen;
  }
</style>
<div class="container_12">
<div class="grid_12 top-1">
  <div class="box-shadow">
  <div class="wrap block-2">
  <div class="cd-schedule loading">
	<div class="timeline">
		<ul>
			<li><span>09:00</span></li>
			<li><span>09:30</span></li>
			<li><span>10:00</span></li>
			<li><span>10:30</span></li>
			<li><span>11:00</span></li>
			<li><span>11:30</span></li>
			<li><span>12:00</span></li>
			<li><span>12:30</span></li>
			<li><span>13:00</span></li>
			<li><span>13:30</span></li>
			<li><span>14:00</span></li>
			<li><span>14:30</span></li>
			<li><span>15:00</span></li>
			<li><span>15:30</span></li>
			<li><span>16:00</span></li>
			<li><span>16:30</span></li>
			<li><span>17:00</span></li>
			<li><span>17:30</span></li>
			<li><span>18:00</span></li>
		</ul>
	</div> <!-- .timeline -->

	<div class="events">
		<ul>
			<li class="events-group">
				<div class="top-info"><span>Понедельник</span></div>

				<ul>
					<li class="single-event" data-start="09:30" data-end="10:30" data-content="бокс" data-event="event-1">
						<a href="#0">
							<em class="event-name">Бокс</em>
              <i style="color:white">Кирилл</i>
						</a>
					</li>

					<li class="single-event" data-start="11:00" data-end="12:30" data-content="спортзал" data-event="event-2">
						<a href="#0">
							<em class="event-name">Спортзал</em>
              <i style="color:white">Евгений</i>
						</a>
					</li>
					<li class="single-event" data-start="14:00" data-end="15:15"  data-content="пилатес" data-event="event-3">
						<a href="#0">
							<em class="event-name">Пилатес</em>
              <i style="color:white">Людмила</i>
						</a>
					</li>
				</ul>
			</li>

			<li class="events-group">
				<div class="top-info"><span>Вторник</span></div>

				<ul>
					<li class="single-event" data-start="10:00" data-end="11:00"  data-content="финская-сауна" data-event="event-2">
						<a href="#0">
							<em class="event-name">Сауна</em>
						</a>
					</li>

					<li class="single-event" data-start="11:30" data-end="13:00"  data-content="горизонтальный-солярий" data-event="event-4">
						<a href="#0">
							<em class="event-name">Солярий</em>
						</a>
					</li>

					<li class="single-event" data-start="13:30" data-end="15:00" data-content="классический-массаж" data-event="event-1">
						<a href="#0">
							<em class="event-name">Массаж</em>
              <i style="color:white">Антон</i>
						</a>
					</li>

					<li class="single-event" data-start="15:45" data-end="16:45"  data-content="йога-для-пожилых-людей" data-event="event-3">
						<a href="#0">
							<em class="event-name">Йога</em>
              <i style="color:white">Алена</i>
						</a>
					</li>
				</ul>
			</li>

			<li class="events-group">
				<div class="top-info"><span>Среда</span></div>

				<ul>
					<li class="single-event" data-start="09:00" data-end="10:15" data-content="йога-для-беременных" data-event="event-4">
						<a href="#0">
							<em class="event-name">Йога</em>
              <i style="color:white">Алена</i>
						</a>
					</li>

					<li class="single-event" data-start="10:45" data-end="11:45" data-content="лечебный-массаж" data-event="event-1">
						<a href="#0">
							<em class="event-name">Массаж</em>
              <i style="color:white">Антон</i>
						</a>
					</li>

					<li class="single-event" data-start="12:00" data-end="13:45"  data-content="пилатес" data-event="event-2">
						<a href="#0">
							<em class="event-name">Пилатес</em>
              <i style="color:white">Людмила</i>
						</a>
					</li>

					<li class="single-event" data-start="13:45" data-end="15:00" data-content="бокс" data-event="event-3">
						<a href="#0">
							<em class="event-name">Бокс</em>
              <i style="color:white">Евгений</i>
						</a>
					</li>
				</ul>
			</li>

			<li class="events-group">
				<div class="top-info"><span>Четверг</span></div>

				<ul>
					<li class="single-event" data-start="09:30" data-end="10:30" data-content="спортзал" data-event="event-1">
						<a href="#0">
							<em class="event-name">Спортзал</em>
              <i style="color:white">Кирилл</i>
						</a>
					</li>

					<li class="single-event" data-start="12:00" data-end="13:45" data-content="йога-для-беременных" data-event="event-4">
						<a href="#0">
							<em class="event-name">Йога</em>
              <i style="color:white">Алена</i>
						</a>
					</li>

					<li class="single-event" data-start="15:30" data-end="16:30" data-content="бокс" data-event="event-1">
						<a href="#0">
							<em class="event-name">Бокс</em>
              <i style="color:white">Евгений</i>
						</a>
					</li>

					<li class="single-event" data-start="17:00" data-end="18:30"  data-content="классический-массаж" data-event="event-2">
						<a href="#0">
							<em class="event-name">Массаж</em>
              <i style="color:white">Антон</i>
						</a>
					</li>
				</ul>
			</li>

			<li class="events-group">
				<div class="top-info"><span>Пятница</span></div>

				<ul>
					<li class="single-event" data-start="10:00" data-end="11:00"  data-content="спортзал" data-event="event-2">
						<a href="#0">
							<em class="event-name">Спортзал</em>
              <i style="color:white">Кирилл</i>
						</a>
					</li>

					<li class="single-event" data-start="12:30" data-end="14:00" data-content="бокс" data-event="event-1">
						<a href="#0">
							<em class="event-name">Бокс</em>
              <i style="color:white">Евгений</i>
						</a>
					</li>

					<li class="single-event" data-start="15:45" data-end="16:45"  data-content="йога-для-пожилых-людей" data-event="event-3">
						<a href="#0">
							<em class="event-name">Йога</em>
              <i style="color:white">Алена</i>
						</a>
					</li>
				</ul>
			</li>
		</ul>
	</div>

	<div class="event-modal">
		<header class="header">
			<div class="content">
				<span class="event-date"></span>
				<h3 class="event-name"></h3>
			</div>

			<div class="header-bg"></div>
		</header>

		<div class="body">
			<div class="event-info"></div>
			<div class="body-bg"></div>
		</div>

		<a href="#0" class="close">Close</a>
	</div>

	<div class="cover-layer"></div>
</div> <!-- .cd-schedule -->
</div>
</div>
</div>
</div>
<script src="js/modernizr.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script>
	if( !window.jQuery ) document.write('<script src="js/jquery-3.0.0.min.js"><\/script>');
</script>
<script src="js/main.js"></script> <!-- Resource jQuery
<!--==============================footer=================================-->
<?php include_once ROOT . '/views/layouts/footer.php'; ?>

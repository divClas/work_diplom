<?php
session_start();
require_once 'vendor/connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>МЕДИАГИГАНТ</title>
	<!-- <link rel="icon" href="img/title.png"> -->
	<link rel="icon" href="/img/title.png" type="image/x-icon">
	<link rel="stylesheet" href="style/main.css">
	<link rel="stylesheet" href="style/reset.css">
	<link rel="stylesheet" href="/diplom/fonts/ofont.ru_Respect.ttf">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap"
		rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
	<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
</head>

<body>
	<div class="wrapper">
		<?php
		include 'header.php';
		?>
		<main class="main">
			<div class="signin_body container">
				<div class="profile">
					<p class="hello_manager">
						Здравствуйте
						<?= $_SESSION['manager']['name_manger'] ?>
					</p>
					<div class="logout">
						<a href="vendor/logout.php">Выход</a>
					</div>
				</div>
			</div>
			<div class="manager_section2">
				<div class="manager2 container2">
					<h1 id="man">Заявки<button id="open_manager2" class="manager_add_open">+</button></h1>
					<div class="table__admin2">
						<div class="table_header">
							<div class="flex_item">
								<div class="items_manager">
									<div class="line3">
										Имя
									</div>

									<div class="line3">
										номер
									</div>

									<div class="line3">
										ссылка на сайт/соц сети
									</div>
									<div class="line3">
										выбранная услуга
									</div>

									<div class="line3">
										описание услуги
									</div>
									<div class="line3">
										<select name="" id="select_main">
											<option value="все заявки">все заявки</option>
											<option value="новая заявка">новая заявка</option>
											<option value="Клиент думает">Клиент думает</option>
											<option value="Клиент согласился">Клиент согласился</option>
											<option value="Клиент Отказался">Клиент Отказался</option>
										</select>
									</div>
									<div class="line3">

									</div>
									<div class="line3">

									</div>
								</div>
							</div>
						</div>
						<div class="table_body">
							<?php
							$applications = mysqli_query($connect, "SELECT * FROM `applications`");
							$applications = mysqli_fetch_all($applications, MYSQLI_ASSOC);
							foreach ($applications as $applications) {
								?>
								<div class="flex_item2">
									<div id="aplication_<?= $applications['id'] ?>" class="items_manager">
										<div class="line3">
											<?= $applications['name'] ?>
										</div>
										<div class="line3">
											<?= $applications['number'] ?>
										</div>
										<div class="line3">
											<a id="link_app">
												<?= $applications['link'] ?>
											</a>
										</div>
										<div class="line3">
											<?= $applications['list'] ?>
										</div>
										<div class="line3">
											<?= $applications['discription'] ?>
										</div>
										<div class="line3">
											<?= $applications['stage'] ?>
										</div>
										<div class="line3 redact">
											<a onclick="deleteAplication(<?= $applications['id'] ?>)" class="redact"
												id="delete">УДАЛИТЬ ЗАЯВКУ</a>
										</div>
										<div class="line3 redact">
											<a class="redact" href="update.php?id=<?= $applications['id'] ?>">UPDATE</a>
										</div>

									</div>

								</div>
							<?
							}
							?>
						</div>

		</main>
		<?php
		include 'footer.php';
		?>
	</div>
	<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
	<script src="js/jquery.js"></script>
	<script src="js/main.js"></script>
</body>
<div class="modal">
	<div class="box">
		<h2>Заявка успешно удалена!</h2>
		<button class="modal-close" id="close-btn">
			<svg height="33px" width="33px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
				xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve">
				<circle style="fill:#FF6643;" cx="256" cy="256" r="256" />
				<path style="fill:#FF4F19;" d="M256,0v512c141.385,0,256-114.615,256-256S397.385,0,256,0z" />
				<polygon style="fill:#F2F2F4;" points="365.904,184.885 327.115,146.096 256,217.211 184.885,146.096 146.096,184.885 217.211,256 
							146.096,327.115 184.885,365.904 256,294.789 327.115,365.904 365.904,327.115 294.789,256 " />
				<polygon style="fill:#DFDFE1;" points="365.904,184.885 327.115,146.096 256,217.211 256,294.789 327.115,365.904 365.904,327.115 
							294.789,256 " />
			</svg>
		</button>
	</div>
</div>

</html>
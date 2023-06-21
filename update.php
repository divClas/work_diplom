<?php
session_start();
require_once 'vendor/connect.php';


if ($_SESSION['manager']['role'] != 'manager') {
    header("Location: eror.php");
}
$product_id = $_GET['id'];
$product = mysqli_query($connect, "SELECT * FROM `applications` WHERE `id` = '$product_id'");
$product = mysqli_fetch_assoc($product);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>МЕДИАГИГАНТ</title>
    <link rel="icon" href="img/title.png">
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

        <main class="main">

            <div class="forma container">


                <div class="main-forum">

                    <form action="vendor/udpate_script.php" method="post" enctype="multipart/form-data">
                        <h1>Обновите данные</h1>
                        <h1><a class="back" href="manager.php"> &#8656; Вернуться назад</a></h1>
                        <input name="id" style="display:none" type="text" value="<?= $product['id'] ?>">
                        <input type="text" value="<?= $product['name'] ?>" name="name" placeholder=" имя">
                        <input type="tel" value="<?= $product['number'] ?>" name="number" placeholder=" номер телефона">
                        <input type="text" value="<?= $product['link'] ?>" name="link"
                            placeholder="Адрес сайта или страницы в социальных сетях">
                        <select name="list" id="">
                            <option value="<?= $product['list'] ?>"><?= $product['list'] ?></option>
                            <option value="Комплексное digital-продвижение компании">Комплексное
                                digital-продвижение
                                компании
                            </option>
                            <option value="Выберите из списка интересующую вас услугу:">Выберите из списка
                                интересующую вас
                                услугу:
                            </option>

                            <option value="Brandformance-маркетинг">Brandformance-маркетинг</option>
                            <option value="Контекстная реклама Yandex, Google">Контекстная реклама Yandex,
                                Google
                            </option>
                            <option value="Таргетированная реклама VK, MyTarget, Telegram Ads">Таргетированная
                                реклама VK,
                                MyTarget, Telegram Ads</option>
                            <option value="Брендинг">Брендинг</option>
                            <option value="Дизайн лого, брендбука, фирм.стиля">Дизайн лого, брендбука,
                                фирм.стиля
                            </option>
                            <option value="HR-брендинг">HR-брендинг</option>
                            <option value="SEO">SEO</option>
                            <option value="Продвижение онлайн-школы">Продвижение онлайн-школы</option>
                            <option value="Создание онлайн-школы">Создание онлайн-школы</option>
                            <option value="Создание чат-бота">Создание чат-бота</option>
                            <option value="Стратегический маркетинг">Стратегический маркетинг</option>
                            <option value="Другая услуга">Другая услуга</option>
                        </select>
                        <label for="placeholder">описание пожилания</label>
                        <textarea required value="<?= $product['discription'] ?>" name="discription"
                            placeholder="Опишите пожилания клиента/добавьте доп данные" name=""
                            id=""><?= $product['discription'] ?> </textarea>
                        <select name="stage" id="">
                            <option value="">
                                статус заявки
                            </option>
                            <option value="">
                                <?= $product['stage'] ?>
                            </option>
                            <option value="Клиент думает"> Клиент думает</option>
                            <option value="Клиент согласился"> Клиент согласился</option>
                            <option value="Клиент Отказался"> Клиент Отказался</option>
                        </select>

                        <button class="submit" type="submit">Обновить данные клиента</button>
                    </form>
                </div>
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

</html>
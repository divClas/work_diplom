<?php
session_start();
require_once 'vendor/connect.php';
if ($_SESSION['manager']['role'] != 'admin') {
    header("Location: eror.php");
}
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
                <div class="center">
                    <div class="ad_manager">
                        <h1>Добавьте нового менеджера</h1>
                        <button id="open_form" class="add_forma">+</button>
                        <form class="form_ad_manager" action="vendor/create_manager.php" method="post"
                            enctype="multipart/form-data">

                            <label>Имя</label><br>
                            <input type="name" placeholder="Введите имя" required name="name_manger"><br>
                            <label> Логин </label><br>
                            <input type="text" placeholder="Введите логин" required name="login" placeholder=""><br>
                            <label>Пароль</label><br>
                            <input type="password" placeholder="Введите пароль" required name="password"
                                placeholder=""><br>
                            <button class="u" type="submit">Добавить нового сотрудника</button><br>
                            <?
                            if (isset($_SESSION['error'])) {
                                echo "<p class='error'>" . $_SESSION['error'] . "</p>";
                                unset($_SESSION['error']);
                            }
                            ?>
                        </form>
                    </div>
                </div>
            </div>
            <div class="manager_section">
                <div class="manager container">
                    <h1>Работающие сотрудники <button id="open_manager" class="manager_add_open">+</button></h1>

                    <div class="table__admin">
                        <div class="flex_item">
                            <div class="items_manager">

                                <div class="line">
                                    ID
                                </div>

                                <div class="line">
                                    Имя
                                </div>

                                <div class="line">
                                    Логин
                                </div>

                                <div class="line">
                                    Роль
                                </div>
                                <div class="line">

                                </div>

                            </div>
                        </div>
                        <?php
                        $administration = mysqli_query($connect, "SELECT * FROM `administration`");
                        $administration = mysqli_fetch_all($administration, MYSQLI_ASSOC);
                        foreach ($administration as $administration) {
                            ?>
                            <div id="administration_<?= $administration['id'] ?>" class="flex_item2">
                                <div class="items_manager">


                                    <div class="line">
                                        <?= $administration['id'] ?>
                                    </div>


                                    <div class="line">
                                        <?= $administration['name_manger'] ?>
                                    </div>


                                    <div class="line">
                                        <?= $administration['login'] ?>
                                    </div>


                                    <div class="line">
                                        <?= $administration['role'] ?>
                                    </div>

                                    <div class="line">
                                        <a id="link_app" onclick="deleteAdmin(<?= $administration['id'] ?>)"
                                            id="delete">УДАЛИТЬ МЕНЕДЖЕРА</a>
                                    </div>

                                </div>
                            <?
                        }
                        ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="manager_section2">
                <div class="manager2 container">
                    <h1 id="man">Заявки<button id="open_manager2" class="manager_add_open">+</button></h1>
                    <div class="table__admin2">
                        <div class="flex_item">
                            <div class="items_manager">
                                <div class="line2">
                                    Имя
                                </div>

                                <div class="line2">
                                    номер
                                </div>

                                <div class="line2">
                                    ссылка на сайт/соц сети
                                </div>
                                <div class="line2">
                                    выбранная услуга
                                </div>

                                <div class="line2">
                                    описание услуги
                                </div>
                                <div class="line2">
                                    статус заявки
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


                                    </div>

                                </div>
                            <?
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="ad_swiper">
                    <div id="pad" class="center container">
                        <div class="ad_manager">
                            <h1 class="main_add_slider">Добавьте фотографии в слайдер</h1>
                            <button id="open_form2" class="add_forma">+</button>
                            <form class="form_ad_manager2" action="vendor/add_for_slider.php" method="post"
                                enctype="multipart/form-data" id="uploadImages">
                                <label for="">Добавьте фото в слайдер</label>
                                <input type="file" placeholder="Добавить фото" required name="img" id="">
                                <!-- <label for="">Добавьте описание</label>
                        <input placeholder="описание" name="discription" type="text"> -->
                                <button type="submit">send</button>
                            </form>
                        </div>
                    </div>
                    <div class="swiper container">
                        <h1 class="swiper-title"> </h1>

                        <div class="image-slider swiper-container">
                            <div class="image-slider__wrapper swiper-wrapper">
                                <?php
                                $slider = mysqli_query($connect, "SELECT * FROM `slider`");
                                $slider = mysqli_fetch_all($slider, MYSQLI_ASSOC);
                                foreach ($slider as $slider) {
                                    ?>
                                    <div id="slider_<?= $slider['id'] ?>" class="image-slider_slide swiper-slide">
                                        <div class="image-slider__image">
                                            <img src="<?= $slider['img'] ?>" alt="">
                                            <div class="redact_for_slider">
                                                <a id="delete_slider" onclick="deleteSlider(<?= $slider['id'] ?>)"
                                                    id="delete">УДАЛИТЬ
                                                    ФОТО</a>

                                            </div>
                                        </div>
                                    </div>
                                <? } ?>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
        </main>
        <?php
        include 'footer.php';
        ?>
    </div>
    <script src="node_modules/"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="js/main.js"></script>
</body>


</html>
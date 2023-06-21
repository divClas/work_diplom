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
        include 'vendor/connect.php';
        ?>
        <main>
            <div class="page_main-block main-block">
                <div class="main-block__container container">

                    <div class="main-block__body">
                        <div class="flex-body">
                            <h1 class="main-block__title">
                                ОБ АГЕНТСТВЕ
                            </h1>

                            <div class="main-block_text-digital">
                                <p>Мы - агентство системного маркетинга МедиаГигант.
                                    <br>
                                    <br>
                                    Наша миссия – помочь нашим клиентам преобразовать маркетинг из центра затрат в центр
                                    прибыли.
                                    <br>
                                    <br>
                                    Работаем со средним и крупным бизнесом по всей России и миру.
                                </p>
                                <div class="main-block__buttons">
                                    <a href="" class="block_buttons"> Заказать Консультацию</a>
                                </div>
                            </div>
                        </div>
                        <div class="main__bloke__image _ibg">
                            <img src="/img/kontekst.png" alt="cover">
                        </div>
                    </div>
                </div>

            </div>
            <div class="swiper">
                <h1 class="swiper-title"> Наши клиенты </h1>

                <div class="image-slider swiper-container">
                    <div class="image-slider__wrapper swiper-wrapper">
                        <?php
                        $slider = mysqli_query($connect, "SELECT * FROM `slider`");
                        $slider = mysqli_fetch_all($slider, MYSQLI_ASSOC);
                        foreach ($slider as $slider) {
                            ?>
                            <div class="image-slider_slide swiper-slide">
                                <div class="image-slider__image">
                                    <img src="<?= $slider['img'] ?>" alt="">
                                </div>

                            </div>
                        <? } ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>



            <div class="main-consultation">
                <div class="main-consultation-container container">
                    <div class="connection-main">
                        <h1 class="concultation-txt">
                            ЗАКАЖИТЕ КОНСУЛЬТАЦИЮ
                        </h1>
                        <div class="main-consultation-connection">
                            <a href="" class="social-media"><img src="img/telegram.svg" alt=""></a>
                            <a href="" class="social-media"><img src="img/whatsapp.svg" alt=""></a>
                            <div class="psp">
                                <a href="tel:+78001234567" class="connection">+78001234567</a>
                                <a href="mailto:manager@mdmarketing.ru" class="mail">manager@mdmarketing.rus</a>
                                <img src="img/man_work.png" alt="">
                            </div>
                        </div>

                    </div>
                    <?php
                    include 'form.php';
                    ?>
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
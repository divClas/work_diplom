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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

</head>

<body>

    <div class="wrapper">
        <?php
        include 'header.php';
        include 'vendor/connect.php';
        ?>
        <main class="main">
            <div class="page_main-block main-block">
                <div class="main-block__container container">
                    <div class="main-block__body">
                        <div class="flex-body">
                            <h1 class="main-block__title">
                                АГЕНТСТВО СИСТЕМНОГО МАРКЕТИНГА
                            </h1>

                            <div class="main-block_text">
                                <ul class="li_txt">
                                    <li>DIGITAL-МАРКЕТИНГ </li>
                                    <li>БРЕНДИНГ</li>
                                    <li>ДИЗАЙН</li>
                                </ul>
                                <div class="main-block__buttons">
                                    <a href="" class="block_buttons"> Заказать Консультацию</a>
                                </div>
                            </div>
                        </div>
                        <div class="main__bloke__image _ibg">
                            <img src="/img/girl.png" alt="cover">
                        </div>


                    </div>
                </div>

            </div>

            <div class="page-main-grid">
                <div class="main-grid__container container">
                    <div class="grid__text">
                        <h1 class="main-grid-title">
                            Наши Услуги
                        </h1>
                        <div class="grid-body">

                            <div class="grid-item">
                                <div class="option">
                                    <div class="title-main">
                                        <div class="icon">
                                            <img src="/img/digital-marketing.svg" alt="">
                                        </div>

                                        <h1 class="title">
                                            КОМПЛЕКСНЫЙ DIGITAL-МАРКЕТИНГ
                                        </h1>
                                    </div>
                                    <p class="discription">
                                        Связка Performance и Brandformance с упором на аналитические решения.
                                        Получайте максимальный эффект,
                                        используя комплекс современных
                                        digital-технологи...

                                    </p>
                                    <a href="digital.php" class="linked">Узнать больше</a>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="option">
                                    <div class="title-main">
                                        <div class="icon">
                                            <img src="/img/perfomance_marketing.svg" alt="">
                                        </div>

                                        <h1 class="title">
                                            PERFORMANCE
                                            МАРКЕТИНГ
                                        </h1>
                                    </div>
                                    <p class="discription">
                                        Профессиональное маркетинговое решение.
                                        Единая услуга включает в себя комплекс каналов,
                                        каждый из которых будет слаженно работать на достижение
                                        нужной цели вашего бизнеса...
                                    </p>
                                    <a href="perfomance.php" class="linked">Узнать больше</a>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="option">
                                    <div class="title-main">
                                        <div class="icon">
                                            <img src="/img/design.svg" alt="">
                                        </div>
                                        <h1 class="title">
                                            БРЕНДИНГ
                                            & ДИЗАЙН
                                        </h1>
                                    </div>
                                    <p class="discription">
                                        Разработаем платформу бренда, логотип, фирминный стиль, брендбук, упаквоку.
                                        Поможем выстроить коммуникационную стратегию бренда.
                                        Исследование целевой аудитории и построение CJM...
                                    </p>
                                    <a href="branding.php" class="linked">Узнать больше</a>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="option">
                                    <div class="title-main">
                                        <div class="icon">
                                            <img src="/img/kontekst.svg" alt="">
                                        </div>
                                        <h1 class="title">
                                            КОНТЕКСТНАЯ РЕКЛАМА
                                        </h1>
                                    </div>
                                    <p class="discription">
                                        Конеnтекстная реклама в рекламынх сетях и поиске ЯНДЕКС и GOOGLE.
                                        Реклама в YouTube, Яндекс.Картах, Янедкс.Дзене.
                                        Подготовка креативов, настройка, ведение, оптимизация
                                        компаний, аналитика
                                    </p>
                                    <a href="kontekst.php" class="linked">Узнать больше</a>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="option">
                                    <div class="title-main">
                                        <div class="icon">
                                            <img src="/img/targeting-aim.svg" alt="">
                                        </div>
                                        <h1 class="title">
                                            ТАРГЕТИРОВАННАЯ РЕКЛАМА
                                        </h1>
                                    </div>
                                    <p class="discription">
                                        Создание таргетированных рекламных кампаний в MyTarget, ВКонтакте,
                                        Telegram Ads и других известных платформах.
                                        Программатик-реклама, таргетированная видеореклама. Формирование эффективных баз
                                        Look-alike.
                                        Ретаргетинг...
                                    </p>
                                    <a href="target.php" class="linked">Узнать больше</a>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="option">
                                    <div class="title-main">
                                        <div class="icon">
                                            <img src="/img/seo.svg" alt="">
                                        </div>
                                        <h1 class="title">
                                            SEO
                                        </h1>
                                    </div>
                                    <p class="discription">
                                        Обеспечим ежемесячный рост посещаемости
                                        из Яндекс и Google. Поисковая оптимизация
                                        и продвижение сайтов в ТОП.
                                        SEO- ориентированный контент-маркетинг…
                                    </p>
                                    <a href="seo.php" class="linked">Узнать больше</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div id="company1" class="company">
                <div class="compani-main container">
                    <div class="flex-txt">
                        <div class="company-txt">

                            <h1>О компании</h1>
                            <h3>МЕДИАГИГАНТ - агентство системного маркетинга: сильный digital и branding.
                                Ежедневно помогаем нашим клиентам преобразовать маркетинг
                                из центра затрат в центр прибыли</h3>
                            <p>
                                Мы обладаем 18-летним опытом в сфере классического и digital-маркетинга,
                                бренд-менеджмента,
                                и всеми современными технологиями,
                                которые помогут успешно продвигать ваш продукт или услугу на рынке.
                            </p>
                        </div>
                        <div class="company-txt-img">
                            <img src="/img/manchik.svg" alt="">
                        </div>
                    </div>
                    <div class="project">
                        <p>Умеем работать как с масштабными проектами и стратегиями, так и с отдельными задачами.
                            Работаем по всей России и СНГ.
                        </p>
                        <div class="project-button">
                            <a href="" class="button">
                                Подробнее
                            </a>
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
                                <a href="mailto:manager@medeagigant.ru" class="mail">manager@medeagigant.rus</a>
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
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
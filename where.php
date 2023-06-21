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
            <div class="page_main-block main-block">


                <div class="map">
                    <div class="wrp">
                        <div class="map-box">
                            <h2>Наши контакты</h2>
                            <p>г. Москва, Тверская 7</p>
                            <p><a href="tel:+7 (495) 123-45-67">+78001234567</a></p>
                            <p><a href="mailto:info@site.com">manager@medeagigant.rus</a></p>
                        </div>
                    </div>
                    <div id="map"></div>
                </div>

                <script src="//api-maps.yandex.ru/2.0/?load=package.full&lang=ru-RU"></script>
                <script>
                    ymaps.ready(init);
                    function init() {
                        var myMap = new ymaps.Map("map", { center: [55.85, 37.45], zoom: 13 });

                        // Элементы управления картой
                        myMap.controls.add("zoomControl").add("typeSelector").add("mapTools");

                        ymaps.geocode("г. Москва, Тверская 7").then(function (res) {
                            var coord = res.geoObjects.get(0).geometry.getCoordinates();
                            var myPlacemark = new ymaps.Placemark(coord, {}, {
                                iconImageHref: "/img/map.png",
                                iconImageSize: [54, 74],
                                iconImageOffset: [-27, -74]
                            });
                            myMap.geoObjects.add(myPlacemark);
                            myMap.setCenter(coord);

                            // Сдвиг центра карты вправо
                            var newcoord = myMap.getGlobalPixelCenter();
                            newcoord[0] -= 150;
                            myMap.setGlobalPixelCenter(newcoord);
                        });
                    }
                </script>
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
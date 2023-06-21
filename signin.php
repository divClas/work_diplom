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
        ?>
        <main class="main">
            <div class="signin_body container">
                <div class="form_signin ">
                    <form action="vendor/signin_ss.php" class="siginin" method="post" enctype="multipart/form-data">
                        <label> Логин</label>
                        <input type="login" name="login" placeholder="Введите логин" required>
                        <label> Пароль</label>
                        <input type="password" name="password" placeholder="Введите пароль" required>
                        <button class="form_auth_button" type="submit" name="form_auth_submit">Войти</button>
                    </form>
                </div>
            </div>


        </main>

    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
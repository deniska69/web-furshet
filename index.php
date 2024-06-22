<?php
include 'env.php';
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, viewport-fit=cover, initial-scale=1, maximum-scale=1, user-scalable=0, interactive-widget=resizes-content" />
    <link rel="stylesheet" href="<?= $DIR_CSS ?>/_framework.css?ver=1" />
    <link rel="stylesheet" href="<?= $DIR_CSS ?>/_style.css?ver=1" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title><?= $TITLE ?></title>
</head>

<body>

    <!-- Header -->
    <div id="header">
        <div id="header-menu_desktop">
            <a href="">Меню</a>
            <a href="">Акции</a>
            <a href="">Доставка и оплата</a>
            <a href="">Контакты</a>
            <div id="header-basket-wrap">
                <a href="">Корзина</a>
                <div id="header-basket-badge-wrap">
                    <span id="header-basket-badge-counter">0</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Block #1 -->
    <div id="block_1">
        <div id="block_1-container">
            <img id="block_1-container-logo" src="<?= $DIR_IMAGES ?>/logo_color_500w.png" alt="logo_color_500w">
            <div id="block_1-container-description_first-wrap">
                <span id="block_1-container-description_first">Вкуснее, чем дома</span>
            </div>
            <span id="block_1-container-description_second">Быстрее, чем у плиты</span>
            <button id="block_1-container-button">Посмотреть меню</button>
        </div>
    </div>

    <!-- Scripts -->
    <!-- <script src="csv_reader.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <!-- <script src="send.js"></script> -->
</body>

</html>
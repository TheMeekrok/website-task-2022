<!DOCTYPE html>
<html lang="ru">
    <!-- Подключение к базе данных и импорт стилей, шрифтов -->
    <?php
    require './content/components/head.php';
    require_once './settings/settings.php';
    ?>
<body>
    <?php

    session_start();

    $page_format = '.php';

    require './content/components/header'.$page_format;
    // print_r($_SESSION['login']);

    $page = $_GET['page'];

    $pages = ['catalog', 'contacts', 'cart', 'profile', 'register', 'change_product'];
    $path; $error;

    if (!$page) {
        $path =  './content/pages/home'.$page_format;
    } 
    else if (in_array($page, $pages)) {
        $path = './content/pages/'.$page.$page_format;
    }
    else {
        $path = './content/pages/not_found'.$page_format;
        $error = 404;
    }
    ?>

    <div class="wrapper"><?php require($path); ?></div>
    
    <?php
    if (!$error)
        require './content/components/footer'.$page_format;
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="ru">
    <!-- Подключение к базе данных и импорт стилей, шрифтов -->
    <?php
    require './content/components/head.php';
    require_once './settings/settings.php';
    require_once './content/scripts/php/page_not_found/page_not_found.php';
    ?>
<body>
    <?php
    session_start();

    require './content/components/header'.$page_format;

    $page = $_GET['page'];

    $pages = ['catalog', 'contacts', 'cart', 'profile', 'register', 'change_product'];
    $path;

    if (!$page) {
        $path =  './content/pages/home'.$page_format;
    } 
    else if (in_array($page, $pages)) {
        $path = './content/pages/'.$page.$page_format;
    }
    else {
        $path = './content/pages/not_found'.$page_format;
    }
    ?>

    <div class="wrapper"><?php require($path); ?></div>
    
    <?php
    if (!$error)
        // WIP
        // require './content/components/footer'.$page_format;
    ?>
</body>
</html>
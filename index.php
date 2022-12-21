<!DOCTYPE html>
<html lang="ru">
    <?php
    require './content/components/head.php';
    require_once './settings/settings.php';

    ?>
<body>
    <?php
    session_start();
    $page_format = '.php';
    require './content/components/header'.$page_format;
    $page = $_GET['page'];

    $pages = ['catalog', 'contacts', 'cart', 'profile', 'register'];
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

    <div class="wrapper content-flex"><?php require($path); ?></div>
    
    <?php
    if (!$error)
        require './content/components/footer'.$page_format;
    ?>
</body>
</html>
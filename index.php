<!DOCTYPE html>
<html lang="ru">
    <?php
    require './content/components/head.php';
    ?>
<body>
    <?php
    require './content/components/nav.php';
    $page = $_GET['page'];

    $pages = ['catalog', 'contacts', 'cart', 'profile'];
    $path;
    $error;

    if (!$page) {
        $path =  './content/pages/home.php';
    } 
    else if (in_array($page, $pages)) {
        $path = './content/pages/' . $page . '.php';
    }
    else {
        $path = './content/pages/not_found.php';
        $error = 404;
    }

    require($path);
    
    if (!$error)
        require './content/components/footer.php';
    ?>
</body>
</html>
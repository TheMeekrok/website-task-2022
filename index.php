<!DOCTYPE html>
<html lang="ru">
    <?php
    require './content/components/head.html';
    ?>
<body>
    <?php
    // require './content/components/auth.html';

    require './content/components/nav.html';
    $page = $_GET['page'];

    $pages = ['catalog', 'contacts', 'cart', 'profile'];
    $path; $error;

    if (!$page) {
        $path =  './content/pages/home.html';
    } 
    else if (in_array($page, $pages)) {
        $path = './content/pages/' . $page . '.html';
    }
    else {
        $path = './content/pages/not_found.html';
        $error = 404;
    }

    require($path);
    
    if (!$error)
        require './content/components/footer.html';
    ?>
</body>
</html>
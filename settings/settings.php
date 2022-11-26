<?php
    // Подключение к базе данных
<<<<<<< HEAD
    $host = "10.0.138.5";
=======
    $host = "192.168.0.102";
>>>>>>> 48c3f93ade5ef62489a09653575b462c746d4b92
    $user = "root";
    $password = "root";
    $db = "online_shop";
    $connect = mysqli_connect($host, $user, $password, $db);

    if (!$connect) 
        die("Connection Error");

    $connect->set_charset("utf8");
?>

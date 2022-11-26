<?php
    // Подключение к базе данных
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "online_shop";
    $connect = mysqli_connect($host, $user, $password, $db);

    if (!$connect) 
        die("Connection Error");

    $connect->set_charset("utf8");
?>

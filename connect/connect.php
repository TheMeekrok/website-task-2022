<?php    
    $servername = "192.168.131.152";
    $username = "root";
    $password = "root";
    $db = "loggins";
    $connect = mysqli_connect($servername, $username, $password, $db);
    $connect->set_charset("utf8");

    if (!$connect){
        die("truble");
    }

    ?>

<?php    
    $servername = "10.0.138.5";
    $username = "root";
    $password = "";
    $db = "loggins";
    $connect = mysqli_connect($servername, $username, $password, $db);
    $connect->set_charset("utf8");

    if (!$connect){
        die("truble");
    }

    ?>

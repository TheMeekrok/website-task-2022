<?php

require_once "..\..\..\..\settings\settings.php";


$login = $_POST['login'];
$password = hash('sha512', $_POST['password']);
$password_r = hash('sha512', $_POST['password_repeat']);


$query = mysqli_query($connect, "SELECT `login` FROM `users` WHERE `users`.`login` = '$login';");
$login_cor = mysqli_fetch_all($query);

if (empty($login_cor)){
    if ($password != $password_r){
        echo 'uncorrect_password';
    }
    else{
        mysqli_query($connect, " INSERT INTO `users` (`id`, `login`, `password`, `privilege`,`first_name`,`second_name`,`date`,`phone`,`mail`) 
        VALUES (NULL, '$login', '$password', NULL, NULL, NULL, NULL, NULL, NULL);");
    }
}
else{
    echo 'login_exists';
}

?>
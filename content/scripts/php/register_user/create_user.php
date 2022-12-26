<?php

require_once "..\..\..\..\settings\settings.php";


$login = $_POST['login'];
$password = hash('sha512', $_POST['password']);
$password_r = hash('sha512', $_POST['password_repeat']);

$query = mysqli_query($connect, "SELECT `login` FROM `users` WHERE `users`.`login` = '$login';");
$login_cor = mysqli_fetch_all($query);

if ($password != $password_r){
    header('Location: ..\..\..\..\index.php?page=register');
}
else if (empty($login_cor)){
    header('Location: ..\..\..\..\index.php?page=register');
}
else{
    mysqli_query($connect, " INSERT INTO `users` (`id`, `login`, `password`, `privilege`,`first_name`,`second_name`,`date`,`phone`,`mail`) 
    VALUES (NULL, '$login', '$password', NULL, NULL, NULL, NULL, NULL, NULL);");
    header('Location: ..\..\..\..\index.php');
}

?>
<?php

require_once "..\..\..\..\settings\settings.php";


$login = $_POST['login'];
$password = hash('sha256', $_POST['password']);
$password_r = hash('sha256', $_POST['password_repeat']);


if ($password != $password_r){
    header('Location: ..\..\..\..\index.php?page=register');

}
else{
    mysqli_query($connect, " INSERT INTO `users` (`id`, `login`, `password`, `privilege`,`first_name`,`second_name`,`date`,`phone`,`mail`) 
    VALUES (NULL, '$login', '$password', NULL, NULL, NULL, NULL, NULL, NULL);");
    header('Location: ..\..\..\..\index.php');
}

?>
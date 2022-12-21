<?php
session_start();

require_once "..\..\settings\settings.php";


$login = $_POST['login'];
$password = $_POST['password'];
$password_r = $_POST['password_repeat'];



if ($password != $password_r){
    header('Location: ..\..\index.php?page=register');
}
else{
    mysqli_query($connect, " INSERT INTO `users` (`id`, `users`, `password`, `privilege`) VALUES (NULL, '$login', '$password', NULL);");
    $_SESSION["login"] = $login;
    
    header('Location: ..\..\index.php');
}



?>
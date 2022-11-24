<?php

require_once "..\settings\settings.php";

$login = $_POST['login'];
$password = $_POST['password'];
$id = $_POST['id'];

mysqli_query($connect, "UPDATE `users` SET `users` = '$login', `password` = '$password' WHERE `users`.`id` = '$id'");
 
header('Location: ..\users\admin.php');

?>


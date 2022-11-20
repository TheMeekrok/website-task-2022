<?php

require_once "..\settings\settings.php";

$login = $_POST['login'];
$password = $_POST['password'];
$id = $_POST['id'];

mysqli_query($connect, "UPDATE `loggins` SET `login` = '$login', `password` = '$password' WHERE `loggins`.`id` = '$id'");
 
header('Location: ..\users\admin.php');

?>


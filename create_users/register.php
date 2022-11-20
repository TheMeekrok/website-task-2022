<?php

require_once "..\settings\settings.php";

$login = $_POST['login'];
$password = $_POST['password'];
if (strlen($login) > 30 || strlen($password) > 30 || strlen($login) < 3 || strlen($password) < 3){
}
else{
    mysqli_query($connect, "INSERT INTO `loggins` (`id`, `login`, `password`) VALUES (NULL, '$login', '$password');");
}


 
header('Location: ..\sing.php');

?>
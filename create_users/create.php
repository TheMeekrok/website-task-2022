<?php

require_once "..\connect\connect.php";

$login = $_POST['login'];
$password = $_POST['password'];
if (empty($login) || empty($password) || strlen($login) > 30 || strlen($password) > 30 || strlen($login) < 3 || strlen($password) < 3  ){
    
}
else{
    mysqli_query($connect, "INSERT INTO `loggins` (`id`, `login`, `password`) VALUES (NULL, '$login', '$password');");
}


 
header('Location: ..\users\admin.php');

?>
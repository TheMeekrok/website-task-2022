<?php
    require_once "..\..\settings\settings.php";
    session_start();

    $login = $_POST['login'];
    $password = $_POST['password'];

    $users = mysqli_query($connect, "SELECT * FROM `users`");
    $users = mysqli_fetch_all($users);

    foreach ($users as $user){
        if ($user[1] == $login && $user[2] == hash('sha256', $password)){
            $_SESSION['login'] = $login;
            $_SESSION['id'] = $user[0];
        }
    }
    header('Location: ..\..\index.php');
?>

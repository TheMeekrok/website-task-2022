<?php
    require_once "..\..\settings\settings.php";
    session_start();

    $login = $_POST['login'];
    $password = $_POST['password'];

    $query = mysqli_query($connect, "SELECT * FROM `users` WHERE `users`.`login` = '$login'");
    $user= mysqli_fetch_all($query);

    if ($user[0][1] == $login && $user[0][2] == hash('sha512', $password)){
        $_SESSION['login'] = $login;
        $_SESSION['id'] = $user[0][0];
        header('Location: ..\..\index.php');
    }
    else{
        echo "incorrect_data";
    }
?>

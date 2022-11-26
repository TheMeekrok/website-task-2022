<?php    
    require_once ".\settings\settings.php";
    ?>

<!DOCTYPE html>
<html lang='ru'>

<head>
    <meta charset='utf-8'>
    <link rel="stylesheet" href="./styles/style.css">
    <title>test web</title>
    
</head>
<body>
    <div class="sing_place">
        <div class="sign_win">
            <div class="dack_but_place">
                <form action = "users\guess.php" method="post">
                    <button class="dack_but" type="submit"></button>
                </form>
                <div class="title_sign_win_place">
                    <h1 id="title_sign_win">Авторизация</h1>
                </div>
            </div>
            <form action = "vendor\sing.php" method="post">


                <div class="sign_input_pass">
                    <input class="sign_input" type="text" name="login" placeholder="Введите логин">
                </div>
                <div class="sign_input_login">
                    <input class="sign_input" type="password" name="password" placeholder="Введите пароль">
                    <img src="images/open_eye.png" class="password-control">
                    <!-- Тёма почини пж -->
                    <!-- https://snipp.ru/html-css/show-hide-password -->
                </div>
                <div class="sign_buts">
                <div class="sign_but_aign">
                    <button class ="add_but"  type="submit">Войти</button>
                </div>
            </form> 
    </div>
   
</body>
</html>



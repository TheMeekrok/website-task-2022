<?php    
require_once "..\settings\settings.php";

$bool = false;
$login = $_POST['login'];
$password = $_POST['password'];


if (empty($login) || empty($password) || strlen($login) > 30 || strlen($password) > 30 || strlen($login) < 3 || strlen($password) < 3  ){
    
}
else{
    $pruducts = mysqli_query($connect, "SELECT * FROM `users`");
    $pruducts = mysqli_fetch_all($pruducts);
    foreach ($pruducts as $loggins){
        #Проверка на админа
        #Можно потом либо по индексу админа проверять либо добавить в базу колонку с пометкой на админа
        if ($loggins[1] == $login && $loggins[2] == $password && $loggins[3] == 1){
            $bool = true;
            header('Location: ..\users\admin.php');
        }
        #Проверка на существующего пользователя
        else if ($loggins[1] == $login && $loggins[2] == $password){
            $bool = true;
            header('Location: ..\users\inlogin.php');
        }

    }

}

if ($bool == false){
    header('Location: ..\sing.php');
}



?>


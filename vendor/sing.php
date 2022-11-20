<?php    
    require_once '..\connect\connect.php';

$bool = false;
$login = $_POST['login'];
$password = $_POST['password'];

if (empty($login) || empty($password) || strlen($login) > 30 || strlen($password) > 30 || strlen($login) < 3 || strlen($password) < 3  ){
    
}
else{
    $pruducts = mysqli_query($connect, "SELECT * FROM `loggins`");
    $pruducts = mysqli_fetch_all($pruducts);
    foreach ($pruducts as $loggins){
        #Проверка на админа
        #Можно потом либо по индексу админа проверять либо добавить в базу колонку с пометкой на админа
        if ($login == "Danil" && $password == "paww"){
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


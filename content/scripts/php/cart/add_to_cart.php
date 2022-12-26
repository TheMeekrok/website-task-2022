<?php

session_start();

$id_product = $_POST['productID'];
$id_user = $_SESSION['id'];
$category = $_POST['category'];

// Если неавторизированный пользователь
// попытается добавить товар в корзину, то его
// перекинет на страницу корзины, где его предупредят
// о том, что он не не авторизирован
if(empty($id_user)) {
    header('Location: ../../../../index.php?page=cart');
    exit();
}

require_once "../../../../settings/settings.php";

$cart = mysqli_query($connect, "SELECT * FROM `cart`");
$carts = mysqli_fetch_all($cart);
$flag = false;

foreach ($carts as $cart){
    if ($cart[1] == $id_user && $cart[2] == $id_product){    
        $new_count = $cart[3] + 1;
        mysqli_query($connect, "UPDATE `cart` SET `count` = '$new_count' WHERE `cart`.`id` = $cart[0];");
        $flag = true;
    }  
}


if ($flag == false){
    mysqli_query($connect, "INSERT INTO `cart` (`id`, `id_user`, `id_product`) 
    VALUES (NULL,'$id_user','$id_product');");
}

// if (empty($category)){
//     header('Location: ../../../../index.php?page=catalog');
// }
// else{
//     header('Location: ../../../../index.php?page=catalog&category='.$category);
// }
?>

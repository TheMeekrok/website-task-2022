<?php

require_once "..\..\..\settings\settings.php";

session_start();
$id_product = $_POST['id'];
$id_user = $_SESSION['id'];


$cart = mysqli_query($connect, "SELECT * FROM `cart`");
$carts = mysqli_fetch_all($cart);
$flaga = false;

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


header('Location: ..\..\..\index.php?page=catalog');

?>

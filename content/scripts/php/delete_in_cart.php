<?php

require_once "..\..\..\settings\settings.php";

session_start();
$id_product = $_POST['id'];
$id_user = $_SESSION['id'];

$cart = mysqli_query($connect, "SELECT * FROM `cart`");
$carts = mysqli_fetch_all($cart);

foreach ($carts as $cart){
    if ($cart[1] == $id_user && $cart[2] == $id_product && $cart[3] == 1){
        mysqli_query($connect, "DELETE FROM cart WHERE `cart`.`id` = $cart[0]");
    } 
    if ($cart[1] == $id_user && $cart[2] == $id_product && $cart[3] > 1){    
        $new_count = $cart[3] - 1;
        mysqli_query($connect, "UPDATE `cart` SET `count` = '$new_count' WHERE `cart`.`id` = $cart[0];");
    } 
}


header('Location: ..\..\..\index.php?page=catalog');

?>

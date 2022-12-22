<?php

require_once "../../../../settings/settings.php";

session_start();
$id_user = $_SESSION['id'];

// Очистка корзины для данного пользователя
$query = "DELETE FROM cart WHERE `cart`.`id_user`=$id_user";
$cart = mysqli_query($connect, $query);

header('Location: ../../../../index.php?page=cart');

?>
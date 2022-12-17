<?php

require_once "..\..\settings\settings.php";

$title = $_POST['title'];
$price = $_POST['price'];
$description = $_POST['description'];
$image = $_POST['image'];
$raiting = $_POST['raiting'];
$count = $_POST['count'];

mysqli_query($connect, " INSERT INTO `products` (`id`, `title`, `price`, `description`, `image`, `rating`, `count`) VALUES (NULL,'$title','$price','$description','$image','$raiting','$count');");

header('Location: ..\..\index.php?page=cart');

?>
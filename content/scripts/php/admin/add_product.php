<?php
require_once "../../../../settings/settings.php";

$title = $_POST['title'];
$price = $_POST['price'];
$description = $_POST['description'];
$image = $_FILES['userfile']['name'];
$raiting = $_POST['raiting'];
$count = $_POST['count'];
$category = $_POST['category'];

$uploaddir = "..\..\..\images\image_product\ ";
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile);




mysqli_query($connect, "INSERT INTO `products` (`id`, `title`, `price`, `description`, `image`, `rating`, `count`, `category`) 
    VALUES (NULL,'$title','$price','$description','$image','$raiting','$count','$category');");

header('Location: ../../../../../index.php?page=profile');
?>
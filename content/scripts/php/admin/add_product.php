<?php
require_once "../../../../settings/settings.php";

$title = $_POST['title'];
$price = $_POST['price'];
$description = $_POST['description'];
$image = $_FILES['userfile']['name'];
$rating = $_POST['rating'];
$count = $_POST['count'];
$category = $_POST['category'];


$upload_dir = "..\..\..\images\image_product\ ";
$upload_file = $upload_dir . basename($_FILES['userfile']['name']);
move_uploaded_file($_FILES['userfile']['tmp_name'], $upload_file);


mysqli_query($connect, "INSERT INTO `products` (`id`, `title`, `price`, `description`, `image`, `rating`, `count`, `category`) 
    VALUES (NULL,'$title','$price','$description','$image','$rating','$count','$category');");

header('Location: ../../../../../index.php?page=profile');
?>
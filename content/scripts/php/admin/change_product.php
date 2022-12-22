<?php
require_once "../../../../settings/settings.php";

$id = $_POST['id'];
$title = $_POST['title'];
$price = $_POST['price'];
$description = $_POST['description'];
$image = $_POST['image'];
$rating = $_POST['rating'];
$count = $_POST['count'];
$category = $_POST['category'];

print_r($_POST);

mysqli_query($connect, "UPDATE `products` SET `title` = '$title', `price` = '$price', `description` = '$description', `image` = '$image', `rating` = '$rating', `count` = '$count', `category` = '$category' WHERE `products`.`id` = '$id'");

// header('Location: ../../../../../index.php?page=profile');
?>


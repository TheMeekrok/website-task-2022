<?php
require_once "../../../../settings/settings.php";

session_start();
$login = $_SESSION['login'];
$query = "SELECT `login` FROM `users` WHERE `users`.`login`=$login AND `privilege`=1;";
$result = mysqli_query($connect, $query);

// handle_result_for_page($result);

$id = $_POST['id'];
$title = $_POST['title'];
$price = $_POST['price'];
$description = $_POST['description'];
$image = $_FILES['userfile']['name'];
$rating = $_POST['raiting'];
$count = $_POST['count'];
$category = $_POST['category'];

$uploaddir = "..\..\..\images\image_product\ ";
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile);


mysqli_query($connect, "UPDATE `products` SET `title` = '$title', `price` = '$price', `description` = '$description', `image` = '$image', `rating` = '$rating', `count` = '$count', `category` = '$category' WHERE `products`.`id` = '$id'");

header('Location: ../../../../../index.php?page=profile');
?>


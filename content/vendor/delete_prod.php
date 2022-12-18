<?php

require_once "..\..\settings\settings.php";
$id = $_GET['id'];
mysqli_query($connect, "DELETE FROM `products` WHERE `products`.`id` = '$id'");

header('Location: ..\..\index.php?page=profile');
?>
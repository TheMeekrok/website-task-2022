<?php

require_once "connect\connect.php";

$id = $_GET['id'];

mysqli_query($connect, "DELETE FROM `loggins` WHERE `loggins`.`id` = '$id'");

header('Location: users\admin.php');

?>

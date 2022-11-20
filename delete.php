<?php

require_once "..\settings\settings.php";

$id = $_GET['id'];

mysqli_query($connect, "DELETE FROM `loggins` WHERE `loggins`.`id` = '$id'");

header('Location: users\admin.php');

?>

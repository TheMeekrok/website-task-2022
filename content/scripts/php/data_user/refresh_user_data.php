<?php
require_once "../../../../settings/settings.php";

session_start();

$first_name = $_POST['personFirstName'];
$second_name = $_POST['personSecondName'];
$date = $_POST['personDateOfBirth'];
$phone = $_POST['personPhoneNumber'];
$mail = $_POST['personEMail'];
$id_user = $_SESSION['id'];
$flag = false;


mysqli_query($connect, "UPDATE `users` 
    SET 
        `users`.`first_name` = '$first_name', 
        `users`.`second_name` = '$second_name', 
        `users`.`date` = '$date', 
        `users`.`phone` = '$phone', 
        `users`.`mail` = '$mail' 
    WHERE 
        `users`.`id` = '$id_user';");

header('Location: ../../../../../index.php?page=profile');
?>
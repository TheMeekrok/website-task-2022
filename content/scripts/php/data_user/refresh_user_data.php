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

$data = mysqli_query($connect, "SELECT * FROM `users`");
$data_arr = mysqli_fetch_all($data);

foreach ($data_arr as $data){
    if ($id_user == $data[0]){
        mysqli_query($connect, "UPDATE `users` SET `first_name` = '$first_name', `second_name` = '$second_name', 
            `date` = '$date', `phone` = '$phone', `mail` = '$mail' WHERE `users`.`id` = $id_user;");
    }
}


header('Location: ../../../../../index.php?page=profile');
?>
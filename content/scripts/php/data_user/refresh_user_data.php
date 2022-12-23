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

$data = mysqli_query($connect, "SELECT * FROM `data_user`");
$data_arr = mysqli_fetch_all($data);

foreach ($data_arr as $data){
    if ($id_user == $data[1]){
        $id_data = $data[0];
        mysqli_query($connect, "UPDATE `data_user` SET `first_name` = '$first_name', `second_name` = '$second_name', 
            `date` = '$date', `phone` = '$phone', `mail` = '$mail' WHERE `data_user`.`id` = $id_data;");
        $flag = true;
    }
}

if ($flag == false){
    mysqli_query($connect, "INSERT INTO `data_user` (`id`, `id_user`, `first_name`, `second_name`, `date`, `phone`, `mail`) 
        VALUES (NULL, '$id_user', '$first_name', '$second_name', '$date', '$phone', '$mail');");
}

header('Location: ../../../../../index.php?page=profile');
?>
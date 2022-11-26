<?php
    require_once ".\settings\settings.php";

    $id = $_GET['id'];
    $users = mysqli_query($connect, "SELECT * FROM `users` WHERE `id` = '$id'");
    $users = mysqli_fetch_assoc($users);
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./styles/style.css">
    <title>Update Product</title>
</head>
<body>

    <h1>Update Product</h1>
    <form action = "vendor\update.php" method="post">

            <input type ="text" name="id" value="<?=$id?>" style="display:none">
            <titlee>
            <p>Login</p>
            <input type="text" name="login"  value="<?=$users['users']?>">
            </titlee>
            <description>
            <p>Password</p>
            <input type="text" name="password" value="<?=$users['password']?>">
            </description>
            <br>
            <button class ="add_but" type="submit">Update login</button>
    </form>
</body>
</html>
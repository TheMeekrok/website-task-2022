<?php
require_once "..\..\settings\settings.php";


    $id = $_GET['id'];
    $prod = mysqli_query($connect, "SELECT * FROM `products` WHERE `id` = '$id'");
    $prod = mysqli_fetch_assoc($prod);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../styles/add_prod.css">
    <title>Update Product</title>
</head>
<body>

    <h1>Update Product</h1>
    <form action = "..\vendor\update_prod.php" method="post">

            <input pattern="[^@*#₽_&-+()/|'!?<>!{}\[\]]{3,}" required type ="text" name="id" value="<?=$id?>" style="display:none">
            <description>
            <p>title</p>
            <input pattern="[^@*#₽_&-+()/|'!?<>!{}\[\]]{3,}"  required class = "indent" type="text" name="title" value="<?=$prod['title']?>">
            <p>category</p>
            <input pattern="[^@*#₽_&-+()/|'!?<>!{}\[\]]{3,}" required class = "indent" type="text" name="category" value="<?=$prod['category']?>">
            <p>price</p>
            <input pattern="^\d+(?:[.,]\d+)?$" required class = "indent" type="text" name="price" value="<?=$prod['price']?>">
            <p>description</p>
            <input pattern="[^@*#₽_&-+()/|'!?<>!{}\[\]]{3,}" required class = "indent" type="text" name="description" value="<?=$prod['description']?>">
            <p>image</p>
            <input required class = "indent" type="text" name="image" value="<?=$prod['image']?>">
            <p>raiting</p>
            <input pattern="^\d+(?:[.,]\d+)?$" required class = "indent" type="text" name="rating" value="<?=$prod['rating']?>">
            <p>count</p>
            <input pattern="^[0-9]+$" required class = "indent" type="text" name="count" value="<?=$prod['count']?>">
            </description>
            <br>
            <button class ="add_but" type="submit">Update Product</button>
    </form>
</body>
</html>
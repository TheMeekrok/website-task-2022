<?php
    $id = $_GET['id'];
    $prod = mysqli_query($connect, "SELECT * FROM `products` WHERE `id` = '$id'");
    $prod = mysqli_fetch_assoc($prod);
?>

<div class="__space-40"></div>
<h1>Изменить товар</h1>
<div class="__space-10"></div>
<div class="container-flex admin-products-form">
    <form action="./content/scripts/php/update_product/update_product.php" method="post">
        <input type ="text" name="id" value="<?=$id?>" style="display:none">
        <table>
            <tr>
                <td><h4>Имя<br><h6>Полное наименование</h6></h4></td>
                <td><input class="user-input" type="text" name="title" value="<?=$prod['title']?>"></td>
            </tr>
            <tr>
                <td><h4>Категория</h4></td>
                <td><input class="user-input" type="text" name="category" value="<?=$prod['category']?>"></td>
            </tr>
            <tr>
                <td><h4>Цена</h4><br><h6>(в рублях)</h6></td>
                <td><input class="user-input" type="text" name="price" value="<?=$prod['price']?>"></td>
            </tr>
            <tr>
                <td><h4>Описание<br><h6>не более 1000 символов</h6></h4></td>
                <td><textarea class="user-input" type="text" name="description"></textarea></td>
            </tr>
            <tr>
                <td><h4>Ссылка на изображение</h4></td>
                <td><textarea class="user-input" type="text" name="image"></textarea></td>
            </tr>
            <tr>
                <td><h4>Оценка</h4></td>
                <td><input class="user-input" type="text" name="raiting" value="<?=$prod['rating']?>"></td>
            </tr>
            <tr>
                <td><h4>Количество</h4></td>
                <td><input class="user-input" type="text" name="count" value="<?=$prod['count']?>"></td>
            </tr>        
        </table>
        <div class="__space-10"></div>
        <div class="container-flex"><button class="button proceed-button" type="submit">Изменить</button></div>
        <div class="__space-40"></div>
    </form>
</div>

<div class="__space-40"></div>
<h1>Добро пожаловать в Family Shop!</h1>
<div class="__space-10"></div>
<h2>Популярные</h2>
<div class="__space-10"></div>

<?php
$products_query = mysqli_query($connect, "SELECT * FROM `products` ORDER BY `products`.`rating` DESC LIMIT 10");
$products_array = mysqli_fetch_all($products_query);
?>

<style>
    .catalog {
        width: 100%;
    }
    .catalog-item-image {
        width: 150px; height: 214px;
    }
    .__catalog-item-tr {
        width: 100%;
        transition: 0.5s;
    }
    .__catalog-item-tr:hover {
        background-color: #e2e2e2;
    }
    .__catalog-item-td {
        margin: 10px;
    }
    .catalog-item-title{
        font-weight: bold;
    }
    .__catalog-block {
        margin: 10px;
    }
    .catalog-quantity {
        position: absolute;
        bottom: 0px;
    }
    .catalog-price {
        width: 15%;
    }
    .catalog-button {
        width: 100%;
    }
    .image-td {
        width: 10%;
    }
    .info-td {
        display: flex;
        position: relative;
    }
</style>

<table class="catalog">
    <?php
    foreach ($products_array as $prod){
    ?>
    <tr class="__catalog-item-tr">
        <!-- Изображение -->
        <td class="image-td __catalog-item-td">
            <img class="catalog-item-image" src="<?=$images_directory.$prod[4]?>"/>
        </td>
        <!-- Информация -->
        <td class="info-td __catalog-item-td column">
            <div class="containter-flex flex-start column">
                <div class="container-flex flex-start">
                    <h4 class="catalog-item-title"><?=cut_string($prod[1], 100)?></h4>
                </div>
                <div class="container-flex flex-start">
                    <p class=""><?=cut_string($prod[3], 300)?></p>
                </div>
            </div>
            <div class="__space-40"></div>
            <div class="catalog-quantity container-flex flex-start">
                <h5>На складе: <?= $prod[6] ?></h5>
            </div>
        </td>

        <!-- Кнопка добавить в корзину -->
        <td class="catalog-price __catalog-item-td">
            <div class="container-flex column">
                <h4 class="catalog-item-title"><?=cut_string($prod[2], 100)?>₽</h4>
                <form class= "catalog-button" action = "./content/scripts/php/cart/add_to_cart.php" method="post">
                    <input type="text" name="id" value="<?=$prod[0]?>" style="display:none">
                    <button  class="button proceed-button" type="submit">В корзину</button>
                </form>
            </div>
        </td>
    </tr>
    <?php
    }
    ?>
</table>
<div class="__space-40"></div>  
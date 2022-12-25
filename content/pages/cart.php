<div class="__space-40"></div>
<h1>Корзина</h1>
<div class="__space-10"></div>

<?php
$login = $_SESSION['login'];
if (!$login) { ?>
<div class="container-flex"><h2>Войдите, или <a href="index.php?page=register">зарегистрируйтесь</a>, чтобы совершать покупки.</h2></div>
<?php 
exit(-1);
} ?>

<style>
    .user-cart {
        justify-content: flex-start;
        align-items: flex-start;
    }
    .cart-item-image {
        width: 75px;
        height: 107px;
    }
    .__cart-item-tr {
        transition: 0.5s;
    }
    .__cart-item-tr:hover {
        background-color: #e2e2e2;
    }
    .__cart-item-td {
        margin: 10px;
    }
    .cart-item-title{
        font-weight: bold;
    }
    .items-sum {
        font-weight: bold;
    }
    .delete-button {
        width: 25px;
        height: 25px;
        margin: 5px;
    }
    .delete-button:hover {
        opacity: 1;
        background-color: #FF3900;
    }
    .order {
        width: 70%;
    }
    .order-detalis {
        height: 100%; width: 30%;
    }
    .__cart-block {
        margin: 10px;
    }
    .image-td {
        width: 10%;
    }
    .info-td {
        width: 90%;
    }
    @media screen and (max-width: 767px) {
        .cart-item-image {
            width: 59px; height: 85px;
        }
        .__cart-item-td {
            margin: 0px;
        }
        .order {
            width: 100%;
        }
        .__cart-block {
            margin: 0px;
        }
        .user-cart {
            flex-flow: column;
        }
        .order-detalis {
            width: 100%;
        }
    }
</style>

<div class="user-cart container-flex">
    <?php
    $current_user = $_SESSION['id'];
    $query = "SELECT * FROM `cart` JOIN `products` ON `products`.`id`=`cart`.`id_product` WHERE `cart`.`id_user`=$current_user;";

    $products = mysqli_query($connect, $query);

    $products = mysqli_fetch_all($products);

    if (!$products) { ?>
        <div class="container-flex"><h3>Пока здесь ничего нет</h3></div>
    <?php    
    } 

    $images_directory = "./content/images/image_product/ ";

    $items_sum = 0;
    ?>
    <table class="order __cart-block">
        <?php
        foreach ($products as $prod){

            // Подсчёт суммы заказа
            $items_sum += $prod[6] * $prod[3];
            ?>
            <tr class="__cart-item-tr">
                <!-- Изображение -->
                <td class="image-td"><img class="cart-item-image __cart-item" src="<?=$images_directory.$prod[8]?>"/></td>
                <!-- Информация -->
                <td class="info-td">
                    <div class="container-flex flex-start __cart-item">
                        <h4 class="cart-item-title"><?=cut_string($prod[5], 100)?></h4>
                    </div>
                </td>
                <!-- Цена -->
                <td>
                    <div class="container-flex flex-start __cart-item">
                        <h4 class="cart-item-title"><?=cut_string($prod[6], 100)?>₽</h4>
                    </div>
                </td>
                <!-- Количество -->
                <td>
                    <div class="container-flex flex-start __cart-item">
                        <h4 class="cart-item-title"><?=cut_string($prod[3], 100)?></h4>
                    </div>
                </td>
                <!-- Кнопка удалить -->
                <td>
                    <form action="./content/scripts/php/cart/delete_from_cart.php" method="post">
                        <input type ="text" name="id" value="<?=$prod[2]?>" style="display:none">
                        <div class="container-flex">
                            <button type="submit" class="button delete-button container-flex">
                                <img src="./content/images/nav/close.svg">
                            </button>
                        </div>
                    </form>
                </td>
            </tr>
            <?php
            }
        ?>
    </table>
    <?php
    if ($products) { ?>
    <div class="container-flex flex-start column order-detalis __cart-block">
        <h2 class="text-center">Проверьте Ваш заказ</h2>
        <div class="__space-40"></div>
        <h4 class="items-sum"><?= $items_sum ?>₽</h4>
        <form action="./content/scripts/php/cart/cart_checkout.php" method="post">
            <div class="container-flex">
                <button class="button proceed-button" type="submit">Оформить заказ</button>
            </div>
        </form>
    </div>
    <?php
    } ?>
</div>
<div class="__space-40"></div>
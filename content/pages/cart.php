<div class="__space-40"></div>
<h1>Корзина</h1>
<div class="__space-10"></div>

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
    .delete-button {
        width: 15px;
        height: 15px;
        padding: 5px;
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
        /* background: #FFBF73; */
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
</style>

<div class="user-cart container-flex">
    <table class="order __cart-block">
        <?php
        function cut_string($string, $max_symbols) {
            if (strlen($string) > $max_symbols) {
                $string = substr($string, 0, $max_symbols).'...';
            }
        
            return $string;
        }

        $current_user = $_SESSION['id'];
        $query = "SELECT * FROM `cart` JOIN `products` ON `products`.`id`=`cart`.`id_product` WHERE `cart`.`id_user`=$current_user;";

        $products = mysqli_query($connect, $query);

        $products = mysqli_fetch_all($products);

        foreach ($products as $prod){
            ?>
            <tr class="__cart-item-tr">
                <!-- Изображение -->
                <td class="image-td"><img class="cart-item-image __cart-item" src="<?=$prod[8]?>"/></td>
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
                            <button class="button delete-button" type="submit">
                                <img class="icon" src="./content/images/admin_panel/close.svg">
                            </button>
                        </div>
                    </form>
                </td>
            </tr>
            <?php
            }
        ?>
    </table>
    <div class="container-flex flex-start column order-detalis __cart-block">
        <h2 class="text-center">Детали заказа</h2>
        <div class="__space-40"></div>
        <h4>(подсчитать)₽</h4>
        <div class="container-flex"><button class="button proceed-button" type="submit">Оформить заказ</button></div>
    </div>
</div>
<div class="__space-40"></div>
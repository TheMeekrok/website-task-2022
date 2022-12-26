<div class="__space-40"></div>
<h1>Каталог</h1>

<?php
$products_query = ""; 

$category_query = mysqli_query($connect, "SELECT DISTINCT `category` FROM `products`");

$categories_array = mysqli_fetch_all($category_query);
foreach ($categories_array as $category) { ?>
    <h5><a href = "index.php?page=catalog&category=<?= $category[0]?>" ><?= $category[0] ?></a></h5>
<?php
}
?>
<h5><a href = "index.php?page=catalog" >Все</a></h5>
<?php

$current_category = $_GET['category'];

if (isset($current_category)) {
    handle_result_for_page(in_array(array($current_category), $categories_array));
    $products_query = "SELECT * FROM `products` WHERE `products`.`category`='$current_category';";
}
else {
    $products_query = "SELECT * FROM `products`";
}

$products_query = mysqli_query($connect, $products_query);
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
        margin: 10px;
    }

    @media screen and (max-width: 767px) {
        .catalog-item-image {
            width: 63px; height: 90px;
        }
        .__catalog-item-td {
            margin: 0px;
        }
        .__catalog-block {
            margin: 0px;
        }
        .catalog-description {
            display: none;
        }
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
                <div class="catalog-description container-flex flex-start">
                    <p class=""><?=cut_string($prod[3], 300)?></p>
                </div>
            </div>
            <div class="__space-40"></div>
            <div class="container-flex flex-start">
                <h5>На складе: <?= $prod[6] ?></h5>
            </div>
        </td>

        <!-- Кнопка добавить в корзину -->
        <td class="catalog-price __catalog-item-td">
            <div class="container-flex column">
                <h4 class="catalog-item-title"><?=cut_string($prod[2], 100)?>₽</h4>
                <form class="catalog-button" id="addToCartID<?=$prod[0]?>">
                    <input type="text" name="productID" value="<?=$prod[0]?>" style="display:none">
                    <button  class="button proceed-button" type="submit">В корзину</button>
                </form>
                <h5 class="container-flex" id="serverResponse<?=$prod[0]?>"></h5>
                <script>
                    $('#addToCartID<?=$prod[0]?>').submit(function (e) { 
                        e.preventDefault();

                        const responseContainer = $('#serverResponse<?=$prod[0]?>');
                        responseContainer.hide();

                        function setServerResponse(message) {
                            responseContainer.text(message);
                            setTimeout(() => {
                                responseContainer.hide(200);
                                responseContainer.text("");
                            }, 700);
                            responseContainer.show(200);
                        };
                        
                        $.ajax({
                            url: "content/scripts/php/cart/add_to_cart.php",
                            type: 'POST',
                            data: $(this).serialize(),
                            success: function() {
                                setServerResponse('Добавлено!');
                            },
                            error: function() {
                                setServerResponse('Ошибка добавления!');
                            },
                        });
                    });
                </script>
            </div>
        </td>
    </tr>
    <?php
    }
    ?>
</table>
<div class="__space-40"></div>         

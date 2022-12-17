<div class="wrapper content-flex">
    <?php
    $products = mysqli_query($connect, "SELECT * FROM `products`");
    $products = mysqli_fetch_all($products);

    foreach ($products as $prod) { ?>
    <div class="container-flex product">
        <img class="product-image __product-block" src="<?= $prod[4] ?>"/>
        <div class="__product-block container-flex product-info __relative">
            <div class="__space-40"></div>
            <h4 class="product-title"><?= $prod[1] ?></h4>
            <h5 class="product-description"><?= $prod[3] ?></h5>
            <h5 class="product-rating">Рейтинг <?= $prod[5] ?></h5>
        </div>
        <div class="container-flex product-button-sect __product-block">
            <h4 class="product-price"><?= $prod[2] ?>₽</h4>
            <button class="button add-to-cart-button" type="submit">В корзину</button>
        </div>
    </div>
    <?php }
    require './content/components/footer.php';
    ?>
</div>
<div class="__space-40"></div>
<h1>Каталог</h1>
<?php
$query = mysqli_query($connect, "SELECT * FROM `products`");
$products = mysqli_fetch_all($query);

function cut_string($string, $max_symbols) {
    if (strlen($string) > $max_symbols) {
        $string = substr($string, 0, $max_symbols).'...';
    }

    return $string;
}

foreach ($products as $prod) {

    $title = cut_string($prod[1], 100);
    $description = cut_string($prod[3], 300);

    ?>

<div class="container-flex product">
    <img class="product-image __product-block" src="<?= $prod[4] ?>"/>
    <div class="__product-block container-flex product-info __relative">
        <div class="__space-40"></div>
        <h4 class="product-title"><?= $title ?></h4>
        <h5 class="product-description"><?= $description ?></h5>
        <h5 class="product-rating">Рейтинг <?= $prod[5] ?></h5>
    </div>
    <div class="container-flex product-button-sect __product-block">
        <h4 class="product-price"><?= $prod[2] ?>₽</h4>
        <form class="button add-to-cart-button" action = ".\content\scripts\php\add_in_cart.php" method="post">
            <input type ="text" name="id" value = "<?=$prod[0]?>" style="display:none">
            <button  class="button add-to-cart-button" type="submit">В корзину</button>
        </form>
    </div>
</div>
<?php } ?>
<div class="__space-40"></div>
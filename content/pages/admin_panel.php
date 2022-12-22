<style>
.admin-products-th{
    background: #FFA840;
    border: 0.5px solid black;
}
.admin-products-td{
    background: #FFBF73;
    border: 0.5px solid black;
}
</style>

<div class="__space-40"></div>
<div>
    <h1>Управление</h1>
    <div class="__space-10"></div>
    <table class="admin-products-table">
        <tr>
            <th class="admin-products-th"><h5>ID</h5></th>
            <th class="admin-products-th"><h5>Имя</h5></th>
            <th class="admin-products-th"><h5>Категория</h5></th>
            <th class="admin-products-th"><h5>Цена</h5></th>
            <th class="admin-products-th"><h5>Описание</h5></th>
            <th class="admin-products-th"><h5>Ссылка на изображение</h5></th>
            <th class="admin-products-th"><h5>Оценка</h5></th>
            <th class="admin-products-th"><h5>Количество</h5></th>
        </tr>
        <?php
            function cut_string($string, $max_symbols) {
                if (strlen($string) > $max_symbols) {
                    $string = substr($string, 0, $max_symbols).'...';
                }
            
                return $string;
            }

            $products = mysqli_query($connect, "SELECT * FROM `products`");
            $products = mysqli_fetch_all($products);
            foreach ($products as $prod){
                ?>
                <tr>
                    <td class="admin-products-td"><p><?= cut_string($prod[0], 100) ?></p></td>
                    <td class="admin-products-td"><p><?= cut_string($prod[1], 100) ?></p></td>
                    <td class="admin-products-td"><p><?= cut_string($prod[7], 100) ?></p></td>
                    <td class="admin-products-td"><p><?= cut_string($prod[2], 100) ?></p></td>    
                    <td class="admin-products-td"><p><?= cut_string($prod[3], 100) ?></p></td>
                    <td class="admin-products-td"><p><?= cut_string($prod[4], 100) ?></p></td>
                    <td class="admin-products-td"><p><?= cut_string($prod[5], 100) ?></p></td>
                    <td class="admin-products-td"><p><?= cut_string($prod[6], 100) ?></p></td>
                    <td class="admin-products-td"><a href="index.php?page=change_product&id=<?= $prod[0] ?>">
                        <img class="icon" src="./content/images/admin_panel/change.svg">
                    </td>
                    <td class="admin-products-td"><a href="./content/scripts/php/admin/delete_product.php?id=<?= $prod[0] ?>">
                        <img class="icon" src="./content/images/admin_panel/close.svg">
                    </td>
                </tr>
            <?php
            }
        ?>
    </table>
    <div class="__space-40"></div>
    <h2>Добавление товара</h2>
    <div class="__space-10"></div>
    <div class="container-flex flex-start">
        <form enctype="multipart/form-data" action="./content/scripts/php/admin/add_product.php" method="post">
            <table>
                <tr>
                    <td><h4>Имя<br><h6>Полное наименование</h6></h4></td>
                    <td><input class="user-input" type="text" name="title"></td>
                </tr>
                <tr>
                    <td><h4>Категория</h4></td>
                    <td><input class="user-input" type="text" name="category"></td>
                </tr>
                <tr>
                    <td><h4>Цена</h4><br><h6>(в рублях)</h6></td>
                    <td><input class="user-input" type="text" name="price"></td>
                </tr>
                <tr>
                    <td><h4>Описание<br><h6>не более 1000 символов</h6></h4></td>
                    <td><textarea class="user-input" type="text" name="description"></textarea></td>
                </tr>
                <tr>
                    <td><h4>  Отправить изображение:</h4></td>
                    <td><input name="userfile" type="file"/></td>
                </tr>
                <tr>
                    <td><h4>Оценка</h4></td>
                    <td><input class="user-input" type="text" name="rating"></td>
                </tr>
                <tr>
                    <td><h4>Количество</h4></td>
                    <td><input class="user-input" type="text" name="count"></td>
                </tr>        
            </table>
            <div class="__space-10"></div>
            <div class="container-flex"><button class="button proceed-button" type="submit">Добавить новый продукт</button></div>
            <div class="__space-40"></div>
        </form>
    </div>
</div>
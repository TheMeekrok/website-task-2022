
<!DOCTYPE html>
<html lang='ru'>

<head>
    <meta charset='utf-8'>
    <link rel="stylesheet" href="./content/styles/add_prod.css">
</head>

<body>
    <table>
        <tr>

            <th>id</th>
            <th>title</th>
            <th>price</th>
            <th>description</th>
            <th>image</th>
            <th>raiting</th>
            <th>count</th>

        </tr>
        <?php
            $products = mysqli_query($connect, "SELECT * FROM `products`");
            $products = mysqli_fetch_all($products);
            foreach ($products as $prod){
                ?>
                <tr>
                    <td><?= $prod[0] ?></td>
                    <td><?= $prod[1] ?></td>
                    <td><?= $prod[2] ?></td>    
                    <td><?= $prod[3] ?></td>
                    <td><?= $prod[4] ?></td>
                    <td><?= $prod[5] ?></td>
                    <td><?= $prod[6] ?></td>
                </tr>
            <?php
            }
        ?>
    </table>
    
    <form action = ".\content\vendor\create_prod.php" method="post">
        <description>
            <p>title</p>
            <input class = "indent" type="text" name="title">
            <p>price</p>
            <input class = "indent" type="text" name="price">
            <p>description</p>
            <input class = "indent" type="text" name="description">
            <p>image</p>
            <input class = "indent" type="text" name="image">
            <p>raiting</p>
            <input class = "indent" type="text" name="raiting">
            <p>count</p>
            <input class = "indent" type="text" name="count">
        </description>
        <br>
        <button class ="add_but" type="submit">Add new prod</button>
    </form>
    <br>




</body>
</html>



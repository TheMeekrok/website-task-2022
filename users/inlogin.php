<?php    
    require_once "..\settings\settings.php";
?>

<!DOCTYPE html>
<html lang='ru'>

<head>
    <meta charset='utf-8'>
    <link rel="stylesheet" href="../styles/style.css">
    <title>test web</title>
    
</head>

<body>
    <h1>Logins registered on the site</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Login</th>

        </tr>
        <?php
            $users = mysqli_query($connect, "SELECT * FROM `users`");
            $users = mysqli_fetch_all($users);
            foreach ($users as $loggins){
                ?>
                <tr>
                    <td><?= $loggins[0] ?></td>
                    <td><?= $loggins[1] ?></td>

                </tr>
            <?php
            }
        ?>
    </table>
    <br>
    <form action = "..\users\guess.php" method="post">
        <button  class ="sout_but" type="submit">Sing out</button>
    </form>

    

</body>
</html>



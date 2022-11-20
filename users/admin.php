<?php    
   require_once '..\connect\connect.php';

    ?>

<!DOCTYPE html>
<html lang='ru'>

<head>
    <meta charset='utf-8'>
    <link rel="stylesheet" href="../styles/style.css">
    <title>test web</title>
    
</head>

<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Login</th>
            <th>Password</th>
            <th>Update</th>
            <th>Delete</th>

        </tr>
        <?php
            $users = mysqli_query($connect, "SELECT * FROM `loggins`");
            $users = mysqli_fetch_all($users);
            foreach ($users as $loggins){
                ?>
                <tr>
                    <td><?= $loggins[0] ?></td>
                    <td><?= $loggins[1] ?></td>
                    <td><?= $loggins[2] ?></td>
                    <td><a href="..\update.php?id=<?= $loggins[0] ?>">Update</td>
                    <td><a style="color:red"; href="..\delete.php?id=<?= $loggins[0] ?>">Delete</td>

                </tr>
            <?php
            }
        ?>
    </table>
    
    <form action = "..\create_users\create.php" method="post">
        <titlee>
            <p>Login</p>
            <input type="text" name="login">
        </titlee>
        
        <description>
            <p>Password</p>
            <input type="text" name="password">
        </description>

        <br>
        <button class ="add_but" type="submit">Add new login</button>
    </form>
    <br>
    <form action = "..\users\guess.php" method="post">
        <button  class ="sout_but" type="submit">Sing out</button>
    </form>



</body>
</html>



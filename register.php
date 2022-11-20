<?php    
    require_once 'connect\connect.php';
    ?>

<!DOCTYPE html>
<html lang='ru'>

<head>
    <meta charset='utf-8'>
    <link rel="stylesheet" href="./styles/style.css">
    <title>test web</title>
    
</head>

<body>
    
    <h1>Register username</h1>
    <form action = "create_users\register.php" method="post">
        <titlee>
            <p>Login</p>
            <input type="text" name="login">
        </titlee>
        
        <description>
            <p>Password</p>
            <input type="text" name="password">
        </description>

        <br>
        <button class ="add_but" type="submit">Register</button>
    </form>

    <br>

    <form action = "users\guess.php" method="post">
        <button  class ="sout_but" type="submit">Back</button>
    </form>


</body>
</html>



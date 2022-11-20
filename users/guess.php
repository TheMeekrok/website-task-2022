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
    <form action = "..\sing.php" method="post">
        <button class ="sing_but" type="submit">Sign in</button>
    </form>
    <br>
    <form action = "..\register.php" method="post">
        <button class ="register_but" type="submit">Register</button>
    </form>
</body>
</html>
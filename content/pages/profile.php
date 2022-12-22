<div class="__space-40"></div>
<h1>Профиль    <h5><a href="./content/scripts/php/sign_out.php">Выход</a></h5></h1>

<?php
require('./content/pages/profile_user_info.php');

$login = $_SESSION['login'];
if (!$login) die(404);

$query = mysqli_query($connect, "SELECT `login` FROM `users` WHERE `login`='$login' AND `privilege`='1'");
$result = mysqli_fetch_all($query);

if ($result) require('./content/pages/admin_panel.php')
?>
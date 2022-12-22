<?php
$login = $_SESSION['login'];
if (!$login)
    exit(404);
?>

<div class="__space-40"></div>
<div>
    <h1><?=$_SESSION['login']?></h1>
    <h5><a href="./content/scripts/php/sign_out.php">Выход</a></h5>
</div>
<div class="__space-10"></div>
<h2>Личные данные</h2>
<div class="__space-10"></div>
<div class="container-flex flex-start">
    <form enctype="multipart/form-data" action="./content/scripts/php/admin/add_product.php" method="post">
        <table>
            <tr>
                <td><h4>Имя<br></h4></td>
                <td><input class="user-input" type="text" name="personFirstName"></td>
            </tr>
            <tr>
                <td><h4>Фамилия</h4></td>
                <td><input class="user-input" type="text" name="personSecondName"></td>
            </tr>
            <tr>
                <td><h4>Дата рождения</h4></td>
                <td><input class="user-input" type="date" name="personDateOfBirth" min="1900-01-01" max="2022-12-31"></td>
            </tr>
            <tr>
                <td><h4>Номер телефона</h4></td>
                <td><input class="user-input" type="tel" name="personPhoneNumber"></td>
            </tr>
            <tr>
                <td><h4>Электронная почта</h4></td>
                <td><input class="user-input" type="email" maxlength=40 name="personEMail"></td>
            </tr>   
        </table>
        <div class="__space-10"></div>
        <div class="container-flex"><button class="button proceed-button" type="submit">Обновить</button></div>
        <div class="__space-40"></div>
    </form>
</div>

<?php
$query = mysqli_query($connect, "SELECT `login` FROM `users` WHERE `login`='$login' AND `privilege`='1'");
$result = mysqli_fetch_all($query);

if ($result) require('./content/pages/admin_panel.php')
?>
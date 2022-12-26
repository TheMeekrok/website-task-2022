<?php
session_start();

$login = $_SESSION['login'];
if (!$login)
    exit(404);

$id = $_SESSION['id'];
$query = mysqli_query($connect, "SELECT * FROM `users` WHERE `id` = '$id'");
$user_data = mysqli_fetch_assoc($query);

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
    <form action="./content/scripts/php/data_user/refresh_user_data.php" method="post">
        <table>
            <tr>
                <td><h4>Имя<br></h4></td>
                <td><input class="user-input" type="text"  placeholder="Иван" name="personFirstName" value="<?=$user_data['first_name']?>" pattern="[^@*#₽_&-+()/|'!?<>!{}0-9\[\]]{3,}" minlength="3"></td>
            </tr>
            <tr>
                <td><h4>Фамилия</h4></td>
                <td><input class="user-input" type="text" placeholder="Иванович" name="personSecondName" value="<?=$user_data['second_name']?>" pattern="[^@*#₽_&-+()/|'!?<>!{}0-9\[\]]{3,}" minlength="3" ></td>
            </tr>
            <tr>
                <td><h4>Дата рождения</h4></td>
                <td><input class="user-input" type="date" name="personDateOfBirth" min="1900-01-01" max="2022-12-31" value="<?=$user_data['date']?>"></td>
            </tr>
            <tr>
                <td><h4>Номер телефона</h4></td>
                <td><input class="user-input" type="tel" placeholder="81234567890" pattern="8[0-9]{10}" name="personPhoneNumber" value="<?=$user_data['phone']?>"></td>
            </tr>
            <tr>
                <td><h4>Электронная почта</h4></td>
                <td><input class="user-input" type="email" placeholder="ivanov@gmail.com" maxlength=40 name="personEMail" value="<?=$user_data['mail']?>"  pattern="[^*#₽&-+()/|'!?<>!{}\[\]]{6,}"></td>
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
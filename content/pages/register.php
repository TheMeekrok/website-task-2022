<div class="__space-40"></div>
<div><h1>Регистрация</h1></div>
<div class="__space-40"></div>

<style>
    .__registation-form-td {
        width: 50%;
    }
</style>

<div class="container-flex flex-start">
    <form enctype="multipart/form-data" action="./content/scripts/php/register_user/create_user.php" method="post" id="registrationForm">
        <table>
            <tr>
                <td class="__registation-form-td"><h4>Логин<br><h6>3-16 знаков, без специальных знаков и символов</h6></h4></td>
                <td><input class="user-input" id="loginRegInput" type="text" placeholder="guzev1331" maxlength="16" name="login"></td>
            </tr>
            <tr><td></td><td></td></tr>
            <tr>
                <td class="__registation-form-td"><h4>Пароль<br><h6>3-16 знаков, без специальных знаков и символов</h6></h4></td>
                <td><input class="user-input" id="passwordRegInput" type="password" placeholder="safe_password" maxlength="16" name="password"></td>
            </tr>
            <tr><td></td><td></td></tr>
            <tr>
                <td class="__registation-form-td"><h4>Повторите пароль<br><h6>3-16 знаков, без специальных знаков и символов</h6></h4></td>
                <td><input class="user-input" id="repeatPasswordRegInput" type="password" placeholder="safe_password" maxlength="16" name="password_repeat"></td>
            </tr>
        </table>
        <div class="__space-10"></div>
        <div class="container-flex"><button class="button proceed-button" type="submit">Зарегистрироваться</button></div>
        <div class="__space-10"></div>
        <div class="container-flex">
            <h5 class="text-center">Нажимая Зарегистрироваться, вы принимаете условия 
                <a href="../index.php?page=register">Политики конфиденциальности</a>
            </h5>
        </div>
        <div class="__space-40"></div>
    </form>
</div>

<script>
$(function() {

});
</script>



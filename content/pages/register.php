<div class="__space-40"></div>
<div><h1>Регистрация</h1></div>
<div class="__space-40"></div>

<style>
    .__registation-form-td {
        width: 50%;
    }
</style>


<div class="container-flex flex-start">
    <form id="registrationForm">
        <table>
            <tr>
                <td class="__registation-form-td"><h4>Логин<br><h6>6-16 знаков, без специальных знаков и символов</h6></h4></td>
                <td><input class="user-input" id="loginRegInput" type="text" placeholder="Введите логин"  minlength="6" maxlength="16" name="login" required></td>
            </tr>
            <tr><td></td><td></td></tr>
            <tr>
                <td class="__registation-form-td"><h4>Пароль<br><h6>6-16 знаков, без специальных знаков и символов</h6></h4></td>
                <td><input class="user-input" id="passwordRegInput" type="password" placeholder="Введите пароль" minlength="6" maxlength="16" name="password" required></td>
            </tr>
            <tr><td></td><td></td></tr>
            <tr>
                <td class="__registation-form-td"><h4>Повторите пароль<br><h6>6-16 знаков, без специальных знаков и символов</h6></h4></td>
                <td><input class="user-input" id="repeatPasswordRegInput" type="password" placeholder="Повторите пароль" minlength="6" maxlength="16" name="password_repeat" required></td>
            </tr>
            <tr>
                <td><h4 id="reg_error_mes" class="__registation-form-td"></h4></td>
            </tr>
        </table>
        <h5 class="container-flex" id="serverResponse"></h5>

        
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
    <style>


    </style>
</div>

<script>
$("#registrationForm").submit(function(e){
    e.preventDefault();
    const th = $(this);

    const responseContainer = $('#serverResponse');
    function setServerResponse(message) {
        responseContainer.text(message);
        setTimeout(() => {
            responseContainer.hide(200);
            responseContainer.text("");
        }, 700);
        responseContainer.show(200);
    };
    
    $.ajax({
        url: './content/scripts/php/register_user/create_user.php',
        method: 'POST',
        data: th.serialize(),
        success: function(response){
            if (response == 'uncorrect_password'){
                setServerResponse("Пароли не совпадают");
            }
            else if (response == 'login_exists'){
                setServerResponse('Логин уже существует');
            }
            else{
                setServerResponse('Вы зарегистрированы');
            }

        }
    });
});
</script>



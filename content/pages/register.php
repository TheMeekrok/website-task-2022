<div class="wrapper">
    <div><h1>Регистрация</h1></div>
    <div class="wrapper-25 container-flex">
        <form>
            <div class="__margin-top-bot-50">
                <h4>Логин</h4>
                <input class="user-input" id="loginRegInput" 
                    type="text" placeholder="guzev1331" maxlength="16">
                <h6>3-16 знаков, без спец. знаков и символов</h6>
            </div>
            <div class="__space-10"></div>
            <div class="__margin-top-bot-50">
                <h4>Пароль:</h4>
                <input class="user-input" id="firstPasswordRegInput" 
                    type="password" placeholder="safe_password" maxlength="16">
                <h6>3-16 знаков, без спец. знаков и символов</h6>
            </div>
            <div class="__margin-top-bot-50">
                <h4>Повторите пароль:</h4>
                <input class="user-input" id="secondPasswordRegInput"
                    type="password" placeholder="safe_password" maxlength="16">
                <h6>3-16 знаков, без спец. знаков и символов</h6>
            </div>
            <div class="__space-40"></div>
            <div class="container-flex">
                <button class="button proceed-button" type="submit">Зарегистрироваться</button>
            </div>
            <div class="container-flex __margin-top-bot-50">
                <h5 class="text-center">Нажимая Зарегистрироваться, вы принимаете условия <a href="../index.php?page=register">Политики конфиденциальности</a></h5>
            </div>
        </form> 
    </div>
    <div class="__space-40"></div>
    <?php
    require './content/components/footer.php';
    ?>
</div>



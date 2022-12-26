<style>
    header {
        position: fixed;
        top: 0%;
        background-color: #FF8B00;
        width: 100%;
        height: 65px;
        z-index: 1;
    }
    .nav-block {
        height: 65px;
        width: 100%;
        transition: .5s;
        justify-content: center;
    }
    #authButton {
        cursor: pointer;
    }
    .nav-block:hover {
        background-color: #FF8100;
    }
    .logo {
        margin: 2px;
        width: 40px;
    }
    .icon {
        margin: 2px;
        width: 13px;
        height: 13px;
    }

    .invalid_sign_in {
        color: red;
    }

    @media screen and (max-width: 767px) {
        .nav-text {
            display: none;
        }
        .icon {
            margin: 2px;
            width: 18px;
            height: 18px;
        }
    }
</style>

<header class="container-flex">
    <div class="navigation wrapper container-flex">
        <a class="container-flex nav-block" href="../index.php">
            <img class="logo" src="./content/images/favicon.svg">
            <h3 class="nav-text">Family Shop</h3>
        </a>
        <a class="container-flex nav-block" href="../index.php?page=catalog">
            <img class="icon" src="./content/images/nav/catalog.svg">
            <h4 class="nav-text">Каталог</h4>
        </a>
        <a class="container-flex nav-block" href="../index.php?page=contacts">
            <img class="icon" src="./content/images/nav/contacts.svg">
            <h4 class="nav-text">Контакты</h4>
        </a>
        <a class="container-flex nav-block" href="../index.php?page=cart">
            <img class="icon" src="./content/images/nav/cart.svg">
            <h4 class="nav-text">Корзина</h4>
        </a>
    <?php if (isset($_SESSION['login'])) { ?>
        <a class="container-flex nav-block" href="../index.php?page=profile">
            <img class="icon" src="./content/images/nav/user.svg">
            <h4 class="nav-text">Профиль</h4>
        </a>
    <?php }
        else { ?>
        <div class="container-flex nav-block" id="authButton">
            <img class="icon" src="./content/images/nav/user.svg">
            <h4 class="nav-text">Вход</h4>
        </div>
    <?php } ?>
    </div>
</header>

<!-- Окно авторизации -->
<div class="nav-block" id="navigation">
    <div class="fullscreen-fixed container-flex no-select disabled" id="modalWindow">
        <div class="modal-window container-flex">
            <div class="modal-wrapper container-flex column">
                <h2 class="modal-title container-flex">
                    Авторизация
                    <!-- <button type="submit" class="button close-button container-flex" id="modalWindowClose"><img src="./content/images/nav/close.svg"></button> -->
                </h2>
                <div class="__space-40"></div>
                <form  id="authForm">
                    <table>
                        <style>
                            .sign-form-label-td {
                                width: 40%;
                            }
                        </style>
                        <tr>
                            <td class="sign-form-label-td"><h4>Логин<br><h6>Который указывали при регистрации</h6></h4></td>
                            <td><input pattern="[^@*#₽_&-+()/|'!?<>!{}0-9\[\]]{3,}" class="user-input" type="text" name="login"></td>
                        </tr>
                        <tr>
                            <td><h4>Пароль</h4></td>
                            <td><input pattern="[^@*#₽_&-+()/|'!?<>!{}\[\]]{3,}" class="user-input" type="password" name="password"></td>
                        </tr>  
                        <tr>
                            <td><div></div></td>
                        </tr>  
                    </table>
                   
                    <h5 class="container-flex incorrect-data" id="serverResponseAuth"></h5>

                    <div class="__space-10"></div>
                    <div class="container-flex"><h5 class="text-center">Еще не зарегистрированы? <a href="../index.php?page=register" >Зарегистрироваться</a></h5></div>
                    <div class="__space-10"></div>
                    <div class="container-flex"><button class="button proceed-button" type="submit">Войти</button></div>
                    <div class="__space-40"></div>
                </form>
            </div>
        </div>
        <div class="background fullscreen-fixed" id="modalWindowBackgr"></div>
    </div>
</div>


<script>
$("#authForm").submit(function(e){
    e.preventDefault();
    const th = $(this);

    const responseContainer = $('#serverResponseAuth');
    function setServerResponse(message) {
        responseContainer.text(message);

    };
    
    $.ajax({
        url: './content/data_processing/sign_in.php',
        method: 'POST',
        data: th.serialize(),
        success: function(response){
            if (response == 'incorrect_data'){
                setServerResponse("Неправильный логин или пароль");
            }
            else{
                $('#modalWindow').hide();
                location.reload();
            }
        }
    });
});
</script>

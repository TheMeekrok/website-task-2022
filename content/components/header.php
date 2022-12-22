<header class="container-flex">
    <div class="wrapper container-flex">
        <a class="container-flex nav-block" href="../index.php">
            <img class="logo" src="./content/images/favicon.svg">
            <h3 class="nav-text">
                Family Shop
            </h3>
        </a>
        <a class="container-flex nav-block" href="../index.php?page=catalog">
            <h4 class="nav-text">
                <img class="icon" src="./content/images/nav/catalog.svg">
                Каталог
            </h4>
        </a>
        <a class="container-flex nav-block" href="../index.php?page=contacts">
            <h4 class="nav-text">
                <img class="icon" src="./content/images/nav/contacts.svg">
                Контакты
            </h4>
        </a>
        <a class="container-flex nav-block" href="../index.php?page=cart">
            <h4 class="nav-text">
                <img class="icon" src="./content/images/nav/cart.svg">
                Корзина
            </h4>
        </a>
    <?php if (isset($_SESSION['login'])) { ?>
        <a class="container-flex nav-block" href="../index.php?page=profile">
            <h4 class="nav-text">
                <img class="icon" src="./content/images/nav/user.svg">
                Профиль
            </h4>
        </a>
    <?php }
        else { ?>
        <div class="container-flex nav-block" id="authButton">
            <h4 class="nav-text">
                <img class="icon" src="./content/images/nav/user.svg">
                Войти
            </h4>
        </div>
    <?php } ?>
    </div>
</header>

<!-- Окно авторизации -->
<div class="nav-block" id="navigation">
    <div class="fullscreen-fixed container-flex no-select" id="modalWindow">
        <div class="modal-window container-flex">
            <div class="modal-wrapper">
                <h2 class="modal-title container-flex">
                    Авторизация
                    <button type="submit" class="button close-button container-flex" id="modalWindowClose"><img src="./content/images/nav/close.svg"></button>
                </h2>
                <div class="__space-40"></div>
                <form action = "./content/data_processing/sign_in.php"  method="post">
                    <div class="container-flex __margin-top-bot-50">
                        <input class="user-input" type="text" placeholder="Введите логин" name = "login" >
                    </div>
                    <div class="container-flex __margin-top-bot-50">
                        <input class="user-input" type="password" placeholder="Введите пароль" name = "password">
                    </div>
                    <div class="__space-40"></div>
                    <div class="container-flex">
                        <button class="button proceed-button" type="submit">Войти</button>
                    </div>
                    <div class="container-flex __margin-top-bot-50">
                        <h5 class="text-center">Еще не зарегистрированы? <a href="../index.php?page=register">Зарегистрироваться</a></h5>
                    </div>
                </form> 
            </div>
        </div>
        <div class="background fullscreen-fixed" id="modalWindowBackgr"></div>
    </div>
</div>


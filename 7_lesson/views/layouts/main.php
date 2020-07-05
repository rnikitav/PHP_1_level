<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/9d71517162.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/site.js"></script>
    <link rel="stylesheet" href="styles/site.css">
    <title><?= $title ; ?></title>
</head>
<body>
    <header>
        <div id="headerInside">
            <div id="logo"></div>
            <div id="companyName">Brand</div>
            <div id="navWrap">
                <a href="/">
                    Главная
                </a>
                <a href="?p=shop">
                    Магазин
                </a>
                <?php if (isAdmin()) : ?>
                    <a href="?p=order">
                        Список Заказов
                    </a>
                <?php else: ?>
                    <a href="?p=order">
                        Заказы
                    </a>
                <?php endif; ?>
                <a href="?p=shopcart">
                    <i class="fas fa-shopping-cart"></i>
                </a>
                <a href="?p=shopcart&a=cartPhp">
                    <i class="fas fa-shopping-cart"> PHP</i>
                </a>
                <?php if (isSingIn()) : ?>
                    <a href="/?p=loginUser">
                        Личная страница
                    </a>
                <?php else: ?>
                    <a href="?p=login">
                        Войти
                    </a>
                <?php endif; ?>
                <a href="?p=register">Регистрация</a>
            </div>
        </div>
    </header>
    <div style="color: red"><?=$msg?></div>
    <?= $content ?>
    <footer>
        <div id="footerInside">

            <div id="contacts">
                <div class="contactWrap">
                    <img src="images/envelope.svg" class="contactIcon">
                    info@brandshop.ru
                </div>
                <div class="contactWrap">
                    <img src="images/phone-call.svg" class="contactIcon">
                    8 800 555 00 00
                </div>
                <div class="contactWrap">
                    <img src="images/placeholder.svg" class="contactIcon">
                    Москва, пр-т Ленина, д. 1 офис 304
                </div>
            </div>

            <div id="footerNav">
                <a href="/">Главная</a>
                <a href="?p=shop">Магазин</a>
                <a href="?p=shopcart">Корзина</a>
                <?php if (array_key_exists('Login',$_SESSION)) : ?>
                    <a href="/?p=loginUser">
                        Личная страница
                    </a>
                <?php else: ?>
                    <a href="?p=login">
                        Войти
                    </a>
                <?php endif; ?>
                <a href="?p=register">Регистрация</a>
            </div>

            <div id="social">
                <img class="socialItem" src="images/vk-social-logotype.svg">
                <img class="socialItem" src="images/google-plus-social-logotype.svg">
                <img class="socialItem" src="images/facebook-logo.svg">
            </div>

            <div id="copyrights">&copy; Brand</div>
        </div>
    </footer>

</body>
</html>

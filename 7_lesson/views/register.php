<?php
/** @var $login */
/** @var $password */
/** @var $msg */
?>
<div class="register">
    <form method="post" action="" class="login">
        <p>
            <label for="login">Логин:</label>
            <input type="text" name="login" id="login" value="<?=$login;?>">
        </p>

        <p>
            <label for="password">Пароль:</label>
            <input type="password" name="password" id="password" value="<?=$password;?>">
        </p>

        <p class="login-submit">
            <button type="submit" class="login-button">Зарегистрироваться</button>
        </p>

        <p class="forgot-password"><a href="/?p=login">У Вас уже есть профиль?</a></p>
        <?php
        echo "<h3 style='color: #f44355'>{$msg}</h3>";
        ?>
    </form>
</div>

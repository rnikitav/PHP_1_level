<?php
/**
 * @var array $user
 */
?>
<div id="content">
    <h1>Приветствую на личной странице</h1>
    <h3>Ваше имя  <?= $user['user']['name']; ?></h3>
    <h3>Ваш логин  <?= $user['user']['login']; ?></h3>
    <p>
        <a href="/?p=login&a=logOut">Выйти</a>
    </p>
</div>

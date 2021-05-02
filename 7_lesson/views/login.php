
<?php
/** @var string $text */
?>
<div id="content">
    <form method="post">
        <input type="text" name="login" placeholder="Login">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" value="Войти">
    </form>
    <p style="color: red"><?= $text;?></p>
</div>


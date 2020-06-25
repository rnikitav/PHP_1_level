<?php
session_start();
$password = '123';
$login = 'admin';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if ($login == $_POST['login'] and $password == $_POST['password']){
        $_SESSION['Login'] = true;
        $_SESSION['name'] = 'Администратор';
        $_SESSION['login'] = $_POST['login'];
        var_dump($_SESSION);
        header('Location: /?p=loginUser');
        exit;
    }
}
//echo $_SESSION['name'];
?>
<div id="content">
    <form method="post">
        <input type="text" name="login" placeholder="Login">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" value="Войти">
    </form>
</div>

<?php
const SOL = 'zxcvbn';
function indexAction()
{

    if ($_SERVER['REQUEST_METHOD'] != 'POST') {
        echo render('login.php', [
            'title' => 'страница авторизации',
            'text' => getMsg()
        ]);
        return;
    }
    if (empty($_POST['login']) || empty($_POST['password'])) {
        setMsg('Вы ввели не все данные');
        header('Location: /?p=login');
        return;
    }
    $loginFront = clearString($_POST['login']);
    $passwordFront = password_hash(md5($_POST['password'] . SOL), PASSWORD_DEFAULT);
    $sql = "SELECT id, login, name, password, is_admin FROM users WHERE login = '{$loginFront}'";
    $result = mysqli_query(getConnection(), $sql);
    $row = mysqli_fetch_assoc($result);
    if (empty($row)) {
        setMsg('Нет такого пользователя');
        header('Location: /?p=login');
        return;
    }
    if (password_verify($row['password'], $passwordFront)) {
        $_SESSION['Login'] = true;
        unset($row['password']);
        $_SESSION['user'] = $row;
        header('Location: /?p=loginUser');
        return;
    }
    setMsg('Вы ввели неверный пароль');
    header('Location: /?p=login');
    return;

}

function logOutAction()
{
    session_destroy();
    header('Location: /');
    exit();
}

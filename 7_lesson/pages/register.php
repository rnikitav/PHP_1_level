<?php
const SOL = 'zxcvbn';
function indexAction()
{
    $msg = '';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $login = $_POST['login'];
        $name = $login;
        $password = $_POST['password'];
        if (empty($_POST['login']) ){
            $msg = 'Вы ввели некорректный логин';
            echo render('register.php', ['login' => $login, 'password' => $password, 'msg' => $msg]);
            exit();
        }
        if (empty($_POST['password'])){
            $msg = 'Вы ввели некорректный пароль';
            echo render('register.php', ['login' => $login, 'password' => $password, 'msg' => $msg]);
            exit();
        }
        $sqlSelect = "SELECT id, login, name, password, is_admin FROM users WHERE login = '{$login}'";
        $result = mysqli_query(getConnection(), $sqlSelect);
        if (mysqli_fetch_assoc($result)) {
            $msg = 'Пользователь с таким логином уже существует';
            echo render('register.php', ['login' => $login, 'password' => $password, 'msg' => $msg]);
            exit();
        }
        if (!mysqli_fetch_assoc($result)){
            $password = md5($_POST['password']. SOL);
            $sql = "INSERT INTO users (id, login, name, password) VALUES (NULL, '{$login}', '{$login}', '{$password}')";
            $res = mysqli_query(getConnection(), $sql);
            if($res){
                $result = mysqli_query(getConnection(), $sqlSelect);
                $row = mysqli_fetch_assoc($result);
                unset($row['password']);
                getAccess($row);
            }
        }
    }
    $login = '';
    $password = '';
    echo render('register.php', [
        'title' => 'Регистрация',
        'login' => $login,
        'password' => $password,
        'msg' => $msg]);
}
function getAccess($dataUser){
    if ($_SESSION['Login'] == true){
        session_destroy();
        session_start();
    }
    $_SESSION['Login'] = true;
    $_SESSION['user'] = $dataUser;
    header('Location: /?p=loginUser');
    exit;

}

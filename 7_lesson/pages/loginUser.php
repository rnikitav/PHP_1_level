<?php
function indexAction()
{
    if (isSingIn()){
        echo render('loginUser.php',
        [
            'user' => $_SESSION,
            'title' => 'Личная страница'
        ]);
        return;
    }
    header('Location: /');

}

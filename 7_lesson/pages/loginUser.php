<?php
session_start();
function indexAction()
{
    echo render('loginUser.php');
}

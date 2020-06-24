<?php
function indexAction()
{
    return allAction();
}
function allAction()
{
    $sql = 'SELECT id, name, description, img, price, comments, article FROM goods';
    $result = mysqli_query(getConnection(), $sql);
    echo render('shop.php', ['result' => $result]);
}

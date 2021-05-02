<?php
function indexAction()
{
    return showOrder();
}

function showOrder()
{
    if (isAdmin()) {
        return adminShowOrders();
    }
    return allShowOrders();
}

function changeStatusAction(){
    if (!isAdmin()){
        return;
    }
    return changeStatus();
}

function changeStatus(){
    $id = getId();
    $status = $_POST['status'];
    $sql = "SELECT id, time, address, buyer, goods, status FROM orders WHERE id = {$id}";
    $result = mysqli_query(getConnection(), $sql);
    $row = mysqli_fetch_assoc($result);
    if ($row){
        $sql = "UPDATE orders SET status = '{$status}' WHERE orders.id = $id;";
        $result = mysqli_query(getConnection(), $sql);
        if ($result){
            setMsg('Статус изменен');
            redirect();
        }
    }
}

function adminShowOrders()
{
    $sql = "SELECT id, time, address, buyer, goods, status FROM orders";
    $result = mysqli_query(getConnection(), $sql);
    $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo render('adminOrders.php', [
        'order' => $row,
        'title' => 'Заказы',
        'msg' => getMsg()
    ], 'proba.php');
}

function allShowOrders()
{
    if (key_exists('Login', $_SESSION)){
        $user = $_SESSION['user']['login'];
        $sql = "SELECT id, time, address, buyer, goods, status FROM orders WHERE buyer = '{$user}'";
        $result = mysqli_query(getConnection(), $sql);
        $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
        $html = '';
        $allProduct = '';
        foreach ($row as $one){
            $arr1 = json_decode($one['goods'], true);
            foreach ($arr1 as $key => $value){
                $allProduct .= renderTmpl('draworder.php',
                    [
                        'value' => $value
                    ]);
            }
            $html .= renderTmpl('draworderMain.php',
                [
                    'allProduct' => $allProduct,
                    'one' => $one
                ]);
            $allProduct = '';
        }

        echo render('order.php', [
            'all' => $html,
            'title' => 'Заказы'
        ]);
        return;
    }
    setMsg('Для просмотра заказов необходимо авторизоваться');
    redirect();



}

function addGoodForBdAction()
{
    date_default_timezone_set('Europe/Moscow');
    $timestamp = time(); // зафиксировали время
    $date = date('Y/m/d - H:i', $timestamp);
    $buyer = $_SESSION['user']['login'];
    $orderGoods = json_encode($_SESSION['goods']);
    $address = '';
    foreach ($_POST as $one) {
        $address .= clearString($one) . '/';
    }

    $sql = "INSERT INTO 
    orders 
    (id, time, address, buyer, goods) 
    VALUES 
    (NULL, '{$date}', '{$address}', '{$buyer}', '{$orderGoods}');";

    $res = mysqli_query(getConnection(), $sql);
    if ($res) {
        var_dump($res);
        setMsg('Заказ принят');
        unset($_SESSION['goods']);
    }
    redirect();
    return;
}

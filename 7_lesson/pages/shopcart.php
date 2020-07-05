<?php
function indexAction()
{
    var_dump($_SESSION);
}
function addAction(){
    $error = addGoodPhp(getArticle());

    if (!empty($error)){
        setMsg("$error");
    }

    redirect();

}
function axiosAddAction()
{
    header('Content-Type: application/json');
    if (empty($_POST['goodId'])) {
        echo json_encode([
            'success' => false,
            'params' => ['asd', 'asd', 'asd']
        ]);
        return;
    }

    $error = addGoodJS((int)$_POST['goodId']);

    if (!empty($error)) {
        echo json_encode([
            'success' => false
        ]);
        return;
    }

    echo json_encode([
        'success' => true,
        'params' => ['asd', 'asd', 'asd']
    ]);
    return;
}
function addGoodJS($id){
    if (empty($id)){
        return 'Не передан id';
    }
    $sql = "SELECT id, name, description, img, price, comments, article FROM goods WHERE id = $id";
    $result = mysqli_query(getConnection(), $sql);
    $row = mysqli_fetch_assoc($result);
    if (empty($row)){
        return 'Товар не найден';
    }

    if (!empty($_SESSION['goods'][$id])){
        $_SESSION['goods'][$id]['count']++;
        return '';
    }
    $_SESSION['goods'][$id] = [
        'name' => $row['name'],
        'price' => $row['price'],
        'img' => $row['img'],
        'article' => $row['article'],
        'count' => 1
    ];
    return '';
}
function addGoodPhp($article){
    if (empty($article)){
        return 'Не передан артикул';
    }
    $sql = "SELECT id, name, description, img, price, comments, article FROM goods WHERE article = '$article'";
    $result = mysqli_query(getConnection(), $sql);
    $row = mysqli_fetch_assoc($result);

    if (empty($row)){
        return 'Товар не найден';
    }

    if (!empty($_SESSION['goods'][$article])){
        $_SESSION['goods'][$article]['count']++;
        return '';
    }
    $_SESSION['goods'][$article] = [
        'name' => $row['name'],
        'price' => $row['price'],
        'img' => $row['img'],
        'article' => $row['article'],
        'count' => 1
    ];
    return '';
}
function cartPhpAction(){
    $sum = 0;
    if (!empty($_SESSION['goods'])){
        foreach ($_SESSION['goods'] as $one){
            $sum += $one['price'] * $one['count'];
        }
        echo render('shoppingCartPhp.php',
            [
                'goods' => $_SESSION['goods'],
                'sum' => $sum,
                'title' => 'Корзина',
                'msgCart' => getMsg()
            ]);
        return;
    }
    echo render('shoppingCartPhp.php',
    [
        'sum' => $sum,
        'title' => 'Корзина',
        'msgCart' => getMsg()
    ]);
}
function clearCartPhpAction(){
    $_SESSION['goods'] = [];
    cartPhpAction();
}
function removeAction(){
    removeFromCartPhp(getArticle());
    redirect();
}
function removeFromCartPhp($article){
    $goodArt = $_SESSION['goods'][$article];
    if (!empty($goodArt)){
        if ($goodArt['count'] == 1){
            unset($_SESSION['goods'][$article]);
            return;
        } else {
            var_dump($goodArt['count']);
            $_SESSION['goods'][$article]['count']--;
            return;
        }
    }
}

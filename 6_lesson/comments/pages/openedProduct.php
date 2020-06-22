<?php
$id = getId();
$article = getArticle();

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (empty($_POST['commit'])){
        header("Location: ?page=3&id={$id}&article={$article}");
        exit;
    }else{
        $comment = $_POST['commit'];
        print_r("rabotaet");
        $sql = "INSERT INTO 
                comments 
                    (id, article, comment) 
                VALUES 
                    (NULL, '$article', '$comment')";
        $result = mysqli_query($link,$sql) or mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        header("Location: ?page=3&id={$id}&article={$article}");
        exit;
    }
}
$sql = 'SELECT id, name, description, img, price, comments, article FROM goods WHERE id = ' . $id;
$result = mysqli_query($link, $sql);

$product = '';
$row = mysqli_fetch_assoc($result);

    $product .= <<<EOT
        <div id="openedProduct-img">
            <img src="images/goods/{$row['img']}" alt="photo">
        </div>
        <div id="openedProduct-content">
            <h1 id="openedProduct-name">
                {$row['name']}
            </h1>
            <div id="openedProduct-desc">
                {$row['description']}
            </div>
            <div id="openedProduct-price">
                Цена: {$row['price']} $
            </div>
        </div>
EOT;
echo  $product;
if (getArticle()){
    echo <<<EOT
    <form method="post">
    <input type="text" placeholder="Ваш комментарий" name="commit" size="40">
    <input type="submit">
</form>
EOT;
}

$sql = "SELECT id, article, comment FROM comments WHERE article = '$article'";
$result = mysqli_query($link, $sql) or mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
echo '<div class="comments">';
while ($row = mysqli_fetch_assoc($result)){
    echo "<h3>{$row['comment']}</h3>";
}
echo '</div>';

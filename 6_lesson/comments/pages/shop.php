<?php
$sql = 'SELECT id, name, description, img, price, comments, article FROM goods';
$result = mysqli_query($link, $sql);
$allProducts = '';
while ($row = mysqli_fetch_assoc($result)){
    $allProducts .= <<<EOT
    <div class="shopUnit">
        <img src="images/goods/{$row['img']}">
        <div class="shopUnitName">
            {$row['name']}
        </div>
        <div class="shopUnitShortDesc">
                {$row['description']}
        </div>
        <div class="shopUnitPrice">
        Цена {$row['price']} $
        </div>
        <a href="?page=3&id={$row['id']}&article={$row['article']}" class="shopUnitMore">
                Подробнее
        </a>
    </div>
EOT;
}
?>
<h1>
    Каталог товаров
</h1>
<?php echo '<div>' . $allProducts . '</div>'; ?>

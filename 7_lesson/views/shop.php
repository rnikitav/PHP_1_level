<?php
/** var [] $result */
?>
<div id="content">
    <div>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <div class="shopUnit">
                <img src="images/goods/<?= $row['img'] ?>" alt="phone">
                <div class="shopUnitName">
                    <?= $row['name'] ?>
                </div>
                <div class="shopUnitShortDesc">
                    <?= $row['description'] ?>
                </div>
                <div class="shopUnitPrice">
                    Цена <?= $row['price'] ?> $
                </div>
                <a href="?p=oneProd&id=<?=$row['id']?>&article=<?=$row['article']?>&a=showOneProd" class="shopUnitMore">
                    Подробнее
                </a>
                <a href="/?p=shopcart&a=add&article=<?=$row['article']?>" class="shopUnitMore">Добавить в корзину PHP</a>
<!--                <a href="?p=oneProd&id=--><?//=$row['id']?><!--&article=--><?//=$row['article']?><!--&a=showOneProd" class="shopUnitMore">-->
<!--                    Добавить в корзину-->
<!--                </a>-->
            </div>
        <?php endwhile; ?>
    </div>
</div>


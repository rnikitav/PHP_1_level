<?php
/** var [] $result */
?>
<div id="content">
    <h1>Rfnfkju</h1>
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
            </div>
        <?php endwhile; ?>
    </div>
</div>

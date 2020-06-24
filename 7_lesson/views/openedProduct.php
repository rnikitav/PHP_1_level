<?php
$row = mysqli_fetch_assoc($result);
?>
<div id="content">
    <div id="openedProduct-img">
        <img src="images/goods/<?= $row['img'] ?>" alt="photo">
    </div>
    <div id="openedProduct-content">
        <h1 id="openedProduct-name">
            <?= $row['name'] ?>
        </h1>
        <div id="openedProduct-desc">
            <?= $row['description'] ?>
        </div>
        <div id="openedProduct-price">
            Цена: <?= $row['price'] ?> $
        </div>
        <div>
            <form action="#">
                <button ></button>
            </form>
        </div>
    </div>
<?php
if (getArticle()) : ?>
    <form method="post">
        <input type="text" placeholder="Ваш комментарий" name="commit" size="40">
        <input type="submit">
    </form>
<?php endif; ?>

<?php
$article = getArticle();
$sql = "SELECT id, article, comment FROM comments WHERE article = '$article'";
$result = mysqli_query(getConnection(), $sql); ?>
<div class="comments">
<?php while ($row = mysqli_fetch_assoc($result)) : ?>
    <h3><?=$row['comment']?></h3>
<?php endwhile; ?>
</div>
</div>

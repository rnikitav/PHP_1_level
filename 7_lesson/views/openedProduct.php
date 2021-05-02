<?php
/** @var $comments  */
?>
<div id="app">


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
        <div class="btnByu">
            <a href="/?p=shopcart&a=add&article=<?=$row['article']?>" class="addToCart">Добавить в корзину PHP</a>
            <a href="#" @click="addToCart" class="addToCart">Добавить в корзину JS</a>
        </div>
    </div>
<?php
if (getArticle()) : ?>
    <form method="post">
        <input type="text" placeholder="Ваш комментарий" name="commit" size="40">
        <input type="submit">
    </form>
<?php endif; ?>

<div class="comments">
<?php while ($row = mysqli_fetch_assoc($comments)) : ?>
    <h3><?=$row['comment']?></h3>
<?php endwhile; ?>
</div>
</div>
</div>
<script>
    new Vue({
        el: '#app',
        data:{
            goodsId : <?= getId()?>
        },
        methods: {
            addToCart(){
                let form = new FormData();
                form.append('goodId', this.goodsId);
                axios.post(
                    '?p=shopcart&a=axiosAdd',
                    form
                ).then(function (response) {
                    console.log(response);
                });
            }
        }
    })
</script>

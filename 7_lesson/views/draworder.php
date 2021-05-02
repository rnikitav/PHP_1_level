<?php
?>

<div class="product__details__middle__one__item">
    <a href="#">
        <img src="images/goods/<?=$value['img']?>" alt="photo">
    </a>

    <div class="product__details__middle__one__item__left">
        <a href="#"><h3><?= $value['name']?></h3></a>
    </div>
    <div class="product__details__middle__one__item__right">
        <p><?=$value['price']?>$</p>
        <div class="cart__product-param quantity">
            <div class="cart__product-quantity">
                <h5><?=$value['count']?></h5>
            </div>
        </div>
        <p>$<?=($value['count']*$value['price'])?></p>
    </div>
</div>

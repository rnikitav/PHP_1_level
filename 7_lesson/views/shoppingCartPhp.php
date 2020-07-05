<section class="product__details center">
    <?php if ($msgCart) : ?>
    <h1 style="color: red"><?=$msgCart;?></h1>
    <?php endif; ?>
    <div class="product__details__top">
        <div class="product__details__top__left">
            <p>Product Details</p>
        </div>
        <div class="product__details__top__right">
            <p>unite Price</p>
            <p>Quantity</p>
            <p>shipping</p>
            <p>Subtotal</p>
            <p>ACTION</p>
        </div>
    </div>
    <div class="product__details__middle">
        <?php if (empty($goods)) :?>
        <h3 class="cartEmpty">Корзина пуста</h3>
        <?php else: ?>
        <?php foreach ($goods as $good) : ?>
        <div class="product__details__middle__one__item">
            <a href="#">
                <img src="images/goods/<?=$good['img']?>" alt="photo">
            </a>

            <div class="product__details__middle__one__item__left">
                <a href="#"><h3><?= $good['name']?></h3></a>
                <p>Color:<span>Red</span></p>
                <p> Size:<span>Xll</span></p>
            </div>
            <div class="product__details__middle__one__item__right">
                <p><?=$good['price']?></p>
                <div class="cart__product-param quantity">
                    <div class="cart__product-quantity">
                        <a href="/?p=shopcart&a=remove&article=<?=$good['article']?>"><button><i class="fas fa-minus-circle"></i></button></a>
                        <h5><?=$good['count']?></h5>
                        <a href="/?p=shopcart&a=add&article=<?=$good['article']?>"><button><i class="fas fa-plus-circle"></i></button></a>
                    </div>
                </div>
                <p>FREE</p>
                <p>$<?=($good['count']*$good['price'])?></p>
                <a href="#"><i class="fas fa-times-circle"></i></a>
            </div>
        </div>
        <?php endforeach; ?>
        <?php endif; ?>
    </div>
    <div class="product__details__buttons">
        <a href="/?p=shopcart&a=clearCartPhp">cLEAR SHOPPING CART</a>
        <a href="#">cONTINUE sHOPPING</a>
    </div>
    <?php if (isSingIn()) : ?>
    <div class="product__details__bottom">
        <div>
            <h3>Shipping Adress</h3>
            <form action="/?p=order&a=addGoodForBd" method="post">
                <select name="country" id="country" class="selectCountry">
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="Russia">Russia</option>
                    <option value="USA">USA</option>
                    <option value="Germany">Germany</option>
                    <option value="France">France</option>
                    <option value="China">China</option>
                </select>
                <input class="input__color" name="state" type="text" id="State" placeholder="State" required>
                <input type="text" id="Postcode" name="postCode" placeholder="Postcode / Zip" required>
                <?php if (!empty($_SESSION['goods'])) :?>
                <input type="submit" value="ЗАКАЗАТЬ">
                <?php endif; ?>
            </form>
        </div>
        <div>
            <h3>coupon discount</h3>
            <p>Enter your coupon code if you have one</p>
            <form action="coupone">
                <input type="text" id="coupone" required placeholder="State">
                <a href="#">Apply coupon</a>
            </form>
        </div>
        <div>
            <div class="proceedtocheckout__box">
                <p>Sub total <span>$<?=$sum?></span></p>
                <h3>GRAND TOTAL<span class="color-accent">$<?=$sum?></span></h3>
                <a href="#" class="button">proceed to checkout</a>
            </div>
        </div>
    </div>
    <?php else: ?>
        <h2 style="color: #f44355">Для оформления заказа необходимо авторизоваться</h2>
    <?php endif; ?>
</section>

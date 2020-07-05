<?php
?>
<div>
    <h1 style="color: red"><?=$msg?></h1>
    <?php foreach ($order as $one) : ?>
    <div>
        <p><?=$one['id']?></p>
        <p><?=$one['time']?></p>
        <p><?=$one['address']?></p>
        <p><?=$one['buyer']?></p>
        <p><?=$one['goods']?></p>
        <form action="/?p=order&a=changeStatus&id=<?=$one['id']?>" method="post">
            <select name="status" id="status">
                <option value="<?=$one['status']?>" selected><?=$one['status']?></option>
                <option value="Отправлен">Оплачен</option>
                <option value="Отправлен">Отправлен</option>
                <option value="Доставлен">Доставлен</option>
                <option value="Принят">Принят</option>
            </select>
            <input type="submit" value="Изменить">
        </form>
    </div>
    <?php endforeach; ?>
</div>

<?php
/**
 * Функция, которая вычисляет правильный падеж
 * @param $x integer
 * @param $var1 string {часов || минут || секунд}
 * @param $var2
 * @param $var3
 * @return string
 */
function endings($x,$var1,$var2,$var3): string
{
    $x0 = $x % 10;
    if ($x >= 5 and $x <=20){
        return $var1;
    }elseif ($x0 == 1){
        return $var2;
    }elseif ($x0 >= 2 && $x0 <= 4){
        return $var3;
    } else {
        return $var1;
    }
}

date_default_timezone_set('Europe/Moscow');
$hour = date('G');
$minute = date('i');
$second = date('s');
$hourVariant1 = 'часов';
$hourVariant2 = 'час';
$hourVariant3 = 'часа';
$minuteVariant1 = 'минут';
$minuteVariant2 = 'минута';
$minuteVariant3 = 'минуты';
$secondVariant1 = 'секунд';
$secondVariant2 = 'секунда';
$secondVariant3 = 'секунды';

//for($i=0; $i < 60; $i++){ проверка падежей
//    echo $i . ' ' . endings($i, $minuteVariant1, $minuteVariant2, $minuteVariant3) . '<br>';
//}
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Time</title>
</head>
<body>
    <h1>
        <span><?php echo "$hour " . endings($hour, $hourVariant1, $hourVariant2, $hourVariant3); ?></span>
        <span><?php echo " $minute " . endings($minute, $minuteVariant1, $minuteVariant2, $minuteVariant3); ?></span>
        <span><?php echo " $second " . endings($second, $secondVariant1, $secondVariant2, $secondVariant3);?></span>
    </h1>

</body>
</html>

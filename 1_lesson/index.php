<?php
$date = date('Y');
$title = 'ДЗ № 1';
$titleOfLesson = 'Дз первого урока'
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title ?></title>
</head>
<body>
<h1><?php echo $titleOfLesson ?></h1>
<p>
    <?php
    echo <<<php
    <h3>На дворе {$date} год</h3>
php;
    $a = 5;
    $b = '05';
//    var_dump((float)5.5 === (double)5.5);
    echo "<p>5 == '05'</p><p>Тут движок php строку 05 преобразовывает в 5 нули откидывает вначале и при нестрогом сравнении 5 == 5 если бы было строгое то было бы false</p>";
    var_dump($a == $b);         // Почему true?
    echo "<br><br><br><br>";
    echo "<p>(int)'012345'</p><p>Целое число не может начинаться с 0. Поэтому движок php откдывает его. Если бы там было пять 0 то так же бы их откинул</p>";
    var_dump((int)'012345');     // Почему 12345?
    echo "<br><br><br><br>";
    echo "<p>(float)123.0 === (int)123.0</p><p>Тут идет строгое равно. Они разных типов поэтому false. Если бы было == то тогда бы было true. А int откидывает дробную часть. Поэтому если бы было (float)123.0 == (int)123.8 то было бы true</p>";
    var_dump((float)123.0 === (int)123.0); // Почему false?
    echo "<br><br><br><br>";
    echo "<p>(int)0 === (int)'hello, world'</p>Строгое сравнение типы оба int. Int вторую часть где строка преобразовал в 0, тк строка не начинается на пробел и далее цифры или же просто с цифры а потом текст. если бы было 1hello world то int привел бы к  1<p></p>";
    var_dump((int)0 === (int)'hello, world'); // Почему true?
    echo "<br><br><br><br>";
    echo "<br><br><br><br>";
    ?>
</p>





    <h3>5. Используя только две переменные, поменяйте их значение местами. Например, если a = 1, b = 2,
        надо, чтобы получилось b = 1, a = 2. Дополнительные переменные использовать нельзя.</h3>
<p>
    <?php
    $a = 1;
    $b = 2;
    if ($a != $b){
        $a = $a + $b - ($b=$a);
        echo '<h3> a = a + b - (b=a)</h3><p>Сначала выполняется выражение в скобках, больше приоритет, а потом слева направо сначала 1+2 и потом вычитание 1. И уже в конце присваивается значение а = 2</p>';
        echo "<p>A =   {$a}</p>";
        //var_dump($a);
        echo "<p>B =  {$b}  </p>";
        //var_dump($b);
    } else {
        echo '<p>числа равны</p>';
    }
    ?>
</p>
</body>
</html>


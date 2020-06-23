<?php

function sum(int $a, int $b){
    $res = $a + $b;
    return "{$a} + {$b} = {$res}";
}
function subtraction(int $a, int $b){
    $res = $a - $b;
    return "{$a} - {$b} = {$res}";
}
function multiplication(int $a, int $b){
    $res = $a * $b;
    return "{$a} * {$b} = {$res}";
}
function division(int $a, int $b)
{
    if($b == 0){
        return 'На ноль делить нельзя';
    }
    $res = $a / $b;
    return "{$a} / {$b} = {$res}";
}

function calc(int $a, int $b, string $operation){
    return $operation($a, $b);
}
$a = $_GET['a'];
$b = $_GET['b'];
$operac = $_GET['operation'];
if ($operac){
    if (is_numeric($a) && is_numeric($b)){
        $result = calc($a, $b, $operac);
    }else {
        $result = '<h3>Вводить данные надо числами</h3>';
    }
}
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        * {margin-top: 10px}button{color: red;background: bisque;font-size: 28px} input{padding: 10px;font-size: 15px}
    </style>
    <title>CALC</title>
</head>
<body>
<h1>Калькулятор</h1>
<form method="get">
    <label>
        <input type="text" placeholder="Число а" name="a">
    </label>
<!--    <select name="operac" id="1">-->
<!--        <option value="+">+</option>-->
<!--        <option value="-">-</option>-->
<!--        <option value="-">/</option>-->
<!--        <option value="/">*</option>-->
<!--    </select>-->
    <button formmethod="get" value="sum" name="operation">+</button>
    <button formmethod="get" value="subtraction" name="operation">-</button>
    <button formmethod="get" value="multiplication" name="operation">*</button>
    <button formmethod="get" value="division" name="operation">/</button>
    <input type="text" placeholder="Число b" name="b">
<!--    <input type="submit" value="Вычислить">-->
    <?php echo "<h2>{$result}</h2>" ?>
</form>
</body>
</html>

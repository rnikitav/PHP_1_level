<?php
/**
 * @param int $a
 * @param int $b
 * @param string $operation // может выполнить только при символах:  +  -  *  /
 * @return int
 */
function getResultByOperation(int $a, int $b, string $operation){
    switch ($operation) {
        case '+':
            return sum($a, $b);
        case '-':
            return subtraction($a, $b);
        case '/':
            return division($a, $b);
        case '*':
            return multiplication($a, $b);
        default:
            return 'Я такого выражения не знаю';
    }
}

/**
 * Функция складывает два переданных в неё числа
 * @param int $a
 * @param int $b
 * @return int
 */
function sum(int $a, int $b){
    return $a + $b;
}

/**
 * Вычитает два переданных в неё числа
 * @param int $a
 * @param int $b
 * @return int
 */
function subtraction(int $a, int $b){
    return $a - $b;
}

/**
 * Функция умножает два переданных в неё числа
 * @param int $a
 * @param int $b
 * @return int
 */
function multiplication(int $a, int $b){
    return $a * $b;
}

/**
 * Функция делит два переданных в неё числа
 * @param int $a
 * @param int $b
 * @return float|int
 */
function division(int $a, int $b){
    return $a / $b;
}
echo (sum(1,2) . '<br>');
echo (subtraction(5,2) . '<br>');
echo (multiplication(11,2) . '<br>');
echo (division(22,2) . '<br>');
echo "<br><br><br><br>";
echo '<hr>';
echo (getResultByOperation(5, 5, '+') . "<br>");
echo (getResultByOperation(5, 5, '-') . '<br>');
echo (getResultByOperation(5, 5, '/') . '<br>');
echo (getResultByOperation(5, 5, '*') . '<br>');
echo (getResultByOperation(5, 5, ':') . '<br>');


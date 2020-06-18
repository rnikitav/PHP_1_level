<?php

function printNumbers($n){
    if ($n === 0){
        return $n . ' - ' . ' Это ноль';
    }
    if($n % 2 !== 0){
        return $n . ' - ' .' Нечетное число';
    }else{
        return $n . ' - ' . ' Четное число';
    }
}
$max = 10;
$i = 0;

do{
    echo '<pre>';
    echo (printNumbers($i));
    $i++;
     echo '</pre>';
}
while($i <= $max);


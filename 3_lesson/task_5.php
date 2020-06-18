<?php
function replaseSpases($search, $replace, $string){
    return str_replace($search, $replace, $string);
}
function replaceLoop($replace, $string){
    $res = explode(" ", $string);
    $text = '';
    for ($i = 0; $i < count($res); $i++){
        if ($i === count($res) - 1){
            $text .= $res[$i];
            continue;
        }
        $text .= $res[$i] . $replace;
    }
    echo '<hr>';
    return $text;
}
$str = "Рязань - это город в России, административный центр Рязанской области";
$searchElem = " ";
$replaceElem = "_";
echo (replaseSpases($searchElem, $replaceElem, $str));
echo '<br><br>';
//  Второй вариант
$test = explode(" ", $str);
$test = implode("_", $test);
echo $test;
echo '<br><br>';
// Третий вариант
echo (replaceLoop($replaceElem, $str));

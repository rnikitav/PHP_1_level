<?php
$task3 = [
    'Тульская область' => ['Кимовск', 'Киреев'],
    'Московская область' => ['Москва', 'Зеленоград', 'Клин', 'Коломна'],
    'Ленинградская область' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
    'Рязанская область' => ['Рязань', 'Касимов', 'Скопин'],
    'Смоленская область'  => ['Смоленск'],
    'dsadsaad' => 'класс'
];

foreach ($task3 as $key => $value){
    $sortArr = [];
    if (is_array($value)){
        foreach ($value as $town){
            if (mb_substr(mb_strtoupper($town), 0, 1) == "К"){
            array_push($sortArr, $town);
            }
        }
        if (count($sortArr) > 0){
            echo $key . ': <br>';
            echo (implode(', ', $sortArr)) . '.<br><br>';
        }
    } else {
        if (mb_substr(mb_strtoupper($value), 0, 1) == 'К'){
            echo $key . ':<br>';
            echo $value;
        }
    }
}

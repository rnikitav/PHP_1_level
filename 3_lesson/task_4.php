<?php
/**
 * @param $textInArray | Переданная строка распарсенная по букве в массив
 * @param $alphabet | транслитный словарик ключ "русская буква" => значение "буква латинице"
 * @return string
 */
function translite($textInArray, $alphabet): string
{
    $finalString = '';
    foreach ($textInArray as $value){
        if (array_key_exists($value, $alphabet)){
            $finalString .= $alphabet[$value];
        } else {
            $finalString .= $value;
        }
    }
    return $finalString;
}
$alphabet = [
    "А"=>"A","Б"=>"B","В"=>"V","Г"=>"G",
    "Д"=>"D","Е"=>"E","Ё"=>"E","Ж"=>"J","З"=>"Z","И"=>"I",
    "Й"=>"Y","К"=>"K","Л"=>"L","М"=>"M","Н"=>"N",
    "О"=>"O","П"=>"P","Р"=>"R","С"=>"S","Т"=>"T",
    "У"=>"U","Ф"=>"F","Х"=>"H","Ц"=>"TS","Ч"=>"CH",
    "Ш"=>"SH","Щ"=>"SCH","Ъ"=>"","Ы"=>"YI","Ь"=>"",
    "Э"=>"E","Ю"=>"YU","Я"=>"YA","а"=>"a","б"=>"b",
    "в"=>"v","г"=>"g","д"=>"d","е"=>"e","ё"=>"e","ж"=>"j",
    "з"=>"z","и"=>"i","й"=>"y","к"=>"k","л"=>"l",
    "м"=>"m","н"=>"n","о"=>"o","п"=>"p","р"=>"r",
    "с"=>"s","т"=>"t","у"=>"u","ф"=>"f","х"=>"h",
    "ц"=>"ts","ч"=>"ch","ш"=>"sh","щ"=>"sch","ъ"=>"y",
    "ы"=>"yi","ь"=>"'","э"=>"e","ю"=>"yu","я"=>"ya",
    ","=>",", " "=>" "
];
$str = "Рязань - это город в России, административный центр Рязанской области";

$strPreg  =  preg_split('//u', $str, -1, PREG_SPLIT_NO_EMPTY);
echo 'Начальная строка: ' . '<br>' . $str . '<br><br>';
echo (translite($strPreg, $alphabet));
echo '<br>';

// Второй вариант
function translit($text,$alphabet): string
{
    return strtr($text, $alphabet);
}

echo(translit($str, $alphabet));

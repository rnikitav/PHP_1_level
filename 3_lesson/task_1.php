<?php
$max = 100;
$i = 0;

while ($i <= $max){
    if ($i % 3 === 0 && $i !== 0){
        echo '<pre>';
        echo $i;
        echo '</pre>';
    }
    $i++;
}

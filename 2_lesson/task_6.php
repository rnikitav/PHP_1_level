<?php
/**
 * Функция возводит в степень $pow число $val
 * @param float|int $val
 * @param int $pow При 0 = 1. При 1 = $val
 * @return float|int
 */
function div($val,int $pow){
    if ($pow == 0){
        return 1;
    }
    if ($pow == 1){
        return $val;
    }
    return $val * div($val, $pow -1);
}
echo (div(4,3));

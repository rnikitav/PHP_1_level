<?php
$a = mt_rand(0,15);
//$x = 10;
//var_dump($x);
switch ($a){
    case 0:
        echo '<p>0</p>';
    case 1:
        echo '<p>1</p>';
    case 2:
        echo '<p>2</p>';
    case 3:
        echo '<p>3</p>';
    case 4:
        echo '<p>4</p>';
    case 5:
        echo '<p>5</p>';
    case 6:
        echo '<p>6</p>';
    case 7:
        echo '<p>7</p>';
    case 8:
        echo '<p>8</p>';
    case 9:
        echo '<p>9</p>';
    case 10:
        echo '<p>10</p>';
    case 11:
        echo '<p>11</p>';
    case 12:
        echo '<p>12</p>';
    case 13:
        echo '<p>13</p>';
    case 14:
        echo '<p>14</p>';
    case 15:
        echo '<p>15</p>';
        break;
    default:
        echo 'Число должно быть в диапазоне от 0 до 15 включительно <br>';

}

// Второй вариант с циклом
switch ($a){
    case 0;
    case 1;
    case 2;
    case 3;
    case 4;
    case 5;
    case 6;
    case 7;
    case 8;
    case 9;
    case 10;
    case 11;
    case 12;
    case 13;
    case 14;
    case 15;
        while ($a < 16){
            echo "$a <br>";
            $a++;
        }
    break;
    default:
        echo 'Число должно быть в диапазоне от 0 до 15 включительно';
}

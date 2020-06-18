<!doctype html>
<?php
$numbers = 10;
?>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task_10</title>
    <style>
        table{
            border-collapse: collapse;
        }
        td {
            width: 60px;
            height: 60px;
            border: 3px dotted #787676;
            background: black;
            text-align: center;
            font-size: 30px;
            color: #fff;
        }
        .first {
            border-left: none;
            border-top: none;
            background: #ffffff;
        }
        .top {
            border-top: none;
            color: #03a2eb;
        }
        .left {
            border-left: none;
            color: aqua;
        }
        .bottom {
            border-bottom: none;
        }
        .right {
            border-right: none;
        }
        table tr:last-of-type > td:first-of-type {
            border-bottom: none;
        }
        table tr:first-of-type > td:last-of-type{
            border-right: none;
        }
    </style>
</head>
<body>
<table>
    <?php
    for ($i = 0; $i <= $numbers; $i++){
        echo '<tr>';
        for ($j = 0; $j <= $numbers; $j++){
            $res = $i * $j;
            if ($i === 0 && $j === 0){
                echo '<td class="first"></td>';
                continue;
            }
            if($i === 0){
                echo "<td class='top'>{$j}</td>";
                continue;
            }
            if ($j === 0){
                echo "<td class='left'>{$i}</td>";
                continue;
            }
            if ($i === $numbers && $j === $numbers){
                echo "<td class='bottom right'>{$res}</td>";
                continue;
            }
            if ($i === $numbers && $j !== 0){
                echo "<td class='bottom'>{$res}</td>";
                continue;
            }
            if ($j === $numbers && $i !== 0){
                echo "<td class='right'>{$res}</td>";
                continue;
            }
            echo "<td>{$res}</td>";
        }
        echo '</tr>';
    }
    ?>
</table>
</body>
</html>

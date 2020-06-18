<!doctype html>
<?php
function renderNews($news)
{
    foreach ($news as $key => $value){
        echo '<a href="https://www.yandex.ru">' . $key . '</a>';
        if (is_array($value)){
            echo "<ul>$key";
            foreach ($value as $newsli){
                echo '<li>' . $newsli . '</li>';
            }
            echo '</ul>';
        }else {
            echo "<div style='color: red'>$value</div>";
        }
    }
}
$arr = [
    'Новости о спорте' => ['Баскетбол', 'Футбол', 'Хоккей'],
    'Новости о политике' => ['В США', 'В мире'],
    'Новости о природе' => ['Северная Америка','Африка','Евразия'],
]
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task_6</title>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic);
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', Arial, sans-serif;
            background-color: #ebebeb;
            overflow-x: hidden;
            text-align: center;
        }

        header {
            width: 100%;
            height: 50px;
            background-color: #f44355;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
        }

        header > nav > div {
            float: left;
            width: 16.6666%;
            height: 100%;
            position: relative;
        }

        header > nav > div > a {
            text-align: center;
            width: 100%;
            height: 100%;
            display: block;
            line-height: 50px;
            color: #fbfbfb;
            transition: background-color 0.2s ease;
            text-transform: uppercase;
        }

        header > nav > div:hover > a {
            background-color: rgba(0, 0, 0, 0.1);
            cursor: pointer;
        }

        header > nav > div > div {
            display: none;
            overflow: hidden;
            background-color: white;
            min-width: 200%;
            position: absolute;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
            padding: 10px;
        }

        header > nav > div:not(:first-of-type):not(:last-of-type) > div {
            left: -50%;
            border-radius: 0 0 3px 3px;
        }

        header > nav > div:first-of-type > div {
            left: 0;
            border-radius: 0 0 3px 0;
        }

        header > nav > div:last-of-type > div {
            right: 0;
            border-radius: 0 0 0 3px;
        }

        header > nav > div:hover > div {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        header > nav > div > div > a {
            display: block;
            float: left;
            padding: 8px 10px;
            width: 46%;
            margin: 2%;
            text-align: center;
            background-color: #f44355;
            color: #fbfbfb;
            border-radius: 2px;
            transition: background-color 0.2s ease;
        }

        header > nav > div > div > a:hover {
            background-color: #212121;
            cursor: pointer;
        }

        h1 {
            margin-top: 100px;
            font-weight: 100;
        }

        p {
            color: #aaa;
            font-weight: 300;
        }

        @media (max-width:600px) {
            header > nav > div > div > a {
                margin: 5px 0;
                width: 100%;
            }
            header > nav > div > a > span {
                display: none;
            }
        }
    </style>
</head>
<body>
<header>
    <nav>
        <div>
            <a><span>Главная</span></a>
        </div>
        <div>
            <a><span>Новости</span></a>
            <div>
                <?php renderNews($arr) ?>
            </div>
        </div>
        <div>
            <a><span>Контакты</span></a>
        </div>
        <div>
            <a><span>Справка</span></a>
        </div>
    </nav>
</header>
<h1>Заголовок</h1>
<p>Информация</p>
</body>
</html>

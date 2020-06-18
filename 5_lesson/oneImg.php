<?php
$link = mysqli_connect('localhost', 'root', 'root0987', 'lesson5');
if (empty($_GET['img'])){
    echo '<h3>Страница не найдена </h3>';
}else {
    $id = (int)$_GET['img'];

    $sql = "SELECT id, path, likes, views FROM images WHERE id = $id";
    $result = mysqli_query($link, $sql);
    if ($row = mysqli_fetch_assoc($result)) {
        $viewId = $row['views'];
        ++$viewId;
        $sql = "UPDATE images SET views = '$viewId' WHERE images.id = $id";
        $result = mysqli_query($link, $sql) or die(mysqli_error($link));
    } else {
        echo '<h3>Страница в базе данных не найдена</h3>';
    }
    $sql = "SELECT id, path, likes, views FROM images WHERE id = $id";
    $result = mysqli_query($link, $sql);
    if ($row = mysqli_fetch_assoc($result)) {
        $path = "../img/{$row['path']}";
        echo "<img id='{$row['id']}' src='$path' alt='photo' class='img'>";
        echo "<p>Количество просмотров {$row['views']}</p>";
    }
}




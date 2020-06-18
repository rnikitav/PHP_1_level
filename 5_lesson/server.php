<?php

$link = mysqli_connect('localhost', 'root', 'root0987', 'lesson5');
if (!empty($_GET['likes'])){
    $idImg = $_GET['id'];
    $sql = "SELECT id, path, likes, views FROM images WHERE id = $idImg";
    $result = mysqli_query($link, $sql);
    if ($row = mysqli_fetch_assoc($result)) {
        $likesId = (int)$row['likes'];
        ++$likesId;
        $sql = "UPDATE images SET likes = '$likesId' WHERE images.id = $idImg";
        $result = mysqli_query($link, $sql) or die(mysqli_error($link));
    }
}
    $dirArr = scandir('img');
    foreach ($dirArr as $key => $value) {
        preg_match("/.+\.(jpg|png)/u", $value, $matches, PREG_UNMATCHED_AS_NULL);
        if ($matches[0] && filesize("./img/{$value}") < 524288000) {
            $size = filesize("img/$value");
            $address = "img" . "/{$value}";
            $name = $matches[0];
            $sql = "SELECT id, address, size, name FROM table2 WHERE name = '$name'";
//            mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
            $res = mysqli_query($link, $sql);
            if(!mysqli_fetch_assoc($res)){
                $sql = "INSERT INTO
                    table2
                        (address, size, name)
                    VALUES
                        ('$address', $size, '$name')";
                mysqli_query($link, $sql) or die(mysqli_error($link));
            }
        }
    }

$sql = 'SELECT id, path, likes, views FROM images ORDER BY images.views DESC';

$res = mysqli_query($link, $sql);

echo "<div class='allimg'>";

while ($row = mysqli_fetch_assoc($res)) {
    echo "<div class='oneImg animated flipInY'>";
    $path = "img/{$row['path']}";
    echo "<a href='oneImg.php/?img={$row['id']}' target='_blank'><img id='{$row['id']}' src='{$path}' alt='photo' class='img'></a>";
    echo '<span class="views">' . $row['views'] . '</span>' . '<i>: Это количество просмотров</i>';
    echo '<p>';
    echo "<span><a href='?id={$row['id']}&likes=1'><i class='fa fa-heart-o' aria-hidden='false'></i></a></span>";
    echo "<span> Нравится:  <span>{$row['likes']}</span></span>";
    echo '</p>';
    echo "</div>";
}
echo "</div>";

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="stylesheet" href="Style/style.css">
    <title>DZ_4</title>
</head>
<body>
<div>
    <?php
    require 'task_1.php'
    ?>
</div>
    <form enctype="multipart/form-data" method="post" action="">
        <fieldset>
            <legend>Выберите изображение</legend>
            <br>
            <input type="file" name="photo" required accept="image/*,image/jpeg"><br><br>
            <input type="submit" name="submit" value="Загрузить"><br><br>
        </fieldset>
    </form>

<script src="modal.js"></script>
</body>
</html>

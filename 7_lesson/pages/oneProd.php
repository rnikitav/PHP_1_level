<?php
function showOneProdAction($id, $article)
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        return showOnePost($id, $article);
    }
    $sql = 'SELECT id, name, description, img, price, comments, article FROM goods WHERE id = ' . $id;
    $result = mysqli_query(getConnection(), $sql);
    echo render('openedProduct.php', ['result' => $result]);
}

function showOnePost($id, $article){
    if (empty($_POST['commit'])){
        header("Location: ?p=oneProd&id&a=showOneProd&id={$id}&article={$article}");
        exit;
    }
    if ($comment = $_POST['commit']){
        $sql = "INSERT INTO 
                comments 
                    (id, article, comment) 
                VALUES 
                    (NULL, '$article', '$comment')";
        $result = mysqli_query(getConnection(),$sql) or mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        header("Location: ?p=oneProd&a=showOneProd&id={$id}&article={$article}");
        exit;
    }
}

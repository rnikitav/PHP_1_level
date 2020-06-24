<?php
function run()
{
    $page = 'index';
    if (!empty($_GET['p'])){
        $page = $_GET['p'];
    }
    $fileName = getFileName($page);
    if (!is_file($fileName)){
        $fileName = getFileName('index');
    }

    include $fileName;

    $action = 'index';
    if (!empty($_GET['a'])){
        $action = $_GET['a'];
    }

    $action .= 'Action';
    if (!function_exists($action)){
        $action = 'indexAction';
    }
    if ($action == 'showOneProdAction'){
        return $action(getId(),getArticle());
    }


    return $action();
}

function getFileName($file)
{
    return dirname(__DIR__) . '/pages/' . $file . '.php';
}

function getConnection()
{
    static $link;

    if (empty($link)){
        $link = mysqli_connect('localhost', 'root', 'root0987','lesson6');
    }
    return $link;
}
function render($template, $params = [], $layout = 'main.php')
{
    $content = renderTmpl($template, $params);
    $layout = 'layouts/' . $layout;
    return renderTmpl($layout, ['content' => $content]);
}

function renderTmpl($template, $params = [])
{
    ob_start();
    extract($params);
    include dirname(__DIR__) . '/views/' . $template;
    return ob_get_clean();
}

function getId()
{
    if (!empty($_GET['id'])) {
        return (int) $_GET['id'];
    }

    return 0;
}

function getArticle()
{
    if (!empty($_GET['article'])){
        return $_GET['article'];
    }
    return 0;
}

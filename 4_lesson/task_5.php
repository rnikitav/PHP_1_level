<?php
function getSpace($count){
    $str = '';
    for ($i = 0; $i <=$count; $i++){
        $str .= '&nbsp;&nbsp;&nbsp;&nbsp;';
    }
    return $str;
}
function getFiles(string $path, int $level = 0){
    $dirPath = realpath($path);
    $dataDir = scandir($dirPath);
    if (!$dataDir){
        return;
    }
    foreach ($dataDir as $fileInDir){
        if ($fileInDir[0] == '.'){
            continue;
        }
        if (is_dir($dirPath . DIRECTORY_SEPARATOR. $fileInDir)){
            echo "<br>" . getSpace($level) . $fileInDir . ">>>";
            getFiles($dirPath . DIRECTORY_SEPARATOR. $fileInDir, $level + 1);
            continue;
        }
        echo '<br>' . getSpace($level) . $fileInDir;
    }
}
getFiles(dirname(__DIR__));

<?php
$timestamp = time(); // зафиксировали время
$date = date('Y', $timestamp);
$html = file_get_contents('main.html');
$html = str_replace('{{YEAR}}', "$date", $html);
echo $html;

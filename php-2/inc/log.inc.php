<?
//время в милисекундах
$dt = time();
//размещение на сервере по папкам
//$page = $_SERVER['REQUEST_URI'];
//в таком виде будет отображено имя файла без расширения
$page = $_GET["id"] ?? index;
//веб-адресс, который отображен в браузере
$ref = $_SERVER['HTTP_REFERER'];
//так адрес будет обрезан, отобразится лишь в строке файл и параеметры после "?"
$ref = pathinfo($ref, PATHINFO_BASENAME);
//отображение записи в документе
$path = "$dt|$page|$ref\n";
//вставка записи в файл, где указывается файл и путь к нему, сам текст и комманда записи в файл
file_put_contents(PATH_LOG, $path, FILE_APPEND);
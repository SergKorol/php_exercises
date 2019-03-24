<?php
const RSS_URL = "http://localhost/~sergius-taurus/php-3/news/rss.xml";
const FILE_NAME = "news.xml";
const RSS_TTL = 3600;

function download($url, $filename) {
    $file = file_get_contents($url);
    if ($file)
        file_put_contents($filename, $file);
}

if (!is_file(FILE_NAME))
    download(RSS_URL, FILE_NAME);


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<title>Новостная лента</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

<h1>Последние новости</h1>
<?php
$xml = simplexml_load_file(FILE_NAME);
foreach ($xml->channel->item as $item){
    echo <<<ITEM
<h3>{$item->title}</h3>
<p>{$item->description}<hr>
Категория: {$item->category},
Обуликовано: {$item->pubDate}
<p align="right"><a href="{$item->link}">Подробнее...</a></p>
</p>

ITEM;
if (time() > filemtime(FILE_NAME) + RSS_TTL)
    download(RSS_URL, FILE_NAME);
}
?>
</body>
</html>
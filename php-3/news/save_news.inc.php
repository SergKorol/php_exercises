<?php
$title = $news->escape($_POST["title"]);
$category = abs((int)$_POST["category"]);
$description = $news->escape($_POST["description"]);
$source = $news->escape($_POST["source"]);

if(empty($title) or empty($description)){
    $errMsg = "Заполните заголовок или описание";

}else{
    if (!$news->saveNews($title, $category, $description, $source)){
        $errMsg = "Произошла ошибка при добавлении новости";
    }else {
        header("Location: news.php");
        exit;
    }
}


?>
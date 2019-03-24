<?php
// подключение библиотек
	require "secure/session.inc.php";
	require "../inc/lib.inc.php";
	


	$title = clearStr($_POST['title']);
	$author = clearStr($_POST['author']);
	$pubyear = clearStr($_POST['pubyear']);
	$price = clearInt($_POST['price']);

	//addItemToCatalog($title, $author, $pubyear, $price);
    if(!addItemToCatalog($title, $author, $pubyear, $price)){ echo 'Произошла ошибка при добавлении товара в каталог';
		}else{
			header("Location: add2cat.php"); 
			exit;
			}
	




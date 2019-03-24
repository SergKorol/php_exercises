<?php
	require "inc/lib.inc.php";
	require "inc/config.inc.php";

	$name = clearStr($_POST['name']);
	$email = clearStr($_POST['email']);
	$phone = clearStr($_POST['phone']);
	$adress = clearStr($_POST['adress']);
	$oid = $basket["orderid"];
	$dt = time();
	$order = "$name|$email|$phone|$adress|$oid|$dt\n";
	file_put_contents("admin/".ORDERS_LOG, $order, FILE_APPEND);
	saveOrder($dt);
?>
<html>
<head>
	<title>Сохранение данных заказа</title>
</head>
<body>
	<p>Ваш заказ принят.</p>
	<p><a href="catalog.php">Вернуться в каталог товаров</a></p>
</body>
</html>
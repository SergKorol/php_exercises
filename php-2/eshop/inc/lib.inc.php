<?php

function addItemToCatalog($title, $author, $pubyear, $price) {
	global $link;
	$sql = "INSERT INTO catalog (title, author, pubyear, price) VALUES ($title, $author, $pubyear, $price)";
}
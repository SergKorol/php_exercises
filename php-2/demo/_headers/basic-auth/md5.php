<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>Хеширование MD5</title>
</head>

<body>
<h1>Хеширование MD5</h1>
<?
$str = $_GET["str"];
?>
<form action="<?=$_SERVER["PHP_SELF"]?>">
	Строка:
	<input type="text" name="str" value="<?=$str?>">
	<input type="submit" value="MD5">
</form>
<?
if ($str) {
	echo "<h2>", md5($str) ,"</h2>";
}
?>
</body>
</html>

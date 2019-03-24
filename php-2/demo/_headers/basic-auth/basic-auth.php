<?
$login = $_SERVER["PHP_AUTH_USER"];
$password = $_SERVER["PHP_AUTH_PW"];

if ($login=='admin' and $password=='1234'): 
	// Если пользователь прошел аутентификацию
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
	<title>Базовая аутентификация</title>
</head>
<body>
<h1>Базовая аутентификация - RFC2617</h1>
Ваш логин: <?=$login?><br>
Ваш логин: <?=$password?><br>
</body>
</html>
<? else: 
	// Пользователь не прошел аутентификацию!
	header("HTTP/1.0 401 Unauthorized");
	header("WWW-Authenticate: Basic realm=\"Мой сайт\"");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
	<title>Доступ запрещен</title>
</head>
<body>
<h1>Доступ запрещен</h1>
</body>
</html>
<? endif ?>
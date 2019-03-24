<?
session_start();
header("HTTP/1.0 401 Unauthorized"); require_once "secure.inc.php"; if($_SERVER['REQUEST_METHOD']=='POST'){
$login = trim(strip_tags($_POST["login"])); $pw = trim(strip_tags($_POST["pw"]));
$ref = trim(strip_tags($_GET["ref"])); if(!$ref)
$ref = '/eshop/admin/'; if($login and $pw){
if($result = userExists($login)){
list($_, $hash) = explode(':', $result); if(checkHash($pw, $hash)){
$_SESSION['admin'] = true; header("Location: $ref"); exit;
}else{
$title = 'Неправильное имя пользователя или пароль!';
} }else{
$title = 'Неправильное имя пользователя или пароль!'; }
}else{
$title = 'Заполните все поля формы!';
} }
$title = 'Авторизация';
$user  = '';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
	<title>Авторизация</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</head>
<body>
	<h1><?= $title?></h1>
	<form action="<?= $_SERVER['REQUEST_URI']?>" method="post">
		<div>
			<label for="txtUser">Логин</label>
			<input id="txtUser" type="text" name="user" value="<?= $user?>" />
		</div>
		<div>
			<label for="txtString">Пароль</label>
			<input id="txtString" type="text" name="pw" />
		</div>
		<div>
			<button type="submit">Войти</button>
		</div>	
	</form>
</body>
</html>
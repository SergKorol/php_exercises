<?
$login = strtoupper(trim(strip_tags($_SERVER["PHP_AUTH_USER"])));
$password = $_SERVER["PHP_AUTH_PW"];

if (!login_ok($login, $password)) {
	header("HTTP/1.0 401 Unauthorized");
	header("WWW-Authenticate: Basic realm=\"Мой сайт\"");
	include("access-deny.php");
	exit;
}

// Функция проверки пользователя
function login_ok($login, $password) {
	// ROOT: 888
	// Pupkin: Vasya
	// Морковкин: MeGaPa$$w0rd

	$users = array(
		"ROOT" => "0a113ef6b61820daa5611c870ed8d5ee",
		"PUPKIN" => "96932f68a34ac08a6c92ed8db20d2ee3",
		"MORKOVKIN" => "bfb5a5275a34cf74cdfebdea0cf9c421"
	);

	if (array_key_exists($login, $users)) {
		if ($users[$login] == md5($password)) {
			return true;
		}
	}
	return false;
}
?>

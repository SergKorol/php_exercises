<?php 
//<!-- Основные настройки -->
define(DB_HOST, "127.0.0.1"); 
define(DB_LOGIN, "root");
define(DB_PASSWORD, "12345678"); 
define(DB_NAME, "gbook");

$link = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_NAME) or die(mysqli_connect_error());

//<!-- Основные настройки -->

// отфильтровать данные:
function clearStr($data){
 	global $link;
 	$data = trim(strip_tags($data));
 	return mysqli_real_escape_string($link, $data);	
 } 
 
//<!-- Сохранение записи в БД -->

if ($_SERVER['REQUEST_METHOD'] == 'POST') { // проверить, была ли отправлена форма
  $name = clearStr($_POST['name']); // принять и отфильтровать данные из формы
  $email = clearStr($_POST['email']); 
  $msg = clearStr($_POST['msg']);

  $sql = "INSERT INTO msgs (name, email, msg)
          VALUES ('$name', '$email', '$msg')";
  // создать таблицу "msgs" с полями "name, email, msg" и вставить данные '$name', '$email', '$msg' в соответствующие поля
  mysqli_query($link, $sql); // отправить запрос в БД
  // еще можно написать проверку "все ли поля пришли" - http://www.cyberforum.ru/php-beginners/thread1035651.html
   header('Location: ' . $_SERVER['REQUEST_URI']);
   exit;
} 
echo mysqli_error($link); 

 
//<!-- Сохранение записи в БД -->

//<!-- Удаление записи из БД -->

if (isset($_GET['del'])) {
  $del = abs((int)$_GET['del']); 

  if ($del) { // true - положительное число
    $sql = "DELETE FROM msgs WHERE id = $del"; // формирование запроса на удаление записи
    mysqli_query($link, $sql); // выполнение запроса на удаление
  }
}
 ?>
<!-- Удаление записи из БД -->
<h3>Оставьте запись в нашей Гостевой книге</h3>

<form method="post" action="<?= $_SERVER['REQUEST_URI']?>">
Имя: <br /><input type="text" name="name" /><br />
Email: <br /><input type="text" name="email" /><br />
Сообщение: <br /><textarea name="msg"></textarea><br />

<br />

<input type="submit" value="Отправить!" />

</form>
<!-- Вывод записей из БД -->
<?php 
// Сформируйте SQL-запрос на выборку всех данных из таблицы msgs в обратном порядке:
$sql = "SELECT id, name, email, msg, UNIX_TIMESTAMP(datetime) as dt
			FROM msgs
			ORDER BY id DESC ";
$res = mysqli_query($link, $sql);
echo mysqli_error($link); // вывести сообщение об ошибке (если ошибка есть)
mysqli_close($link); // закрыть соединение с БД
echo "<p>Всего записей в гостевой книге: " . mysqli_num_rows($res) . "</p>";
while($row = mysqli_fetch_assoc($res)) { 
  $id = $row['id']; 
  $name = $row['name'];
  $email = $row['email'];
  $dt = date('d-m-Y H:i:s', $row['dt']); 
  $msg = $row['msg'];
// $row - результат выборки, количество записей

// вывести результат выборки:
echo "<hr>";
echo "<p>";
echo "<a href='mailto:$email'> $name </a> @ $dt";
echo "<br> $msg";
echo "</p>";  	
echo "<p align='right'>";  
echo "<a href='{$_SERVER["REQUEST_URI"]}&del=$id'>Удаление</a>";
echo "</p>";
  } 


//<!-- Вывод записей из БД -->
 ?>

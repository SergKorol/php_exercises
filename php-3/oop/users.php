<?php


function __autoload($class){
    include "classes/$class.class.php";
}
$user1 = new User("John Doe", "john_doe", "John2000");
$user2 = new User("Bob Doe", "bob_doe", "Bob1990");
$user3 = new User("Jane Doe", "jane_doe", "Jane007");

$super = new SuperUser("Ben Who", "ben_who", "Ben555", "admin");

echo "Всего обычных пользователей:". (User::$uCount - SuperUser::getSuCount())."<br>";
echo "Всего супер-пользователей:".SuperUser::getSuCount()."<br>";


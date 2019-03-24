<?php
class User {
    public $name;
    public $login;
    public $password;
    public static $uCount = 0;
    function __construct($n, $l, $p) {
        $this->name = $n;
        echo "User: ". $n. "<hr>";
        $this->login = $l;
        echo "Login: ". $l. "<hr>";
        $this->password = $p;
        echo "Password: ". $p. "<hr>";
        ++self::$uCount;
        echo __CLASS__;
    }

    function __destruct()
    {
        echo "User: ". $this->login. " deleted<br>";
    }

}



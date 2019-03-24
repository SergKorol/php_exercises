<?php
class SuperUser extends User{
    public $role;
    private static $suCount = 0;
    function __construct($n, $l, $p, $r)
    {
        parent::__construct($n, $l, $p);
        $this->role = $r;
        echo "Role: ". $r. "<hr>";
        ++self::$suCount;
    }

    /**
     * @return int
     */
    public static function getSuCount(): int
    {
        return self::$suCount;
    }

    /**
     * @param int $suCount
     */
    public static function setSuCount(int $suCount): void
    {
        self::$suCount = $suCount;
    }
}


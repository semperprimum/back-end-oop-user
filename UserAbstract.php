<?php
abstract class UserAbstract {
    public $name;
    public $login;
    public $password;
    public static $userCount = 0;

    public function __construct($name, $login, $password)
    {
        $this->name = $name;
        $this->login = $login;
        $this->password = $password;
        self::$userCount++;
    }

    abstract public function showInfo();
    public function __destruct()
    {
        echo "User " . $this->login . " was deleted.<br>";
    }
}
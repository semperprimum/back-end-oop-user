<?php
// require_once "@/UserAbstract.php";
// require_once "@/ISuperUser.php";
// require_once "@/IAuthorizeUser.php";

class SuperUser extends UserAbstract implements ISuperUser, IAuthorizeUser {
    public $role;
    public static $superUserCount = 0;
    public function __construct($name, $login, $password, $role)
    {
        parent::__construct($name, $login, $password);
        $this->role = $role;
        self::$superUserCount++;
    }

    public function showInfo()
    {
        echo "Name: " . $this->name . "<br>";
        echo "Login: " . $this->login . "<br>";
        echo "Password: " . $this->password . "<br>";
        echo "Role: " . $this->role . "<br>";
    }

    public function getInfo() {
        return [
            "name" => $this->name,
            "login" => $this->login,
            "password" => $this->password,
            "role" => $this->role
        ];
    }

    public function auth($login, $password) {
        if ($login === $this->login && $password === $this->password)
            return "Login Successful ✅";
        else 
            return "Login Unsuccessful 🔴";
    }
}

<?php
// require_once "@/UserAbstract.php";

class User extends UserAbstract {
    public function showInfo()
    {
        echo "Name: " . $this->name . "<br>";
        echo "Login: " . $this->login . "<br>";
        echo "Password: " . $this->password . "<br>";
    }
}
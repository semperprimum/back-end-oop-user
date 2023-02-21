<?php 
class User {
    public $name;
    public $login;
    public $password;

    public function __construct($name, $login, $password)
    {
        $this->name = $name;
        $this->login = $login;
        $this->password = $password;
    }

    public function showInfo() {
        echo "Name: " . $this->name . "<br>";
        echo "Login: " . $this->login . "<br>";
        echo "Password: " . $this->password . "<br>";
    }
    public function __destruct()
    {
        echo "User " . $this->login . " was deleted.<br>";
    }
}

class SuperUser extends User {
    public $role;
    public function __construct($name, $login, $password, $role)
    {
        parent::__construct($name, $login, $password);
        $this->role = $role;
    }

    public function showInfo()
    {
        parent::showInfo();
        echo "Role: " . $this->role . "<br>";
    }
}

echo "🔽 REGULAR USER 🔽 <br>";
$user1 = new User("John Doe", "johndoe", "password1");
$user1->showInfo();
unset($user1);
echo "<br>";
$user2 = new User("Jane Smith", "janesmith", "password2");
$user2->showInfo();
unset($user2);
echo "<br>";
$user3 = new User("Bob Johnson", "bobjohnson", "password3");
$user3->showInfo();
unset($user3);
echo "<br>";
echo "🔽 SUPER USER 🔽 <br>";
$superUser = new SuperUser("John Smith", "johnsmith", "superpassword", "admin");
$superUser->showInfo();
unset($superUser);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
</body>
</html>
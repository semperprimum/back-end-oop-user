<?php 
require_once "./autoloader.php";

spl_autoload_register("myAutoloader");

echo "🔽 REGULAR USER 🔽 <br>";
$user1 = new User("John Doe", "johndoe", "password1");
$user1->showInfo();

echo "<br>";
$user2 = new User("Jane Smith", "janesmith", "password2");
$user2->showInfo();

echo "<br>";
$user3 = new User("Bob Johnson", "bobjohnson", "password3");
$user3->showInfo();

echo "<br>";
echo "🔽 SUPER USER 🔽 <br>";
$superUser = new SuperUser("John Smith", "johnsmith", "superpassword", "admin");
$superUser->showInfo();
print_r($superUser->getInfo());
echo "<br><br>";
echo $superUser->auth("johnsmith", "superpassword");
echo "<br><br>";
echo "👨 Всего обычных пользователей: " . User::$userCount . "<br>🥷Всего супер-пользователей: " . SuperUser::$superUserCount;
echo "<br><br>"
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
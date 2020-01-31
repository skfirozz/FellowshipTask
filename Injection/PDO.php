<?php
$host = 'localhost';
$dataBase = 'sample';
$user = 'root';
$password = 'Admin@12345';
try {
    $dbObject = new PDO("mysql:host=$host;dbname=$dataBase", $user, $password);
    echo "***connected successfully***", "\n";
    $query = "INSERT INTO table2(name,email)  VALUES ('karim','karim@gmail.com')";
    if ($dbObject->exec($query)) {
        echo "inserted---------\n\n";
    }

} catch (PDOException $e) {
    echo "error occured while connecting please make sure your user name and passwords are correct ";
}

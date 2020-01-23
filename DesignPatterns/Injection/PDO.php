<?php
$host = 'localhost';
$dataBase = 'sample';
$user = 'root';
$password = 'root123';
try {
    $dbObject = new PDO("mysql:host=$host;dbname=$dataBase", $user, $password);
    echo "***connected successfully***","\n";
    $query = "SELECT * FROM table2 whare id=117";
    $result=$dbObject->exec($query);
    echo $result;
    echo "inserted---------\n\n";
} catch (PDOException $e) {
    echo "error occured while connecting please make sure your user name and passwords are correct ";
}

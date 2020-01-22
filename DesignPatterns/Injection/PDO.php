<?php
$host='127.0.0.1';
$dataBase='DataBase';
$user='firoz';
$password='MyFamily';
try{
    $dataBaseServer='mySql:host=$host;dbName=$dataBase;';
    $dbObject=new PDO($dataBaseServer,$user,$password);
}
catch(PDOException $e){
echo "error occured while connecting please make sure your user name and passwords are correct ";
}
?>
<?php
class Database
{
    private $host = 'localhost';
    private $dataBase = 'sample';
    private $user = 'root';
    private $password = 'root123';
    public $conn;
    public function getConnection()
    {
        $this->conn = null;
        try {
            $this->conn = new  PDO("mysql:host=$this->host;dbname=$this->dataBase", $this->user, $this->password);
            $this->conn->exec("set names utf8");
            echo "connected \n";
        } catch (PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
            echo "Not connected \n";
        }

        return $this->conn;
    }
}
$obj=new Database();
$obj->getConnection();

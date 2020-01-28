<?php
class Database
{
    private $host = 'localhost';
    private $dbname = 'sample';
    private $user = 'root';
    private $password = 'root123';
    public $conn;
    public function getConnection()
    {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->password);
            echo "connected\n";
        } catch (PDOException $e) {
            echo "error\n";
        }
        return $this->conn;
    }
}

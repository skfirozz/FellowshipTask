<?php
include 'DATA.php';
class Product
{
    private $conn;
    private $table_name = "table2";
    public function __construct($db)
    {
        $this->conn = $db;
    }
    public function read()
    {
        $query = "SELECT * FROM  $this->table_name;";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
    public function create()
    {
        $query = "INSERT INTO  user SET name=:name, email=:email";
        $stmt = $this->conn->prepare($query);
        echo "\nenter name: ";
        $name = readline();
        echo "\nenter email: ";
        $email = readline();
        $dataObj = new DATA($name, $email);
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":email", $email);
        if ($stmt->execute()) {
            echo json_encode($dataObj);
            return true;
        }
        return false;
    }
    public function Update()
    {
        $query = $query = "UPDATE $this->table_name  SET name =:name, email=:email WHERE id =:id";
        $stmt = $this->conn->prepare($query);
        echo "enter updated name: ";
        $name = readline();
        echo "enter updated email: ";
        $email = readline();
        echo "enter ID to change  Update Data: ";
        $id = readline();
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(':id', $id);
        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
}

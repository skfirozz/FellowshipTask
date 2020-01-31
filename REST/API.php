<?php
include 'PDO.php';
class RESTAPI
{
    private $conn;
    private $table_name = "table2";
    public function __construct($db)
    {
        $this->conn = $db;
    }
    public function READ() 
    {
        $query = "SELECT * FROM  $this->table_name;";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
    public function CREATE() 
    {
        $query = "INSERT INTO  $this->table_name SET name=:name, email=:email";
        $stmt = $this->conn->prepare($query);
        echo "\nenter name: ";
        $name = readline();
        echo "\nenter email: ";
        $email = readline();
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":email", $email);
        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
    public function UPDATE()
    {
        $query = $query = "UPDATE $this->table_name  SET name =:name, email=:email WHERE id =:id";
        $stmt = $this->conn->prepare($query);
        echo "enter updated name: ";
        $name = readline();
        echo "enter updated email: ";
        $email = readline();
        echo "enter ID to change Update Data: ";
        $id = readline();
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(':id', $id);
        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
    public function DELETE($id)
    {
        $statement = "DELETE FROM $this->table_name WHERE id = $id;";
        try {
            $statement = $this->conn->prepare($statement);
            $statement->execute(array('id' => $id));
            echo "deleted\n\n";
            return $statement->rowCount();
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
    }
}
$DB = new Database();
$obj = new RESTAPI($DB->getConnection());
$obj->DELETE(169);

<?php
class Database
{
    private $host = 'localhost';
    private $dbname = 'sample';
    private $user = 'root';
    private $password = 'Admin@12345';
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
    public function create()
    {
        $query = "INSERT INTO  user SET name=:name, email=:email";
        $stmt = $this->conn->prepare($query);
        echo "\nenter name: ";
        $name = readline();
        echo "\nenter email: ";
        $email = readline();
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":email", $email);
        if ($stmt->execute()) {
            echo "inserted\n\n";
            return true;
        }
        else 
        echo "not inserted";
        return false;
    }
    public function fetch_all()
    {
        $query = "SELECT * FROM table2 ORDER BY id";
        $statement = $this->conn->prepare($query);
        if ($statement->execute()) {
            while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                $data[] = $row;
            }
            echo json_encode($data);
            return $data;
        }
    }
}
$obj=new Database();
$obj->getConnection();
// $obj->create();
$obj->fetch_all();

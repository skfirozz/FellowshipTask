<?php
include_once 'DataBase.php';
class RESTAPI
{
    private $db = null;
    private $table_name = 'table2';
    public function __construct($db)
    {
        $this->db = $db;
    }

    public function GET()
    {
        $query = "SELECT * FROM  $this->table_name;";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function find($id)
    {
        $statement = "SELECT id, name, email FROM $this->table_name WHERE id = $id;";
        try {
            $statement = $this->db->prepare($statement);
            $statement->execute(array($id));
            $result = $statement->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
    }
    public function Insert()
    {
        $query = "INSERT INTO  $this->table_name SET name=:name, email=:email";
        try {
            $stmt = $this->db->prepare($query);
            $name = 'bye';
            $email = 'bye';
            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":email", $email);
            if ($stmt->execute()) {
                return true;
            }
            return false;
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    }

    public function UPDATE($id)
    {
        $statement = "UPDATE $this->table_name SET name = :name,email = :email WHERE id = :$id;";
        try {
            $statement = $this->db->prepare($statement);
            $statement->bindParam(":name", 'haaaxcf344234dfdaaaaa');
            $statement->bindParam(":email", 'haaaaaaa');
            return $statement->rowCount();
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
    }

    public function DELETE($id)
    {
        $statement = "DELETE FROM $this->table_name WHERE id = $id;";

        try {
            $statement = $this->db->prepare($statement);
            $statement->execute(array('id' => $id));
            echo "deleted\n\n";
            return $statement->rowCount();
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
    }
}
$DB = new Database();
$dC = $DB->getConnection();
$obj = new RESTAPI($dC);
if ($obj->Insert()) {
    echo "inserted..\n";
} else {
    echo "not inserted..\n";
}
$obj->DELETE(170);

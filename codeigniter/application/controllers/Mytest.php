<?php
class Mytest
{
    private $connect = '';
    public function __construct()
    {
        $this->database_connection();
    }
    public function database_connection()
    {
        $this->connect = new PDO("mysql:host=localhost;dbname=sample", "root", "Admin@12345");
    }
    public function fetch_all()
    {
        $query = "SELECT * FROM table2 ORDER BY id";
        $statement = $this->connect->prepare($query);
        if ($statement->execute()) {
            while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                $data[] = $row;
            }
            echo json_encode($data);
            mysqli_close($this->connect);
            return $data;
        }
    }
    public function insert()
    {
        if (isset($_POST["name"])&&isset($_POST["email"])) {
            $form_data = array(
                ':name' => $_POST["name"],
                ':email' => $_POST["email"],
            );
            $query = "INSERT INTO table2(name, email) VALUES(:name, :email)";
            $statement = $this->connect->prepare($query);
            if ($statement->execute($form_data)) {
                $data[] = array(
                    'success' => 'inserted',
                );
            } else {
                $data[] = array(
                    'fail' => 'not inserted',
                );
            }
        } else {
            $data[] = array(
                'fail' => 'set the name',
            );
        }
        mysqli_close($this->connect);
        echo json_encode($data);
        return $data;

    }

    public function delete() 
    {
        if (isset($_POST['ID'])) {
            $form_data = array(
                ':id' => $_POST['ID'],
            );
            $query = "DELETE FROM table2 WHERE ID=:id";
            $statement = $this->connect->prepare($query);
            if ($statement->execute($form_data)) {
                $data[] = array(
                    'success' => 'deleted',
                );
            } else {
                $data[] = array(
                    'fail' => 'not deleted',
                );
            }
        } else {
            $data[] = array(
                'fail' => 'set the id',
            );
        }
        mysqli_close($this->connect);
        echo json_encode($data);
        return $data;
    }

    public function update()
    {
        if (isset($_POST["name"])) {
            $form_data = array(
                ':name' => $_POST['name'],
                ':email' => $_POST['email'],
                ':id' => $_POST['id'],
            );
            $query = "UPDATE table2 SET name = :name, email = :email WHERE id = :id";
            $statement = $this->connect->prepare($query);
            if ($statement->execute($form_data)) {
                $data[] = array(
                    'success' => 'inserted',
                );
            } else {
                $data[] = array(
                    'fail' => 'not inserted',
                );
            }
        } else {
            $data[] = array(
                'fail' => 'set the name',
            );
        }
        mysqli_close($this->connect);
        echo json_encode($data);
        return $data;
    }
}
?>
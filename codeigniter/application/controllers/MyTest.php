<?php
// header('Access-Control-Allow-Origin: *');
// header("Access-Control-Allow-Headers: Authorization");
class MyTest extends CI_Controller
{
    private $connect = '';
    public function __construct()
    {
        $this->database_connection();
    }
    public function database_connection()
    {
        $this->connect = new PDO("mysql:host=localhost;dbname=sample", "root", "root123");
    }
    public function insert()
    {
        if (isset($_POST["first_name"])) {
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
                    'success' => 'not inserted',
                );
            }
        } else {
            $data[] = array(
                'success' => 'not inserted due server problem',
            );
        }
        return $data;
    }
}

<?php
class Product{
    private $conn;
    private $table_name = "table2";
    public $id;
    public $name;
    public $email;
    public function __construct($db){
        $this->conn = $db;
    }
}
?>
<?php
interface ConnectionInterface
{
    public function connect();
}
class PhpDataBaseConnection implements ConnectionInterface
{
    public function connect()
    {
        $host = 'localhost';
        $dataBase = 'sample';
        $user = 'root';
        $password = 'root123';
        try {
            $dbObject = new PDO("mysql:host=$host;dbname=$dataBase", $user, $password);
            echo "***connected successfully--", __CLASS__, "***\n";
        } catch (PDOException $e) {
            echo "error in ", __CLASS__, "\n";
        }
        // echo __CLASS__;
    }
}
class MicrosoftDatabase implements ConnectionInterface
{
    public function connect()
    {
        $host = 'localhost';
        $dataBase = 'MYDATA';
        $user = 'helloWorld';
        $password = 'root123';
        try {
            $dbObject = new PDO("mysql:host=$host;dbname=$dataBase", $user, $password);
        } catch (PDOException $e) {
            echo "error in ", __CLASS__, "\n";
        }

        // echo __CLASS__;
    }
}
class main
{
    public $dataBaseObject;

    public function __construct(ConnectionInterface $dataBaseObject)
    {
        $this->dataBaseObject = $dataBaseObject;
        $this->dataBaseObject->connect();
    }
}
function run()
{
    echo "1.php database\n2.microsoftDataBase: ";
    $option = readline();
    switch ($option) {
        case 1:$obj1 = new PhpDataBaseConnection();
            $result = new main($obj1);
            break;
        case 2:$obj1 = new MicrosoftDatabase();
            $result = new main($obj1);
            break;
        default:echo "\ninvalid option\n";
            break;
    }
}
run();
?>

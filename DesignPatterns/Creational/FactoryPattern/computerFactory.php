<?php
/********************************************************************
* @Execution : Fellowship/DesignPatterns/DesignPatterns/Creational/FactoryPattern $ php computerFactory.php
* @description :Factory design pattern in Creational
* @Purpose : Factory design Pattern in Creational
* @file : computerFactory.php
* @author : skfirozz <shaikfiroz838@gmail.com>
* @version : 7.2.24
* @since : 18-01-2020
*********************************************************************/
include '/home/admin1/Documents/Fellowship/Design Patterns/DesignPatterns/MainPrograms/Creational/FactoryPattern/utility.php';
include '/home/admin1/Documents/Fellowship/Design Patterns/DesignPatterns/MainPrograms/Creational/FactoryPattern/pc.php';
include '/home/admin1/Documents/Fellowship/Design Patterns/DesignPatterns/MainPrograms/Creational/FactoryPattern/laptop.php';
include '/home/admin1/Documents/Fellowship/Design Patterns/DesignPatterns/MainPrograms/Creational/FactoryPattern/server.php';
class ComputerFactory
{
    public function getInfo($n)
    {
        switch ($n) { 
            case 1:echo "YOUR LAPTOP DETAILS ARE : \n";
                return new Laptop('Dell', '8GB', '1TB');
                break;
            case 2:echo "YOUR PC DETAILS ARE : ";
                return new PC('Hp', '4GB', '500GB', 'Windows 10');
                break;
            case 3:echo "YOUR SERVER DETAILS ARE : ";
                return new Server('JamesBond', 'H.S.R Layout', '172.23.200.10');
                break;
            default:
                echo ".........EXIT....¶¶¶¶¶¶¶\n";
                break;
        }
    }
}
function run()
{
    $obj=new ComputerFactory();
    echo "enter  \n1.Laptop\t2.PC\t3.Server : ";
    $reference=$obj->getInfo(Utility::getInt());
    $ref = new ReflectionClass($obj);
    $dfdf = $ref->getProperties() ;
    foreach($ref->getProperties() as $key){
        echo $key->getName()."->".$key->getValue($obj)."\n";
    } 
}
run();
?>
  

}
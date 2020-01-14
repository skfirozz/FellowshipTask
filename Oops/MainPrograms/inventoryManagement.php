<?php
/********************************************************************
* @Execution : Fellowship/OOps/Oops/MainPrograms $ php inventoryManagement.php
* @description :Extend the above program to Create InventoryManager to manage the
    Inventory. The Inventory Manager will use InventoryFactory to create Inventory
    Object from JSON. The InventoryManager will call each Inventory Object in its list
    to calculate the Inventory Price and then call the Inventory Object to return the
    JSON String. The main program will be with InventoryManager
* @Purpose : Create the JSON from Inventory Object and output the JSON String.
* @function : Utility/utility
* @file : inventoryManagement.php
* @author : skfirozz <shaikfiroz838@gmail.com>
* @version : 7.2.24
* @since : 11-01-2020
*********************************************************************/
include "/home/admin1/Documents/Fellowship/Oops/Utility/utility.php";
class Stock{
    public $name;
    public $quantity;
    public $price;
    public function __construct($name,$price,$quantity)
    {
        $this->name=$name;
        $this->price=$price;
        $this->quantity=$quantity;
    }
}
function portfolio($portfolio)
{
    echo "enter number of stocks you want to add: ";
    $stocks=Utility::numberValidation();
    for($i=0;$i<$stocks;$i++){
        echo "Enter stock name: ";
        $name=Utility::nameValidation();
        echo "enter quantity of stock: ";
        $quantity=Utility::numberValidation();
        echo "enter price of each share: ";
        $price=Utility::numberValidation();
        $portfolio[] = new Stock($name, $price, $quantity);
    }
    echo "\n\n";
    $encode['stock']=json_encode($portfolio);
    file_put_contents("/home/admin1/Documents/Fellowship/Oops/JsonFiles/stock.json",$encode);
}

function printReport($portfolio)
{
    $total=0;
    $i=0;
    foreach($portfolio as $key){
        echo $portfolio[$i]->name,"   ",$portfolio[$i]->quantity,"   ",$portfolio[$i]->price,"    ",$key->quantity*$key->price,"\n";
        $total +=$key->quantity*$key->price;
        $i++;
    }
    echo "total value of stock : $total";
}
function newPort()
{
    $portfolio=array();
    portfolio($portfolio);
}
function add()
{
    echo "adding new elements: \n";
    $portfolio=json_decode(file_get_contents('/home/admin1/Documents/Fellowship/Oops/JsonFiles/stock.json'));
    portfolio($portfolio);
}
function run()
{
    echo "Menu :\n";
    echo "Press 1 to Enter New Details in Stock Portfolio \nPress 2 to to clear and create new Portfolio \n";
    echo "Enter 3 to Display Old Shares With Report\nElse exit anything to exit\n";
    $option=Utility::numberValidation();
    switch($option){
        case 1: add();
            run();
    break;
        case 2: newPort();
                run();
    break;
        case 3: 
            $port=json_decode(file_get_contents('/home/admin1/Documents/Fellowship/Oops/JsonFiles/stock.json'));
            printReport($port);
    break;
        default:
        echo "exit\n";
    break;
    }
}
run();

?>
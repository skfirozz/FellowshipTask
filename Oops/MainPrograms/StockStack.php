<?php
/********************************************************************
* @Execution : Fellowship/OOps/Oops/MainPrograms $ php stockLinkedList.php
* @description :Further maintain the Stock Symbol Purchased or Sold in a Stack implemented using
    Linked List to indicate transactions done.
* @Purpose : implement using stack
* @function : Utility/utility
* @file : StockStack.php
* @author : skfirozz <shaikfiroz838@gmail.com>
* @version : 7.2.24
* @since : 11-01-2020
*********************************************************************/
include '/home/admin1/Documents/Fellowship/OOps/Oops/Utility/utility.php';
include '/home/admin1/Documents/Fellowship/OOps/Oops/MainPrograms/Stack.php';
$array = json_decode(file_get_contents('/home/admin1/Documents/Fellowship/OOps/Oops/JsonFiles/stock.json'));
$obj = new Stack();
for ($i = 0; $i < count($array); $i++) {
    echo "stock name-", $array[$i]->name, ":\nenter  purchased or  sold: ";
    $option = Utility::nameValidation();
    if ($option == 'p' || $option == 's') {
        $obj->push($option);
    }
}
function displayStockName($array)
{
    for ($i = 0; $i < count($array); $i++) {
        echo  $array[$i]->name, " ";
    }
    echo "\n";
}
function displayStatus($obj)
{
    $obj->display();
}
displayStockName($array);
displayStatus($obj);
?>
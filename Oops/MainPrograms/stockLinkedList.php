<?php
/********************************************************************
* @Execution : Fellowship/OOps/Oops/MainPrograms $ php stockLinkedList.php
* @description :Maintain the List of CompanyShares in a Linked List So new CompanyShares can
    be added or removed easily. Do not use any Collection Library to implement Linked
    List..
* @Purpose : implement using LinkedList
* @function : Utility/utility
* @file : stockLinkedList.php
* @author : skfirozz <shaikfiroz838@gmail.com>
* @version : 7.2.24
* @since : 11-01-2020
*********************************************************************/
include "/home/admin1/Documents/Fellowship/OOps/Oops/MainPrograms/LinkedList.php";
include "/home/admin1/Documents/Fellowship/OOps/Oops/Utility/utility.php";
class Stock1{
    public $name;
    public $share;
    public $price;
}
function addingToObject($arr)
{
    echo "enter the Stock name: ";
    $name=Utility::nameValidation();
    echo "enter number of shares: ";
    $shares=Utility::getInt();
    echo "enter the price of each share: ";
    $price=Utility::getInt();
    $obj=new Stock1();
    $obj->name=$name;
    $obj->share=$shares;
    $obj->price=$price;
    $arr=$obj;
    return $arr;
}
function remove($obj)
{
    echo "enter the stock name to remove: ";
    $name=Utility::nameValidation();
    if(search($name,$obj)==true){
        delete($name,$obj);
        echo "deleted $name..,\n";
    }
    else echo "$name stock is not exist...\n";
}
function delete($name,$obj)
{
    $ta=$obj->firstNode;
    if($ta->data->name==$name)
    $obj->firstNode=$ta->next;
    else
    while($ta !=null){
        echo $ta->data->name," ";
        if($ta->next->data->name==$name){
            $ta->next=$ta->next->next;
        break;
        }
        $ta=$ta->next;
    }
}
function search($name,$obj)
{
    $ta=$obj->firstNode;
    while($ta !=null){
        if($ta->data->name == $name){
        return true;
        }
        $ta=$ta->next;
    }
    return false;
}
function display($obj)
    {
        $ta=$obj->firstNode;
        while($ta != null){
            echo $ta->data->name," ";
            $ta=$ta->next;
        }
        echo "\n\n";
    }
    function displayAll($obj)
    {
        $ta=$obj->firstNode;
        while($ta != null){
            echo $ta->data->name," ";
            echo $ta->data->share," ";
            echo $ta->data->price," \n";
            $ta=$ta->next;
        }
        echo "\n";
    }

$object=new LinkedList();
$option=5;
while($option<=5){
    echo "enter 1. to add \t 2. to delete \t 3. share names  4. ALL Data\t 5. to exit: ";
    $option=Utility::getInt();
    $arr = array();
    switch($option){
        case 1: 
            $array=addingToObject($arr);
            $object->adding($array);
        break;
        case 2:
            remove($object);
        break;
        case 3 ;
        display($object);
    break;
    case 4 ;
        displayAll($object);
        echo "\n\n";
    break;
    default:
    echo "exit";
    }
}

?>
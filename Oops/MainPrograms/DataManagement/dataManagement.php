<?php
/********************************************************************
* @Execution : Fellowship/OOps/Oops/MainPrograms $ php dataManagement.php
* @description :Create a JSON file having Inventory Details for Rice, Pulses and Wheats
                with properties name, weight, price per kg.
* @Purpose : read in JSON File
* @function : Utility/utility
* @file : dataManagement.php
* @author : skfirozz <shaikfiroz838@gmail.com>
* @version : 7.2.24
* @since : 11-01-2020
*********************************************************************/
include '/home/admin1/Documents/Fellowship/OOps/Oops/MainPrograms/DataManagement/Utility.php';
include '/home/admin1/Documents/Fellowship/OOps/Oops/MainPrograms/DataManagement/BusinessLogic.php';
$obj=new BusinessLogic();
$n=0;
$item=array();
global $item;
while($n< 4){
  
    echo "enter items\n 1.rice\t\t2.paulse\t3.wheat\t4.exit\t";
    $n=Utility::getInt();
    if($n>=4)
break;
    $data=$obj->Data($n);
    array_push($item,$data);
}

// echo count($item);
$obj->saveData($item);

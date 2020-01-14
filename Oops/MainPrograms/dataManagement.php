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
function Data($select)
{
    global $item;
    $array=array();
    switch($select){
        case 1 : 
            $priceOfRice=100;
            $array["name"]="rice";
            echo "enter weight: ";
            $weight=readline();
            $array["weight"]=$weight;
            $array["priceOfWeight"]=$weight*$priceOfRice;
            array_push($item, $array);
        break;
        case 2:
            $priceOfpaulse=100;
            $array["name"]="paulse";
            echo "enter weight: ";
            $weight=readline();
            $array["weight"]=$weight;
            $array["priceOfWeight"]=$weight*$priceOfpaulse;
            array_push($item, $array);
        break;
        case 3:
            $priceOfRice=100;
            $array["name"]="wheat";
            echo "enter weight: ";
            $weight=readline();
            $array["weight"]=$weight;
            $array["priceOfWeight"]=$weight*$priceOfRice;
            array_push($item, $array);
        break;
        default:
        echo "EXIT"; 
    break;
    }
}

function saveData($item)
{
    $json1['inventory']=$item;
    $fp=fopen("/home/admin1/Documents/Fellowship/Oops/JsonFiles/datamanagement.json",'w');
    fwrite($fp,json_encode($json1));
    fclose($fp);
}
function getJson()
{
    $fp = fopen('/home/admin1/Documents/Fellowship/Oops/JsonFiles/datamanagement.json', 'r');
    $str = fread($fp, filesize('/home/admin1/Documents/Fellowship/Oops/JsonFiles/datamanagement.json'));
    fclose($fp);
   echo $str,"\n\n";
}
$item=array();
$n=0;
while($n< 4){
    echo "enter items\n 1.rice\t\t2.paulse\t3.wheat\t4.exit\t";
    $n=readline();
    Data($n);
}
saveData($item);


?>
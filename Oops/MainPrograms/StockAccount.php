<?php
include "/home/admin1/Documents/Fellowship/Oops/Utility/utility.php";
 class StockAccount{
    // function stockAccount($filename)
    // {
    //     $fp=fopen($filename,'w');
    //     return $fp;
    // }
    function balance()
    {

    }
    function buy($amount,$symbol)
    {

    }
    function saveFile($filename,$array)
    {
        $fp=fopen($filename,'w');
        fwrite($fp,json_encode($array));
        fclose($fp);
    }
    function printReport()
    {

    }
}

function account()
{
    $stockObject=new StockAccount();
    echo "enter a option: ";
    $option=Utility::getInt();
    switch($option){
        case 1:
            echo "enter file name what you want: ";
            $filename=readline();
            
            $array=addData();
            $stockObject->saveFile($filename,$array);
        break;


    }
}
function addData()
{
    echo "enter number of users: ";
    $array=array();
    $users=Utility::getInt();
    for($i=0;$i<$users;$i++){
        $arr=array();
        echo "enter name :";
        $name=Utility::nameValidation();
        $arr['name']=$name;
        echo "enter balance : ";
        $balance=Utility::getInt();
        $arr['balance']=$balance;
        array_push($array,$arr);
    }
    return $array;
}
account();
?>
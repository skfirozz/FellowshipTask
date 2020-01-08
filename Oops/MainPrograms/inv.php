<?php
set_error_handler(function ($errno, $errstr, $error_file, $error_line) {
    echo "!!!!Error Occured!!!!!!!\n";
    echo "Error: [$errno] $errstr - $error_file:$error_line \n";
    echo "Terminating!!!!!!!!!\n";
    die();
});
require("Utility.php");
class Inventory{
    function __construct($name , $weight , $price)
    {
        $this->name = $name ;
        $this->weight = $weight ; 
        $this->price = $price ;
    }
    public $name ;
    public $weight ;
    public $price ;
}
function arrayObject(){
    $name = ["Rice","Wheat","Pulses"];
    $arrObj = [];
    for ($i=0; $i < 3 ; $i++) {
        echo "enter price of ".$name[$i]."  ";
        $weight = Utility::getInt();
        echo "enter weight of ".$name[$i]." in kg  ";
        $price = Utility::getInt();
        echo "\n\n";
        $arrObj[$i] = new Inventory($name[$i] , $weight , $price) ;
    }
     return $arrObj ;
}
function jsonPut($arr ,$file){
   $json =  json_encode($arr);
   file_put_contents($file ,$json);
}

function getJson($file){
    $contents = file_get_contents($file);
    $arr = json_decode($contents ,true);
    return $arr ;
}
function printValue($arr){
    $price = 0 ;
    for ($i=0; $i < count($arr) ; $i++) {
        $tt = $arr[$i]['weight']*$arr[$i]['price'];
        echo "Price for ".$arr[$i]['name']." is : ".$tt ."rs\n" ;
        $price += $tt ;
    }
    echo "Total Price is : ".$price."rs\n";
}
function run(){
    $file = "Inventory.json";
    $arr = arrayObject();
    jsonPut($arr, $file);
    $jsonArr = getJson($file);
    printValue($jsonArr);
}
run();
?>


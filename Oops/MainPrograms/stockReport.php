<?php
include "/home/admin1/Documents/Fellowship/Oops/Utility/utility.php";
function Data()
{
    global $item;
    $array=array("StockName"=>"","noOfStocks"=>0,"price"=>0,"total"=>0);
    echo "enter the stock name: ";
    $name=Utility::nameValidation();
    $array['StockName']=$name;
    echo "enter the number of shares: ";
    $shares=Utility::numberValidation();
    $array['noOfStocks']=$shares;
    echo "enter the share price: ";
    $price=Utility::numberValidation();
    $array['price']=$price;
    $array['total']=$price*$shares;
    array_push($item, $array);
        
}
function saveData($item)
{
    $json['stock']=$item;
    $fp=fopen("/home/admin1/Documents/Fellowship/Oops/JsonFiles/stockReport.json",'w');
    fwrite($fp,json_encode($json));
    fclose($fp);
}
function getJson()
{
    $fp = fopen('/home/admin1/Documents/Fellowship/Oops/JsonFiles/stockReport.json', 'r');
    $str = fread($fp, filesize('/home/admin1/Documents/Fellowship/Oops/JsonFiles/stockReport.json'));
    fclose($fp);
    return json_decode($str,true);
}
function display($array)
{
    $stockValue=0;$totalStockVal=0;
    echo "\nname   noOf  price  total ";
    foreach($array['stock'] as $key){
        echo "\n". $key['StockName']."       ".$key['noOfStocks']."      ".$key['price']. "   ".$key['total'];
        $totalStockVal +=$key['total'];
    }
    echo "\nvalue of total stocks: ",$totalStockVal,"\n\n";
}
$item=array();
$n=1;
while($n== 1){
    Data();
    echo "  enter 1 to add\n  \t2 to exit:  ";
    $n=readline();
  
}
saveData($item);
$arr=getJson();
display($arr);



?>
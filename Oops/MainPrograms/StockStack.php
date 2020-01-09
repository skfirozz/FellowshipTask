<?php
include '/home/admin1/Documents/Fellowship/Oops/Utility/utility.php';
include '/home/admin1/Documents/Fellowship/Oops/MainPrograms/Stack.php';
$array = json_decode(file_get_contents('/home/admin1/Documents/Fellowship/Oops/JsonFiles/stock.json'));
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
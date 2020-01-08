<?php
include "/home/admin1/Documents/Fellowship/Oops/MainPrograms/LinkedList.php";
$obj=new LinkedList();
$array=json_decode(file_get_contents('/home/admin1/Documents/Fellowship/Oops/JsonFiles/stock.json'));
for($i=0;$i<count($array);$i++){
    echo $array[$i]->name,"\n\n";
    // $obj->adding($array[$i]->name);
}
?>
<?php
include "/home/admin1/Documents/Fellowship/Data/DataStructure/Utility/utility.php";
$array=Utility::primeRange();
for($i=0;$i<=9;$i++){
    for($j=0;$j<count($array[$i]);$j++){
        if(!$array[$i][$j] )
    break;
    echo $array[$i][$j]," ";
    }
    echo "\n";
}
?>
<?php
/********************************************************************
* @Execution : Fellowship/Data/DataStructure/MainPrograms $ php prime2DArray.php
* @description :  Take a range of 0 ­ 1000 Numbers and find the Prime numbers in that range. Store
    the prime numbers in a 2D Array, the first dimension represents the range 0­100,
    100­-200, and so on. While the second dimension represents the prime numbers in
    that range....
*@purpose : storing prime numbers in 2D array 
* @function : Utility/utility
* @file : prime2DArray.php
* @author : skfirozz <shaikfiroz838@gmail.com>
* @version : 7.2.24
* @since : 24-12-2019
*********************************************************************/
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
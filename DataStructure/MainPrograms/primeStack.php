<?php
/********************************************************************
* @Execution : Fellowship/Data/DataStructure/MainPrograms $ php primeStack.php
* @description :  Take a range of 0 ­ 1000 Numbers and find the Prime numbers in that range. Store
    the prime numbers in a 2D Array, the first dimension represents the range 0­100,
    100­-200, and so on. While the second dimension represents the prime numbers in
    that range....
*@purpose : printing prime anagrams using stack in reverse manner
* @function : Utility/utility
* @file : primeStack.php
* @author : skfirozz <shaikfiroz838@gmail.com>
* @version : 7.2.24
* @since : 24-12-2019
*********************************************************************/
include "/home/admin1/Documents/Fellowship/Data/DataStructure/Utility/utility.php";
include "/home/admin1/Documents/Fellowship/Data/DataStructure/BusinessLogic/businessLogic.php";
$array=Utility::primeRange1();
$anagram=Utility::primeAnagram($array);

$obj=new BusinessLogic();
for($i=0;$i<count($anagram);$i++){
    $obj->push($anagram[$i]);
}
for($i=0;$i<count($array);$i++){
    $obj->primePop();
}
echo "\n\n";
?>
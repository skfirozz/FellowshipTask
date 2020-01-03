<?php
/********************************************************************
* @Execution : Fellowship/Data/DataStructure/MainPrograms $ php primeAnagram.php
* @description :  Take a range of 0 ­ 1000 Numbers and find the Prime anagrams in that range. Store
    the prime anagrams in a 2D Array, the first dimension represents the range 0­100,
    100­-200, and so on. While the second dimension represents the prime numbers in
    that range....
*@purpose : storing prime anagrams in 2D array
* @function : Utility/utility
* @file : primeAnagram.php
* @author : skfirozz <shaikfiroz838@gmail.com>
* @version : 7.2.24
* @since : 24-12-2019
*********************************************************************/
include "/home/admin1/Documents/Fellowship/Data/DataStructure/Utility/utility.php";
$array=Utility::primeRange();
Utility::primeAnagram($array);
?>
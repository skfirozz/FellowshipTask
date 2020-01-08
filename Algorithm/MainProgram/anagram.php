<?php
/********************************************************************
* @Execution : Fellowship/Algorithms/MainPrograms $ php anagram.php
* @description :checking two strings are anagram or not
* @Purpose : Anagram  ....
* @function : Utility/utility
* @file : anagram
* @author : skfirozz <shaikfiroz838@gmail.com>
* @version : 7.2.24
* @since : 26-12-2019
*
*********************************************************************/
include "/home/admin1/Documents/Fellowship/Algorithm/Utility/utility.php";
echo "\nenter a string1: ";
$str1=readline();
echo "enter a string2: ";
$str2=readline();
Utility::AnagramOrNot($str1,$str2);
?>
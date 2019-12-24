<?php
/********************************************************************
* @Execution : Fellowship/Algorithms/MainPrograms $ php anagram.php
* @description : One string is an anagram of another if the second is simply a
  rearrangement of the first. For example, 'heart' and 'earth' are anagrams...
* @Purpose : The Two Strings are Anagram or not....
* @function : Utility/utility
* @file : anagram
* @author : Skfirozz <shaikfiroz838@gmail.com>
* @version : 7.2.24
* @since : 24-12-2019
*
*********************************************************************/
include "/home/admin1/Documents/Fellowship/Algorithms/Utility/utility.php";
echo "\nenter a string1: ";
$str1=readline();
echo "enter a string2: ";
$str2=readline();
Utility::AnagramOrNot($str1,$str2);
?>
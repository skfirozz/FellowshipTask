<?php
/********************************************************************
* @Execution : Fellowship/Algorithms/MainPrograms $ php primePalindrome.php
* @description :prime palindrome numbers
* @Purpose : prime Palindromes ....
* @function : Utility/utility
* @file : primepalindrome
* @author : skfirozz <shaikfiroz838@gmail.com>
* @version : 7.2.24
* @since : 26-12-2019
*
*********************************************************************/
include "/home/admin1/Documents/Fellowship/Algorithm/Utility/utility.php";
echo "enter range:\n";
$range=readline();
$array=Utility::primeRange($range);
echo "prime Numbers are:\n";
Utility::dispayArray($array);

echo "\n\nprime Palindromes are: ";
$anagram=Utility::primePalindrome($array);

echo "\nprime Anagrams are:\n";
$prim=Utility::primeAnagram($array);

?>
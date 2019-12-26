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
echo "prime palindromes are:\n";
$array=Utility::primeRange($range);
$prim=Utility::primePalindrome($array);
for($i=0;$i<count($prim);$i++){
    echo $prim[$i]," ";
}
?>
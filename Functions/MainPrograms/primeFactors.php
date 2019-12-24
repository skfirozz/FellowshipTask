<?php
/********************************************************************
* @Execution : Fellowship/Algorithms/MainPrograms $ php primeFactors.php
* @description :Take a range of 0 ­ 1000 Numbers and find the Prime numbers in that range.
* @Purpose : prime numbers in a range....
* @function : Utility/utility
* @file : primeRange.php
* @author : skfirozz <shaikfiroz838@gmail.com>
* @version : 7.2.24
* @since : 24-12-2019
*********************************************************************/
include "/home/admin1/Documents/Fellowship/Functions/Utility/utility.php";
echo "enter a number: ";
$number=readline(); 
Utility::primeFactors($number)
?>
<?php
/********************************************************************
* @Execution : Fellowship/Functions/MainPrograms $ php distance.php
* @description :The number of times to Flip Coin. Ensure it is positive integer
* @Purpose : flipping coin for n number of times....
* @function : Utility/utility
* @file : flipCoin.php
* @author : skfirozz <shaikfiroz838@gmail.com>
* @version : 7.2.24
* @since : 24-12-2019
*********************************************************************/
include "/home/admin1/Documents/Fellowship/Functions/Utility/utility.php";
echo "enter range: \n";
$range=readline();
echo "prime numbers 0-$range are:\n";
Utility::primeRange($range);
?>
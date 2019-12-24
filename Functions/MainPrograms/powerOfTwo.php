<?php
/********************************************************************
* @Execution : Fellowship/Functions/MainPrograms $ php powerOfTwo.php
* @description :The number of times to Flip Coin. Ensure it is positive integer
* @Purpose : This program takes a command­line argument N and prints a table of the
   powers of 2 that are less than or equal to 2^N ..
* @function : Utility/utility
* @file : powerOfTwo.php
* @author : skfirozz <shaikfiroz838@gmail.com>
* @version : 7.2.24
* @since : 24-12-2019
*********************************************************************/
include "/home/admin1/Documents/Fellowship/Functions/Utility/utility.php";
echo "enter the power:  ";
$power=readline();
Utility::powerOfTwo($power);
?>
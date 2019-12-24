<?php
/********************************************************************
* @Execution : Fellowship/Functions/MainPrograms $ php harmonicNumber.php
* @description :Prints the Nth harmonic number: 1/1 + 1/2 + ... + 1/N
* @Purpose : finding N th Hormonic number....
* @function : Utility/utility
* @file : harmonicNumber.php
* @author : skfirozz <shaikfiroz838@gmail.com>
* @version : 7.2.24
* @since : 24-12-2019
*********************************************************************/
include "/home/admin1/Documents/Fellowship/Functions/Utility/utility.php";
echo "enter a number:  ";
 $number=readline();
 Utility::harmonicNumber($number);
?>
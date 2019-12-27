<?php
/********************************************************************
* @Execution : Fellowship/Algorithm/MainPrograms $ php decimalToBinary.php
* @description : Write a static function toBinary that outputs the binary (base 2) representation of
    the decimal number typed as the input. It is based on decomposing the number into
    a sum of powers of 2
* @Purpose : converting decimal to binary....
* @function : Utility/utility
* @file : decimalToBinary.php
* @author : skfirozz <shaikfiroz838@gmail.com>
* @version : 7.2.24
* @since : 27-12-2019
*********************************************************************/
include "/home/admin1/Documents/Fellowship/Algorithm/Utility/utility.php";
echo "enter the decimal value: ";
$dec=readline();
$binary=Utility::decmalToBinary($dec);
?>
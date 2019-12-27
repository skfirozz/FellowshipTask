<?php
/********************************************************************
* @Execution : Fellowship/Algorithm/MainPrograms $ php binaryNibbles.php
* @description : Write a static function toBinary that outputs the binary (base 2) representation of
    the decimal number typed as the input. It is based on decomposing the number into
    a sum of powers of 2 and swap half half binary numbers and find that swapped decimal number
* @Purpose : converting decimal to binary....
* @function : Utility/utility
* @file : binaryNibbles.php
* @author : skfirozz <shaikfiroz838@gmail.com>
* @version : 7.2.24
* @since : 27-12-2019
*********************************************************************/
include "/home/admin1/Documents/Fellowship/Algorithm/Utility/utility.php";
echo "enter decimal number: ";
$dec=readline();
$binary=Utility::decmalToBinary($dec);
Utility::binaryNibbles($binary);
?> 
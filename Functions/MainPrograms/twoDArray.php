<?php
/********************************************************************
* @Execution : Fellowship/Functions/MainPrograms $ php twoDArray.php
* @description :A library for reading in 2D arrays of integers, doubles, or booleans from
    standard input and printing them out to standard output.
* @Purpose : two dimensional array....
* @function : Utility/utility
* @file : twoDArray.php
* @author : skfirozz <shaikfiroz838@gmail.com>
* @version : 7.2.24
* @since : 24-12-2019
*********************************************************************/
include "/home/admin1/Documents/Fellowship/Functions/Utility/utility.php";
echo "enter rows: ";
$row=readline();
echo "\nenter columns:  ";
$col=readline();
Utility::twoDArr($row,$col);
?>
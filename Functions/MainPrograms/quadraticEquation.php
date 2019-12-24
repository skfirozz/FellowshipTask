<?php
/********************************************************************
* @Execution : Fellowship/Functions/MainPrograms $ php quadraticEquation.php
* @description :Write a program Quadratic to find the roots of the equation a*x*x + b*x + c.
    Since the equation is x*x, hence there are 2 roots.
* @Purpose : finding quadratic roots of a equation....
* @function : Utility/utility
* @file : quadraticEquation.php
* @author : skfirozz <shaikfiroz838@gmail.com>
* @version : 7.2.24
* @since : 24-12-2019
*********************************************************************/
include "/home/admin1/Documents/Fellowship/Functions/Utility/utility.php";
echo "enter a: ";
$a=readline();
echo "\nenter b: ";
$b=readline();
echo "\nenter c: ";
$c=readline();
Utility::quadratic($a,$b,$c);
?>
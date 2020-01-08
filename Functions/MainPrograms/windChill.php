<?php
/********************************************************************
* @Execution : Fellowship/Functions/MainPrograms $ php windChill.php
* @description :Write a program WindChil that takes two double command­line arguments t
    and v and prints the wind chill
* @Purpose : windXChill Calualtion....
* @function : Utility/utility
* @file : windChill.php
* @author : skfirozz <shaikfiroz838@gmail.com>
* @version : 7.2.24
* @since : 24-12-2019
*********************************************************************/
include "/home/admin1/Documents/Fellowship/Functions/Utility/utility.php";
echo "enter temperature: ";
$t=readline();
echo "\nenter speed v: ";
$v=readline();
Utility::windChill($t,$v);
?>
<?php
/********************************************************************
* @Execution : Fellowship/Algorithm/MainPrograms $ php wordBubbleSort.php
* @description : To the Util Class add dayOfWeek static function that takes a date as input and
    prints the day of the week that date falls on. Your program should take three
    command­line arguments: m (month), d (day), and y (year).
* @Purpose : finding the day of the week....
* @function : Utility/utility
* @file : dayOfWeek.php
* @author : skfirozz <shaikfiroz838@gmail.com>
* @version : 7.2.24
* @since : 26-12-2019
*********************************************************************/
include "/home/admin1/Documents/Fellowship/Algorithm/Utility/utility.php";
echo "enter a year: ";
$year=readline();
echo "\nenter a month: ";
$month=readline();
echo "\nenter a date: ";
$date=readline();
$day=Utility::dayOfWeek($year,$month,$date);

?>
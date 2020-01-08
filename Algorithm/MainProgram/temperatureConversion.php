<?php
/********************************************************************
* @Execution : Fellowship/Algorithm/MainPrograms $ php temperatureConversion.php
* @description : To the Util Class add temperaturConversion static function, given the temperature
    in fahrenheit as input outputs the temperature in Celsius or viceversa
* @Purpose : converting celsius to fahrenheit and vise versa....
* @function : Utility/utility
* @file : temperatureConversion.php
* @author : skfirozz <shaikfiroz838@gmail.com>
* @version : 7.2.24
* @since : 26-12-2019
*********************************************************************/
include "/home/admin1/Documents/Fellowship/Algorithm/Utility/utility.php";
echo "enter celsius temperature: ";
$celsius=readline();
echo "enter fahrenheit: ";
$fahrenheit=readline();
Utility::temperatureConv($celsius,$fahrenheit);
?>
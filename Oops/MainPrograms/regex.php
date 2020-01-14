<?php
/********************************************************************
* @Execution : Fellowship/OOps/Oops/MainPrograms $ php regex.php
* @description :Read in the following message: Hello <<name>>, We have your full
    name as <<full name>> in our system. your contact number is 91­xxxxxxxxxx.
    Please,let us know in case of any clarification Thank you BridgeLabz 01/01/2016.
* @Purpose : Print the Modified Message.
* @function : Utility/utility
* @file : regex.php
* @author : skfirozz <shaikfiroz838@gmail.com>
* @version : 7.2.24
* @since : 11-01-2020
*********************************************************************/
include "/home/admin1/Documents/Fellowship/Oops/Utility/utility.php";
$str="Hello <<name>>, We have your full 
name as <<full name>> in our system. your contact number is 91­-xxxxxxxxxx.
Please,let us know in case of any clarification Thank you BridgeLabz xx/xx/xxxx.";
echo "enter valid name: ";
$name=Utility::nameValidation();
echo "\nenter valid full name: ";
$fName=Utility::fullNameValidation();
echo "\nenter valid mobile Number: ";
$number=Utility::numberValidation();
$date=date("d/m/Y");
$str=str_replace("<<name>>",$name,$str);
$str=str_replace("<<full name>>",$fName,$str);
$str=str_replace("xxxxxxxxxx",$number,$str);
$str=str_replace("xx/xx/xxxx",$date,$str);
echo $str,"\n\n";
?>
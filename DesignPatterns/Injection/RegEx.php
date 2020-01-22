<?php

$str="Hello <<name>>, We have your full 
name as <<full name>> in our system. your contact number is 91­-xxxxxxxxxx.
Please,let us know in case of any clarification Thank you BridgeLabz xx/xx/xxxx.";
echo "enter valid name: ";
$nameInput1='firoz';
echo "\nenter valid full name: ";
$fullNameInput2='shaik firoz';
echo "\nenter valid mobile Number: ";
$numberInput3=8886822017;
$date=date("d/m/Y");
$str=str_replace("<<name>>",$nameInput1,$str);
$str=str_replace("<<full name>>",$fullNameInput2,$str);
$str=str_replace("xxxxxxxxxx",$numberInput3,$str);
$str=str_replace("xx/xx/xxxx",$date,$str);
echo $str,"\n\n";
?>
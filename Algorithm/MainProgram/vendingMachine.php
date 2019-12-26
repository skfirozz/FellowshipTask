<?php
/********************************************************************
* @Execution : Fellowship/Algorithm/MainPrograms $ php vendingMachine.php
* @description : There is 1, 2, 5, 10, 50, 100, 500 and 1000 Rs Notes which can be
    returned by Vending Machine. Write a Program to calculate the minimum number
    of Notes as well as the Notes to be returned by the Vending Machine as a
    Change.
* @Purpose : counting minimum number of notes....
* @function : Utility/utility
* @file : vendingMachine.php
* @author : skfirozz <shaikfiroz838@gmail.com>
* @version : 7.2.24
* @since : 26-12-2019
*********************************************************************/
include "/home/admin1/Documents/Fellowship/Algorithm/Utility/utility.php";
$array=array(1,2,5,10,50,100,500,1000);
echo "enter amount: ";
$amount=readline();
utility::vendingMachine($array,$amount);
?>
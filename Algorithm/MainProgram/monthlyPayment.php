<?php
/********************************************************************
* @Execution : Fellowship/Algorithm/MainPrograms $ php wordBubbleSort.php
* @description :Write a Util Static Function to calculate monthlyPayment that reads in three
    command­line arguments P, Y, and R and calculates the monthly payments you
    would have to make over Y years to pay off a P principal loan amount at R per cent
    interest compounded monthly.
* @Purpose : calculating monthly intrest payment on  principle amount....
* @function : Utility/utility
* @file : monthlypayment.php
* @author : skfirozz <shaikfiroz838@gmail.com>
* @version : 7.2.24
* @since : 26-12-2019
*********************************************************************/
include "/home/admin1/Documents/Fellowship/Algorithm/Utility/utility.php";
echo "enter total money: ";
$money=readline();
echo "enter years: ";
$years=readline();
echo "enter intrest: ";
$intr=readline();
Utility::monthlyPayment($years,$money,$intr);
?>
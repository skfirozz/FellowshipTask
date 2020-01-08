<?php
/********************************************************************
* @Execution : Fellowship/Functions/MainPrograms $ php CoupounNumbers.php
* @description : Given N distinct Coupon Numbers, how many random numbers do you
* need to generate distinct coupon number? This program simulates this random
* process..
* @Purpose : generating distinct random numbers....
* @function : Utility/utility
* @file : CoupounNumbers
* @author : skfirozz <shaikfiroz838@gmail.com>
* @version : 7.2.24
* @since : 24-12-2019
*********************************************************************/
include "/home/admin1/Documents/Fellowship/Functions/Utility/utility.php";
echo "enter how many coupoun numbers you want:  ";
$number=readline();
Utility::random($number);
?>
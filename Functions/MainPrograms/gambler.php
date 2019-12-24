<?php
/********************************************************************
* @Execution : Fellowship/Functions/MainPrograms $ php gambler.php
* @description :Simulates a gambler who start with $stake and place fair $1 bets until
    he/she goes broke (i.e. has no money) or reach $goal. Keeps track of the number of
    times he/she wins and the number of bets he/she makes. Run the experiment N
* @Purpose : win or loose the game....
* @function : Utility/utility
* @file : gambler.php
* @author : skfirozz <shaikfiroz838@gmail.com>
* @version : 7.2.24
* @since : 24-12-2019
*********************************************************************/
include "/home/admin1/Documents/Fellowship/Functions/Utility/utility.php";
echo "enter a goal: ";
$goal=readline();
echo "enter stake: ";
$stake=readline();
echo "enter number: ";
$number=readline();
Utility::gambler($goal,$number,$stake);
?>
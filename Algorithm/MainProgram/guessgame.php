<?php
/********************************************************************
* @Execution : Fellowship/Algorithm/MainPrograms $ php guessGame.php
* @description : akes a command­line argument N, asks you to think of a number
    between 0 and N­1, where N = 2^n, and always guesses the answer with n
    questions.....
* @function : Utility/utility
* @file : guessgame.php
* @author : skfirozz <shaikfiroz838@gmail.com>
* @version : 7.2.24
* @since : 27-12-2019
*********************************************************************/
include "/home/admin1/Documents/Fellowship/Algorithm/Utility/utility.php";
echo "enter a number: ";
$number=readline();
echo "enter a number to search: ";
$search=readline();
Utility::guessNumber($number,$search);
?>
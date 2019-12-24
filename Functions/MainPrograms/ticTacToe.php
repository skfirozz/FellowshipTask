<?php
/********************************************************************
* @Execution : Fellowship/Functions/MainPrograms $ php ticTacToe.php
* @description :Write a Program to play a Cross Game or Tic­Tac­Toe Game. Player 1 is
    the Computer and the Player 2 is the user. Player 1 take Random Cell that is the
    Column and Row.
* @Purpose : TicTacToe....
* @function : Utility/utility
* @file : ticTacToe.php
* @author : skfirozz <shaikfiroz838@gmail.com>
* @version : 7.2.24
* @since : 24-12-2019
*********************************************************************/
include "/home/admin1/Documents/Fellowship/Functions/Utility/utility.php";
$array=array(
    array(0,0,0),
    array(0,0,0),
    array(0,0,0),
);
$count=0;
Utility::randomTicPosition($array,$count);
?>
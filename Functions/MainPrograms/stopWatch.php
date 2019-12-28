<?php
/********************************************************************
* @Execution : Fellowship/Functions/MainPrograms $ php stopWatch.php
* @description :Write a Stopwatch Program for measuring the time that elapses between
    the start and end clicks
* @Purpose : stopWatch....
* @function : Utility/utility
* @file : stopWatch.php
* @author : skfirozz <shaikfiroz838@gmail.com>
* @version : 7.2.24
* @since : 24-12-2019
*********************************************************************/
include "/home/admin1/Documents/Fellowship/Functions/Utility/utility.php";
$startTime=0;$stopTime=0;
echo "enter 1 to start time: ";
echo "enter 2 to stop time: ";
$start=Utility::getInt();
if($start == 1)
    $startTime=time();
$stop= Utility::getInt();
$stopTime=time();
echo $stopTime-$startTime ,"sec.\n";
?>
<?php
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
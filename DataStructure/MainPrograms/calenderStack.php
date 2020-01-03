<?php
/********************************************************************
* @Execution : Fellowship/Data/DataStructure/MainPrograms $ php calenderStack.php
* @description : Write a program Calendar.php that takes the month and year as command­line
    arguments using stack
* @Purpose : printing the complete month calender using queue....
* @function : Utility/utility
* @file : calenderStack.php
* @author : skfirozz <shaikfiroz838@gmail.com>
* @version : 7.2.24
* @since : 24-12-2019
*********************************************************************/
include "/home/admin1/Documents/Fellowship/Data/DataStructure/Utility/utility.php";
include "/home/admin1/Documents/Fellowship/Data/DataStructure/MainPrograms/Stack.php";
function calender($month,$year)
 {
     $obj=new Stack();
     $objWeek=new Stack();
    $days = array("S"," M"," T"," W"," Th "," F"," S");
    $daysInmonth = array(31,28,31,30,31,30,31,31,30,31,30,31);
    if (Utility::leapYear($year)) {
        $daysInmonth[1] = 29;
    }
    $firstDay = Utility::printDay(1,$month,$year);
    for($i=0;$i<$firstDay;$i++){
        $obj->push("  ");
    }
    for($i=1;$i<=$daysInmonth[$month-1];$i++){
        if($i<10)
        $obj->push(" $i");
        else $obj->push($i);
    }
    for($i=0;$i<count($days);$i++){
        $objWeek->push($days[$i]);
    }
}
 echo "enter month: ";
 $month=readline();
 echo "enter year: ";
 $year=readline();
 calender($month,$year);
?>
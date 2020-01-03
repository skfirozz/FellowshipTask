<?php
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
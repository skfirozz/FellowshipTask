<?php
include "/home/admin1/Documents/Fellowship/Data/DataStructure/Utility/utility.php";
include "/home/admin1/Documents/Fellowship/Data/DataStructure/MainPrograms/queue.php";
function calender($month,$year)
 {
     $obj=new Queu();
     $objWeek=new Queu();
    $days = array("S"," M"," T"," W"," Th "," F"," S");
    $daysInmonth = array(31,28,31,30,31,30,31,31,30,31,30,31);
    if (Utility::leapYear($year)) {
        $daysInmonth[1] = 29;
    }
    $firstDay = Utility::printDay(1,$month,$year);
    for($i=0;$i<$firstDay;$i++){
        $obj->enqueue("  ");
    }
    for($i=1;$i<=$daysInmonth[$month-1];$i++){
        if($i<10)
        $obj->enqueue(" $i");
        else $obj->enqueue($i);
    }
    for($i=0;$i<count($days);$i++){
        $objWeek->enqueue($days[$i]);
    }
    $objWeek->show();
    $obj->show();
}

 echo "enter month: ";
 $month=readline();
 echo "enter year: ";
 $year=readline();
 calender($month,$year);

?>
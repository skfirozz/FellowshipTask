<?php
/********************************************************************
* @Execution : Fellowship/Data/DataStructure/MainPrograms $ php calender.php
* @description : Write a program Calendar.php that takes the month and year as command­line
    arguments and prints the Calendar of the month. Store the Calendar in an 2D Array
* @Purpose : printing the complete month calender using 2D array....
* @function : Utility/utility
* @file : calender.php
* @author : skfirozz <shaikfiroz838@gmail.com>
* @version : 7.2.24
* @since : 24-12-2019
*********************************************************************/
include "/home/admin1/Documents/Fellowship/Data/DataStructure/Utility/utility.php";
function Calender($month,$year)
{
    $days = array(array(" S "," M "," T "," W "," Th"," F "," S "));
    $daysInmonth = array(31,28,31,30,31,30,31,31,30,31,30,31);
    if (Utility::leapYear($year)) {
        $daysInmonth[1] = 29;
    }
    $firstDay = Utility::printDay(1,$month,$year);
    echo $firstDay,"\n";
    $j = $firstDay;
    $date = 1;
    for ($i=1; $i < 7; $i++) {
        $iCalender = array_fill(0,7,"   ");
        for ($j ; $j < 7; $j++) {
            if ($date <= $daysInmonth[$month-1]) {
                if ($date < 10) {
                    $iCalender[$j] = " ".$date++." ";
                } else {
                    $iCalender[$j] = " ".$date++;
                }
            }
        }
        $j = 0;
        array_push($days,$iCalender);
    }
    return $days;
}
function printCalender($days)
{
    for ($i=0; $i < 7; $i++) {
        for ($j=0; $j < 7; $j++) {
            echo $days[$i][$j];
        }
        echo "\n";
    }
}
echo "enter month\n";
$month = Utility::getInt();
while($month > 12 || $month < 1){
echo "enter value 1 to 12\n";
$month = Utility::getInt();
}
echo "enter year\n";
$year = Utility::getInt();
printCalender(Calender($month,$year));

?>


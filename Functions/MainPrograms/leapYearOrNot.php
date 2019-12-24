<?php
/********************************************************************
* @Execution : FellowshipPrograms/Functions $ node leapYearOrNote.php
* @description : Year, ensure it is a 4 digit number.
* @Purpose : year is leap year or not....
* @function : Utility/utility
* @file : leapYear
* @author : skfirozz <shaikfiroz838@gmail.com>
* @version : 7.2.24
* @since : 21-12-2019
*
*********************************************************************/
include "/home/admin1/Documents/Fellowship/Functions/Utility/utility.php";
echo "enter a year:  ";
$year=readline();
Utility::leapYearOrNot($year);
?>
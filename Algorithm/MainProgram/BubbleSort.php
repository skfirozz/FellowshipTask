<?php
/********************************************************************
* @Execution : Fellowship/Algorithm/MainPrograms $ php wordBubbleSort.php
* @description : Reads in strings from standard input and prints them in sorted order.
    Uses Bubble sort.
* @Purpose : sorting the words using Bubble sort....
* @function : Utility/utility
* @file : wordBubbleSort.php
* @author : skfirozz <shaikfiroz838@gmail.com>
* @version : 7.2.24
* @since : 26-12-2019
*********************************************************************/
include "/home/admin1/Documents/Fellowship/Algorithm/Utility/utility.php";
$words=Utility::readWords();
$array=explode(" ",$words);
Utility::bubbleSort($array);

?>
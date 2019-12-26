<?php
/********************************************************************
* @Execution : Fellowship/Algorithm/MainPrograms $ php wordInsertionSort.php
* @description : Reads in strings from standard input and prints them in sorted order.
    Uses insertion sort.
* @Purpose : sorting the words using insertion sort....
* @function : Utility/utility
* @file : wordInsertionSort.php
* @author : skfirozz <shaikfiroz838@gmail.com>
* @version : 7.2.24
* @since : 26-12-2019
*********************************************************************/
include "/home/admin1/Documents/Fellowship/Algorithm/Utility/utility.php";
$words=Utility::readWords();
$array=explode(" ",$words);
Utility::insertionSort($array);
?>
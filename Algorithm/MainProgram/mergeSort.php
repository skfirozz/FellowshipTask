<?php
/********************************************************************
* @Execution : Fellowship/Algorithm/MainPrograms $ php mergeSort.php
* @description : To Merge Sort an array, we divide it into two halves, sort the two halves
    independently, and then merge the results to sort the full array. To sort a[lo, hi),
    we use the following recursive strategy:
* @Purpose : sorting the list of words using mergeSort....
* @function : Utility/utility
* @file : mergeSort.php
* @author : skfirozz <shaikfiroz838@gmail.com>
* @version : 7.2.24
* @since : 26-12-2019
*********************************************************************/
include "/home/admin1/Documents/Fellowship/Algorithm/Utility/utility.php";
$words=Utility::readWords();
$array=explode(" ",$words);
$lb=0;$up=count($array);
Utility::div($array,$lb,$up);
?>
<?php
/********************************************************************
* @Execution : Fellowship/Algorithms/MainPrograms $ php primeRange.php
* @description :prime range 0 to 1000
  rearrangement of the first. For example, 'heart' and 'earth' are anagrams...
* @Purpose : prime numbers ....
* @function : Utility/utility
* @file : primeRange
* @author : skfirozz <shaikfiroz838@gmail.com>
* @version : 7.2.24
* @since : 24-12-2019
*
*********************************************************************/
include "/home/admin1/Documents/Fellowship/Algorithm/Utility/utility.php";
echo "enter range: ";
$range=readline();
echo "prime numbers 0-$range are:\n";
$array=Utility::primeRange($range);
for($i=0;$i<count($array);$i++)
echo $array[$i]," ";
?>
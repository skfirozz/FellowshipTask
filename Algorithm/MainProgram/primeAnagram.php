<?php
/********************************************************************
* @Execution : Fellowship/Algorithms/MainPrograms $ php primeAnagram.php
* @description :prime Anagram numbers
* @Purpose : prime Anagram ....
* @function : Utility/utility
* @file : primeAnagrams
* @author : skfirozz <shaikfiroz838@gmail.com>
* @version : 7.2.24
* @since : 26-12-2019
*
*********************************************************************/
include "/home/admin1/Documents/Fellowship/Algorithm/Utility/utility.php";
echo "enter range: ";
$range=readline();
 $array=Utility::primeRange($range);
//  for($i=0;$i<count($array);$i++)
//  echo $array[$i]," ";
Utility::primeAnagram($array);
?>
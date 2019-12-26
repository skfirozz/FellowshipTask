<?php
include "/home/admin1/Documents/Fellowship/Algorithm/Utility/utility.php";
echo "enter range: ";
$range=readline();
 $array=Utility::primeRange($range);
//  for($i=0;$i<count($array);$i++)
//  echo $array[$i]," ";
Utility::primeAnagram($array);
?>
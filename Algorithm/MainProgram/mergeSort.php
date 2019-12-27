<?php
include "/home/admin1/Documents/Fellowship/Algorithm/Utility/utility.php";
echo "enter the size of words: ";
$size=readline();
echo "enter the words: ";
$array=array();
for($i=0;$i<$size;$i++)
$array[$i]=readline();
$sortedArray=Utility::mergesort($array);
print_r($sortedArray);
?>
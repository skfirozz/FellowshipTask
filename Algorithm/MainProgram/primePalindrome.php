<?php
include "/home/admin1/Documents/Fellowship/Algorithm/Utility/utility.php";
echo "enter range:\n";
$range=readline();
echo "prime palindromes are:\n";
$array=Utility::primeRange($range);
$prim=Utility::primePalindrome($array);
for($i=0;$i<count($prim);$i++){
    echo $prim[$i]," ";
}
?>
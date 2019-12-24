<?php
include "/home/admin1/Documents/Fellowship/Functions/Utility/utility.php";
echo "enter range: \n";
$range=readline();
echo "prime numbers 0-$range are:\n";
Utility::primeRange($range);
?>
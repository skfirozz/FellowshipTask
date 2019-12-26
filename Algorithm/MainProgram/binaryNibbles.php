<?php
include "/home/admin1/Documents/Fellowship/Algorithm/Utility/utility.php";
echo "enter decimal number: ";
$dec=readline();
$binary=Utility::decmalToBinary($dec);
Utility::binaryNibbles($binary);
?> 
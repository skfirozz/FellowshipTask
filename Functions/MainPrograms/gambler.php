<?php
include "/home/admin1/Documents/Fellowship/Functions/Utility/utility.php";
echo "enter a goal: ";
$goal=readline();
echo "enter stake: ";
$stake=readline();
echo "enter number: ";
$number=readline();
Utility::gambler($goal,$number,$stake);
?>
<?php
include "/home/admin1/Documents/Fellowship/Functions/Utility/utility.php";
echo "enter temperature: ";
$t=readline();
echo "\nenter speed v: ";
$v=readline();
Utility::windChill($t,$v);
?>
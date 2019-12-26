<?php
include "/home/admin1/Documents/Fellowship/Algorithm/Utility/utility.php";
echo "enter celsius temperature: ";
$celsius=readline();
echo "enter fahrenheit: ";
$fahrenheit=readline();
Utility::temperatureConv($celsius,$fahrenheit);
?>
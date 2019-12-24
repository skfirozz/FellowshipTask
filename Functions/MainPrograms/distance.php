<?php
/********************************************************************
* @Execution : Fellowship/Functions/MainPrograms $ php distance.php
* @description : two integer command­line arguments x
   and y and prints the Euclidean distance from the point (x, y) to the origin (0, 0).
* @Purpose : distance from the origin....
* @function : Utility/utility
* @file : distance
* @author : skfirozz <shaikfiroz838@gmail.com>
* @version : 7.2.24
* @since : 24-12-2019
*********************************************************************/
include "/home/admin1/Documents/Fellowship/Functions/Utility/utility.php";
echo "enter x: ";
$x=readline();
echo "enter y: ";
$y=readline();
Utility::distanceOrigin($x,$y)
?>
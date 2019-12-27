<?php
/********************************************************************
* @Execution : Fellowship/Algorithm/MainPrograms $ php elapsedTime.php
* @description : Write main function to call the utility function and check how much time that sorting or searching method consuming
* @Purpose : counting the time how much time the method is taking....
* @function : Utility/utility
* @file : elapsedTime.php
* @author : skfirozz <shaikfiroz838@gmail.com>
* @version : 7.2.24
* @since : 27-12-2019
*********************************************************************/
include "/home/admin1/Documents/Fellowship/Algorithm/Utility/utility.php";
// include "/home/admin1/Documents/Fellowship/Algorithm/BusinessLogic/businessLogic.php";
$intArray=BusinessLogic::intArray();
$stringArray=BusinessLogic::stringArray();
echo "\n";
echo implode(" ",$intArray),"\n\n";
echo "enter the number to search: ";
$int=readline();
$starTime=microtime(true);
Utility::binarySearch($intArray,$int);
$endTime=microtime(true);
echo "int Binary Search time---",$endTime-$starTime,"\n\n";

echo implode(" ",$stringArray),"\n\n";
echo "enter the word to search: ";
$word=readline();
$starTime=microtime(true);
Utility::binarySearch($stringArray,$word);
$endTime=microtime(true);
echo "string Binary Search time---",$endTime-$starTime,"\n";

$starTime=microtime(true);
Utility::bubbleSort($intArray);
$endTime=microtime(true);
echo "intBubbleSort time---",$endTime-$starTime,"\n";

$starTime=microtime(true);
Utility::bubbleSort($stringArray);
$endTime=microtime(true);
echo "stringBubbleSort time---",$endTime-$starTime,"\n";

$starTime=microtime(true);
Utility::insertionSort($intArray);
$endTime=microtime(true);
echo "intInsertionSort time---",$endTime-$starTime,"\n";

$starTime=microtime(true);
Utility::insertionSort($stringArray);
$endTime=microtime(true);
echo "stringInsertionSort time---",$endTime-$starTime,"\n";

?>
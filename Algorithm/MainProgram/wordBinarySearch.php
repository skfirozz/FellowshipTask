<?php
/********************************************************************
* @Execution : Fellowship/Algorithm/MainPrograms $ php wordBinarySearch.php
* @description : Read in a list of words from File. Then prompt the user to enter a word to
    search the list. The program reports if the search word is found in the list.
* @Purpose : searching the word in array....
* @function : Utility/utility
* @file : wordBinarySearch.php
* @author : skfirozz <shaikfiroz838@gmail.com>
* @version : 7.2.24
* @since : 26-12-2019
*********************************************************************/
include "/home/admin1/Documents/Fellowship/Algorithm/Utility/utility.php";
$words=Utility::readWords();
echo $words," \n";
$array=explode(" ",$words);
$arr=BusinessLogic::bubbleSort($array);
echo "enter the word to search: ";
$word=readline();
if(Utility::binarySearch($arr,$word))
echo "found\n";

else 
echo "not found\n";

?>
<?php
/********************************************************************
* @Execution : Fellowship/Data/DataStructure/MainPrograms $ php palindromeChecker.php
* @description : A palindrome is a string that reads the same forward and backward, for
    example, radar, toot, and madam. We would like to construct an algorithm to
    input a string of characters and check whether it is a palindrome.
* @Purpose : given string is palindrome or not using queue....
* @function : Utility/utility
* @file : palindromeChecker.php
* @author : skfirozz <shaikfiroz838@gmail.com>
* @version : 7.2.24
* @since : 24-12-2019
*********************************************************************/
include "/home/admin1/Documents/Fellowship/Data/DataStructure/BusinessLogic/businessLogic.php";
$obj=new BusinessLogic();
echo "enter the string: ";
$str=readline();
for($i=0;$i<strlen($str);$i++){
    $obj->addRear($str[$i]);
}
if($obj->palindromeCheck())
echo "true\n";
else echo "false\n";
?>
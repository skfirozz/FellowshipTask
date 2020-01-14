<?php
/********************************************************************
* @Execution : Fellowship/OOps/Oops/MainPrograms/AddressBook $ php AddressBook.php
* @description :AddressBook operations
* @Purpose : storing all in  JSON File
* @function : Utility/utility
* @file : AdddressBook.php
* @author : skfirozz <shaikfiroz838@gmail.com>
* @version : 7.2.24
* @since : 11-01-2020
*********************************************************************/
include '/home/admin1/Documents/Fellowship/OOps/Oops/MainPrograms/AddressBook/businessLogic.php';
include '/home/admin1/Documents/Fellowship/OOps/Oops/MainPrograms/AddressBook/Utility.php';
$objUtil=new Utility();
$obj=new BusinessLogic();
$n=1;
while($n==1){
    $objUtil->run($obj);
    echo "\nenter 1 to continue: ";
    $n=readline();
    if($n != 1)
    break;
}
echo "\n\n";
?>
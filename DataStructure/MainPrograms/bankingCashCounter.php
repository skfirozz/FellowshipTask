<?php
/********************************************************************
* @Execution : Fellowship/Data/DataStructure/MainPrograms $ php bankingCaashCounter.php
* @description : Create a Program which creates Banking Cash Counter where people
    come in to deposit Cash and withdraw Cash. Have an input panel to add people
    to Queue to either deposit or withdraw money and dequeue the people. Maintain
    the Cash Balance.
* @Purpose : using queue doing enque and dequeue....
* @function : Utility/utility
* @file : bankingCashCounter.php
* @author : skfirozz <shaikfiroz838@gmail.com>
* @version : 7.2.24
* @since : 24-12-2019
*********************************************************************/
include "/home/admin1/Documents/Fellowship/Data/DataStructure/BusinessLogic/businessLogic.php";
$obj=new BusinessLogic();
$bool=true;
echo "enter number of users: ";
$users=readline();
for($i=0;$i<$users;$i++){
    echo "enter name: ";
    $name=readline();
    $obj->enqueue($name);
}
$obj->show();
for($i=0;$i<$users;$i++){
     echo "   user:  ",$obj->currentUser(),"\nenter amount: ";
    $amount=readline();
    echo "enter 1 to deposit\nenter 2 to withdraw:\n";
    $option=readline();
    $obj->dequeue();
    $obj->show();
    $obj->bankBalance($option,$amount);
}
$balance=$obj->bankBalance;
echo "bank balance is: ",$balance,"\n";
?>
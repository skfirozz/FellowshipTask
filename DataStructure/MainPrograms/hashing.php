<?php
/********************************************************************
* @Execution : Fellowship/Data/DataStructure/MainPrograms $ php hashing.php
* @description : Create a Slot of 10 to store Chain of Numbers that belong to each Slot to
    efficiently search a number from a given set of number
* @Purpose : using linkedlist for hashing....
* @function : Utility/utility
* @file : hashing.php
* @author : skfirozz <shaikfiroz838@gmail.com>
* @version : 7.2.24
* @since : 24-12-2019
*********************************************************************/
include "/home/admin1/Documents/Fellowship/Data/DataStructure/Utility/utility.php";
include "/home/admin1/Documents/Fellowship/Data/DataStructure/MainPrograms/hashLinkedList.php";
$numbers=Utility::readHashNumbers();
$array=explode(" ",$numbers);
echo implode(" ",$array),"\n";
$obj[10]=new LinkedList();
for($i=0;$i<count($obj);$i++){
    $obj[$i]=null;
}
for($i=0;$i<count($obj);$i++){
    $obj[$i]=new LinkedList();
}
for($i=0;$i<count($array);$i++){
    $remainder=$array[$i]%11;
    $obj[$remainder]->adding($array[$i]);
}
for($i=0;$i<count($obj);$i++){
    echo "[$i]->";
    $obj[$i]->display();
    echo "\n\n";
}
$ob=new LinkedList();
echo "enter to search: ";
$search=readline();
$val=$search%11;
$obj[$val]->search($search);
?>
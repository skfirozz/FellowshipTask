<?php
include '/home/admin1/Documents/Fellowship/Data/DataStructure/MainPrograms/DoublyLinkedList.php';
$obj=new  DoublyLinkedList();
for($i=0;$i<10;$i++)
{
    $obj->addFront($i);
}
$obj->display();
echo "\n";
$obj->display1();
?>
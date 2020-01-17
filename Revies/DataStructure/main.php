<?php
/*Write a program  to delete alternate nodes of a linked list 
@input 5=>>> 1-4-8-10-15
@output >>1-8-15
*/
include '/home/admin1/Documents/Fellowship/Reviews/Revies/DataStructure/ListNode.php';
include '/home/admin1/Documents/Fellowship/Reviews/Revies/DataStructure/BusinessLogic.php';
echo "enter numbers of size: ";
$size=readline();
$obj=new BusinessLogic();
for($i=0;$i<$size;$i++)
{
$obj->insert(readline());
}
$obj->display();
$obj->delete();
$obj->display();

?>
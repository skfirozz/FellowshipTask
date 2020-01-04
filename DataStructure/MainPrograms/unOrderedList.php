<?php
/********************************************************************
* @Execution : Fellowship/Data/DataStructure/MainPrograms $ php unOrderedList.php
* @description : Read the Text from a file, split it into words and arrange it as Linked List.
    Take a user input to search a Word in the List. If the Word is not found then add it
    to the list, and if it found then remove the word from the List. In the end save the
    list into a file
* @Purpose : Creating unordered linked list and search if exist add else remove from file....
* @function : Utility/utility
* @file : unOrderedList.php
* @author : skfirozz <shaikfiroz838@gmail.com>
* @version : 7.2.24
* @since : 3-12-2019
*********************************************************************/
// include "/home/admin1/Documents/Fellowship/DataStructure/MainPrograms/node.php";
include "/home/admin1/Documents/Fellowship/Data/DataStructure/Utility/utility.php";

$obj=new Utility();
$words=Utility::readWords();
$array=explode(" ",$words);
for($i=0;$i<count($array);$i++){
   $obj->insert($array[$i]);
}
$obj->display();
echo "enter to search: ";
$search=readline();
$obj->search($search);
$obj->display();
?>
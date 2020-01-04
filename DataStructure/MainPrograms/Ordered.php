<?php
/********************************************************************
* @Execution : Fellowship/Data/DataStructure/MainPrograms $ php Ordered.php
* @description : Read the Text from a file, split it into words and arrange it as Linked List.
    Take a user input to search a Word in the List. If the Word is not found then add it
    to the list, and if it found then remove the word from the List. In the end save the
    list into a file
* @Purpose : Creating ordered linked list and search if exist add else remove from file....
* @function : Utility/utility
* @file : Ordered.php
* @author : skfirozz <shaikfiroz838@gmail.com>
* @version : 7.2.24
* @since : 3-12-2019
*********************************************************************/

include "/home/admin1/Documents/Fellowship/DataStructure/MainPrograms/node.php";
include "/home/admin1/Documents/Fellowship/DataStructure/Utility/utility.php";
class LinkedList{
    public $firstNode;
    public $lastNode;
    function __construct()
    {
        $this->firstNode = NULL;
        $this->lastNode = NULL;
    } 
    function insert($data)
    {
        $newNode=new ListNode($data);
        $ta=$this->firstNode;
        if($ta == null || $ta->data > $data ){
            $newNode->next=$this->firstNode;
            $this->firstNode=&$newNode;
        }
        else {
            while ($ta->data < $data ){
                if( $ta->data < $data && $ta->next ==null || $ta->data < $data && $ta->next->data > $data){
                    $ba=$ta;
                    $ba=$ta->next;
                    $ta->next=$newNode;
                    $newNode->next=$ba;
                }
                $ta=$ta->next;
            }
        }
    }

    function delete($data)
    {
        $current = $this->firstNode;
        $previous = $this->firstNode;
        while($current->data != $data){
            if($current->next == NULL)
                return NULL;
            else{
                $previous = $current;
                $current = $current->next;
            }
        }
            if($current == $this->firstNode){
                $this->firstNode = $this->firstNode->next;
            }
            else{
                if($this->lastNode == $current)
                     $this->lastNode = $previous;
                $previous->next = $current->next;
            }
    }
    function search($data)
    {
        $bool=true;
        $ta=$this->firstNode;
        while($ta != null){
            if($ta->data == $data){
                LinkedList::delete($data);
                echo "deleted $data\n";
                $bool=false;
                break;
            }
            else
                $ta=$ta->next;
        }
        if($bool){
            LinkedList::insert($data);
            $open=fopen("/home/admin1/Documents/Fellowship/DataStructure/files/numbers.txt","a") or die("can't open the file");
            fwrite($open,$data."  ");
            echo "$data added\n";
        }
    }
    function display()
    {
        $ta=$this->firstNode;
        while($ta != null){
            echo $ta->data," ";
            $ta=$ta->next;
        }
        echo "\n\n";
    }
}
$obj=new LinkedList();

$words=Utility::readNumbers();
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
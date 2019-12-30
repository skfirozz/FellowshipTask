<?php
include "/home/admin1/Documents/Fellowship/DataStructure/MainPrograms/node.php";
class Stack{
    public $firstNode;
    public $lastNode;
    function __construct()
    {
        $this->firstNode = NULL;
        $this->lastNode = NULL;
    }
    function push($data)
    {
        $newNode=new ListNode($data);
        if($this ->firstNode == null){
            $this->firstNode=$newNode;
        }
        else{
            $ta=$this->firstNode;
            while($ta !=null){
                $ta=$ta->next;
            }
            $ta=$newNode;
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
echo "enter expresssion: ";
$exp=readline();
$obj=new Stack();
$obj->push($exp);
$obj->push("y");
$obj->display();


?>
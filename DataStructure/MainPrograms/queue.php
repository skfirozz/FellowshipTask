<?php
include "/home/admin1/Documents/Fellowship/Data/DataStructure/MainPrograms/node.php";
class Queu{
    public $firstNode;
    function __construct()
    {
        $this->firstNode = NULL;
    }
    function enqueue($name)
    {
        $newNode = new ListNode($name); 
        if($this->firstNode==null)
            $this->firstNode=&$newNode;
        else{
            $ta=$this->firstNode;
            while($ta != null){
                if($ta->next==null){
                    $ta->next=&$newNode;
                break;
                }
                $ta=$ta->next;
            }
        }    
    }
    function show()
    {
        $ta=$this->firstNode;
        $count=0;
        while($ta != null){
            if($count%7==0)
            echo "\n";
            echo $ta->data," ";
            $count++;
            $ta=$ta->next;
        }
        echo "\n";
    }
} 
?>
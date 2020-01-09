<?php
include '/home/admin1/Documents/Fellowship/Oops/MainPrograms/node.php';
class Queue{
    public $firstNode;
    function __construct()
    {
        $this->firstNode=NULL;
    }
    function queue($data)
    {
        $newNode=new ListNode($data);
        if($this->firstNode==NULL)
        $this->firstNode=&$newNode;
        else{
            $ta=$this->firstNode;
            while($ta !=null){
                if($ta->next=null)
                    $ta->next=&$newNode;
                $ta=$ta->next;
            }
        }
    }
    function deque()
    {
        $this->firstNode=$this->firstNode->next;
    }
    function display()
    {
        $ta=$this->firstNode;
        while($ta != null){
            echo $ta->data," ";
            $ta=$ta->next;
        }
    }
}
?>
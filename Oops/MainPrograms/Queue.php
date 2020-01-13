<?php
include '/home/admin1/Documents/Fellowship/OOps/Oops/MainPrograms/node.php';
class Queue{
    public $firstNode;
    function __construct()
    {
        $this->firstNode=NULL;
    }
    function enqueue($data)
    {
            $newNode=new ListNode($data);
            $ta=$this->firstNode;
            if($ta == null || $ta->data > $data ){
                $newNode->next=$this->firstNode;
                $this->firstNode=&$newNode;
            }
            else {
                while ($ta->data < $data ){
                    if( $ta->data < $data && $ta->next ==null || $ta->data < $data && $ta->next->data >= $data){
                        $ba=$ta;
                        $ba=$ta->next;
                        $ta->next=$newNode;
                        $newNode->next=$ba;
                    }
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
<?php
include "/home/admin1/Documents/Fellowship/Oops/MainPrograms/node.php";
class LinkedList{
    public $firstNode;
   public function __construct()
    {
        $this->firstNode =NULL;
       
    }
    function adding($data)
    {
        $newNode=new ListNode($data);
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
}
?>
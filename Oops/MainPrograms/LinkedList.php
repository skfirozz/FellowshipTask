<?php
/********************************************************************
* @Execution : Fellowship/OOps/Oops/MainPrograms $ php LinkedList.php
* @description :implementing the linkedlist 
* @Purpose : for some programs implemted this linked list
* @function : Utility/utility
* @file : LinkedList.php
* @author : skfirozz <shaikfiroz838@gmail.com>
* @version : 7.2.24
* @since : 11-01-2020
*********************************************************************/
include "/home/admin1/Documents/Fellowship/OOps/Oops/MainPrograms/node.php";
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
?>
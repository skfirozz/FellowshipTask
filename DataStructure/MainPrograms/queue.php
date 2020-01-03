<?php
include "/home/admin1/Documents/Fellowship/Data/DataStructure/MainPrograms/node.php";
class Queu{
    public $firstNode;
    public  function __construct()
    {
        $this->firstNode = NULL;
    }
    public static function enqueue($name)
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
    public static function dequeue()
    {
        echo $this->data," ";
        $this->firstNode=$this->firstNode->next;
    }
}
?>
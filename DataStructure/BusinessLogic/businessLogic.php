<?php
include "/home/admin1/Documents/Fellowship/Data/DataStructure/MainPrograms/node.php";
class BusinessLogic{
    public $firstNode;
    public $lastNode;
    function __construct()
    {
        $this->firstNode = NULL;
        $this->lastNode = NULL;
    }
    function push($data)
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
    function pop($data)
    {
        if(BusinessLogic::isEmpty() == false){
            $ta=$this->firstNode;
            $ba=$ta;
            if($ta->next==null){
                $this->firstNode=null;
            }
            else{    
                while($ta->next != null){
                    $ba=$ta;
                    $ta=$ta->next;
                }
                if($ta->data == '(' && $data == ')'){
                    $ba->next=null;
                }
            }
            return true;
        }
    else return false;
    }
    function peek()
    {
        if($this->firstNode==null){
        return false;
        }
        else{
            $ta=$this->firstNode;
            while($ta->next != null){
                $ta=$ta->next;
            }
            echo "peek data",$ta->data,"\n";
            return true;
        }
    }
    function isEmpty()
    {
        if($this->firstNode==null)
        return true;
        else return false;
    }
    function show()
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
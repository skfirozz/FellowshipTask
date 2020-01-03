<?php
include "/home/admin1/Documents/Fellowship/Data/DataStructure/Utility/utility.php";
include "/home/admin1/Documents/Fellowship/Data/DataStructure/MainPrograms/node.php";
$array=Utility::primeRange1();
$anagram=Utility::primeAnagram($array);
class stack{
    public $firstNode;
    function __construct()
    {
        $this->firstNode = NULL;
    }
    function push($data)
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
    function pop()
    {
        $ta=$this->firstNode;
        $ba=$ta;
        if($this->firstNode == null )
        {
            return;
        }
        else if($ta->next == null){
            echo $ta->data," ";
            $this->firstNode=null;
        }
        else{    
            while($ta->next != null){
                $ba=$ta;
                $ta=$ta->next;
            }
            if($ta->next == null ){
                echo $ta->data," ";
                $ba->next=null;
            }
        }
    }
}
$obj=new stack();
for($i=0;$i<count($anagram);$i++){
    $obj->push($anagram[$i]);
}
for($i=0;$i<count($array);$i++){
    $obj->pop();
}
echo "\n\n";

?>
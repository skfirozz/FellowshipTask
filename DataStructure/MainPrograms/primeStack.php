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
    function addrear($data)
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
    function dequeue()
    {
        $ta=$this->firstNode;
        while($ta != null)
        {
            if($ta->next->next == null)
            {
                $ta->next=$ta->next->next;
            break;
            }
            $ta=$ta->next;
        }
    }
}
$obj=new stack();
for($i=0;$i<count($anagram);$i++){
    $obj->addrear($anagram[$i]);
}
for($i=0;$i<count($array);$i++){
    $obj->dequeue();
}

?>
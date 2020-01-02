<?php
include "/home/admin1/Documents/Fellowship/Data/DataStructure/MainPrograms/node.php";
class Palindrome{
    public $firstNode;
    function __construct()
    {
        $this->firstNode = NULL;
    }
    function addFront($data)
    {
        $newNode=new ListNode($data);
        $newNode->next=$this->firstNode;
        $this->firstNode=&$newNode;
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
    function removeFront()
    {
        $this->firstNode=$this->firstNode->next;
    }
    function removeRear()
    {
        $ta=$this->firstNode;
        while($ta != null)
        {
            if($ta->next->next == null){
                $ta->next=$ta->next->next;
            break;
            }
            $ta=$ta->next;
        }
    }
    function isEmpty()
    {
        if($this->firstNode == null)
        return true;
        else return false;
    }
    function check()
    {
        $ta=$this->firstNode;
        // $str1="";$str2="";
        while($ta != null){
            // $str1=$str1+$ta->data;
            // $str2=$ta->data+$str2;
            echo $ta->data,"  ";
            $ta=$ta->next;
        }
        // if($str1==$str2)
        // return true;
        // else 
        // return false;
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
$obj=new Palindrome();
echo "enter the string: ";
$str=readline();
for($i=0;$i<strlen($str);$i++){
    $obj->addRear($str[$i]);
}
$obj->show();
$obj->check();
// if($obj->check())
// echo "true\n";
// else echo "false\n";
?>
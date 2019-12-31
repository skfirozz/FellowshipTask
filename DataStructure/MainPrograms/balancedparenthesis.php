<?php
include "/home/admin1/Documents/Fellowship/Data/DataStructure/MainPrograms/node.php";
class Stack{
    public $firstNode;
    public $lastNode;
    function __construct()
    {
        $this->firstNode = NULL;
        $this->lastNode = NULL;
    }
    function push($data)
    {
        if($this->firstNode != NULL)
        {
            $newNode = new ListNode($data);
            $ta=$this->firstNode;
            if($ta->next==null)
                $ta->next=&$newNode;
            else{
                while($ta != null){
                    if($ta->next==null)
                    {
                        $ta->next=&$newNode;
                    break;
                    }
                    $ta=$ta->next;
                }
            }
        }
        else
        {
            $newNode=new ListNode($data);
            $newNode->next=$this->firstNode;
            $this->firstNode=&$newNode;
            if($this->lastNode == NULL)
            $this->lastNode = &$newNode;
        }
    }
    function pop($data)
    {
        if(Stack::isEmpty() == false){
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
echo "enter expresssion: ";
$exp=readline();
$bool=true;
$obj=new Stack();
for($i=0;$i<strlen($exp);$i++){
    if($exp[$i]=='(')
        $obj->push($exp[$i]);
    else if($exp[$i]==')' ){
        $bool=$obj->pop($exp[$i]);
        if($bool==false)
        break;
    }
}
$obj->peek();
$boolis=$obj->isEmpty();
if($boolis && $bool)
    echo "balanced\n";
else 
    echo "not balanced\n"
?>
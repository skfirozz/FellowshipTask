<?php

include "/home/admin1/Documents/Fellowship/Data/DataStructure/MainPrograms/node.php";
class LinkedList{
    public $firstNode;
    function __construct()
    {
        $this->firstNode=NULL;
    }
    function adding($data)
    {
        $newNode=new ListNode($data);
        $ta=$this->firstNode;
        if($ta == null || $ta->data >= $data ){
            $newNode->next=$this->firstNode;
            $this->firstNode=&$newNode;
        }
        else{
            while($ta != null){
                if( $ta->data <= $data && $ta->next ==null || $ta->data <= $data && $ta->next->data > $data){
                    $ba=$ta;
                    $ba=$ta->next;
                    $ta->next=$newNode;
                    $newNode->next=$ba;
                }
                $ta=$ta->next;
            }
        }
    }
    function delete($data)
    {
        $ta=$this->firstNode;
        if($ta->data==$data){
            $ta=$ta->next;
        }
        else
        while($ta != null){
            if($ta->next->data==$data){
                $ta->next=$ta->next->next;
            }
            $ta=$ta->next;
        }
    }
    function display()
    {
        $ta=$this->firstNode;
        if($ta==null)
        echo "NULL";
        else{
            while($ta != null){
                echo $ta->data," ";
                $ta=$ta->next;
            }
        }
    }
    function search($data)
    {
        $bool=true;
        $ta=$this->firstNode;
        while($ta != null){
            if($ta->data == $data){
                LinkedList::delete($data);
                echo "deleted $data\n";
                $bool=false;
                break;
            }
            else
                $ta=$ta->next;
        }
        if($bool){
            $open=fopen("/home/admin1/Documents/Fellowship/Data/DataStructure/files/hashingNumbers.txt","a") or die("can't open the file");
            fwrite($open," ".$data);
            echo "$data added\n";
        }
    }
}
?>
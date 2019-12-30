<?php
include "/home/admin1/Documents/Fellowship/DataStructure/MainPrograms/node.php";
include "/home/admin1/Documents/Fellowship/DataStructure/Utility/utility.php";
class LinkedList{
    public $firstNode;
    public $lastNode;
    function __construct()
    {
        $this->firstNode = NULL;
        $this->lastNode = NULL;
    } 
    function insert($data)
    {
        $newNode=new ListNode($data);
        $newNode->next=$this->firstNode;
        $this->firstNode=&$newNode;
        if($this->lastNode == NULL)
        $this->lastNode = &$newNode;
    }

    function delete($data)
    {
        $current = $this->firstNode;
        $previous = $this->firstNode;
        while($current->data != $data){
            if($current->next == NULL)
                return NULL;
            else{
                $previous = $current;
                $current = $current->next;
            }
        }
            if($current == $this->firstNode){
                // if($this->firstNode == 1)
                //     $this->lastNode = $this->firstNode;
                $this->firstNode = $this->firstNode->next;
            }
            else{
                if($this->lastNode == $current)
                     $this->lastNode = $previous;
                $previous->next = $current->next;
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
            LinkedList::insert($data);
            $open=fopen("/home/admin1/Documents/Fellowship/DataStructure/files/words.txt","a") or die("can't open the file");
            fwrite($open,$data."  ");
            echo "$data added\n";
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
$obj=new LinkedList();
$words=Utility::readWords();
$array=explode(" ",$words);
for($i=0;$i<count($array);$i++){
   $obj->insert($array[$i]);
}
// $obj->insert(10);
$obj->display();
echo "enter to search: ";
$search=readline();
$obj->search($search);
$obj->display();

?>
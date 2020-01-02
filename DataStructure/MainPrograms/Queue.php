<?php
include "/home/admin1/Documents/Fellowship/Data/DataStructure/MainPrograms/node.php";
class Queue{
    public $bankBalance=50000;
    public $firstNode;
    function __construct()
    {
        $this->firstNode = NULL;
    }
    function enqueue($name)
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
    function dequeue()
    {
           $this->firstNode=$this->firstNode->next;
    }
    function currentUser()
    {
        $ta=$this->firstNode;
        echo $ta->data,"\n";
    }
    function bankBalance($option,$amount)
    {
        if($option==1)
            $this->bankBalance += $amount;
        else
            $this->bankBalance -= $amount;
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
$obj=new Queue();
$bool=true;
echo "enter number of users: ";
$users=readline();
for($i=0;$i<$users;$i++){
    echo "enter name: ";
    $name=readline();
    $obj->enqueue($name);
}
$obj->show();
$obj->show();
for($i=0;$i<$users;$i++){
     echo "   user:  ",$obj->currentUser(),"\nenter amount: ";
    $amount=readline();
    echo "enter 1 to deposit\nenter 2 to withdraw:\n";
    $option=readline();
    $obj->dequeue();
    $obj->show();
    $obj->bankBalance($option,$amount);
}
$balance=$obj->bankBalance;
echo "bank balance is: ",$balance,"\n";
?>

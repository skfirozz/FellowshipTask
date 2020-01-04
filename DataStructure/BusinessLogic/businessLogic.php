<?php
include "/home/admin1/Documents/Fellowship/Data/DataStructure/MainPrograms/node.php";
class BusinessLogic{
    public $bankBalance=50000;
    public $firstNode;
    public $lastNode;
     /*
    *@description : this is constructor
    */ 
    function __construct()
    {
        $this->firstNode = NULL;
        $this->lastNode = NULL;
    }

    /*
    *@description : creating a new node and linking to next Linked List using stack pushing 
    */ 
    function push($data)
    {
        $newNode = new ListNode($data); 
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

    /*
    *@description : poping the data which is last in the linked list
    *@parameter : parameter is data 
    */ 
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

    /*
    *@description : poping the data which is last node 
    */ 
    function primePop()
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
     /*
    *@description : displays the peek of the data in stack 
    */ 
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

     /*
    *@description : checks the stack is empty oir not
    *@return : returns the boolean 
    */ 
    function isEmpty()
    {
        if($this->firstNode==null)
        return true;
        else return false;
    }
     /*
    *@description : displays the linked list 
    */ 
    function show()
    {
        $ta=$this->firstNode;
        while($ta != null){
            echo $ta->data," ";
            $ta=$ta->next;
        }
        echo "\n\n";
    }

     /*
    *@description : creating a node and linking to previous node
    *@parameter : parameter is data  
    */ 
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

     /*
    *@description : deleting the first node (FIFO) and making next node as first node 
    */ 
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

     /*
    *@description : displaying the dates of calender as a calender manner 
    */ 
    function calnederShow()
    {
        $count=0;
        $ta=$this->firstNode;
        while($ta != null){
            
            echo $ta->data," ";
            if($count%7==0)
                echo "\n";
            $ta=$ta->next;
            $count++;
        }
        echo "\n\n";
    }

     /*
    *@description : creating a node and adding that node as first node and remaing all nodes are next of first nodes 
    */ 
    function addFront($data)
    {
        $newNode=new ListNode($data);
        $newNode->next=$this->firstNode;
        $this->firstNode=&$newNode;
    }

     /*
    *@description : adding the node as a last node 
    */ 
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

     /*
    *@description : removing the first node and making second node as first node 
    */ 
    function removeFront()
    {
        $this->firstNode=$this->firstNode->next;
    }

     /*
    *@description : removing the last node in the linkled list 
    */ 
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

     /*
    *@description : checking the two are palendrome or not 
    */ 
    function palindromeCheck()
    {
        $ta=$this->firstNode;
        $str1="";$str2="";
        while($ta != null){
            $str1=$str1.$ta->data;
            $str2=$ta->data.$str2;
            $ta=$ta->next;
        }
        if($str1==$str2)
        return true;
        else 
        return false;
    }
}
?>
<?php
include "/home/admin1/Documents/Fellowship/Data/DataStructure/MainPrograms/node.php";
// include "";
class Stack{
    public $head= null;
    public $tail=null;
    public $count=0;

    public function push($data)
    {
        $n=new ListNode($data);
        if($this->head==null){
            $this->head==$n;
            $this->tail=$this->head;
            $n->next=null;
            $this->count++;
            return;
        }
        $this->tail->next=$n;
        $this->tail=$n;
        $this->count++;
        return;
    }

    public function pop(){
        if($this->count==0){
            return;
        }
        $temp=$this->tail->data;
        if($this->head==$this->tail){
            $temp=$this->tail->data;
            $this->head=null;
            $this->tail=null;
            $this->count--;
            return $temp;
        }
        $temp2=$this->head;
        for($i=1;$i<$this->count-1;$i++){
            $temp2=$temp2->next;
        }
        $this->tail=$temp2;
        $temp->next=null;
        $this->count--;
        return $temp;
    }

    public function peek(){
        if($this->count==0){
            echo "no data to peek\n";
            return;
        }
        return $this->tail->data;
    }

    public function show(){
       $ta=$this->head;
       while(ta != null){
        echo $ta->data," ";
       }
    }

    public function size(){
        return $this->count;
    }

    public function isEmpty(){
        return $this->count==0;
    }
    public function getString(){
        $temp=$this->head;
        $str="";
        for($i=0;$i<$this->count;$i++){
            $str=$str.$temp->data." ";
            $temp=$temp->next;
        }
        $str=substr($str,0,-1);
        return $str;
    }
}
$obj=new Stack();
for($i=0;$i<10;$i++)
$obj->push($i);
$obj->show();

?>
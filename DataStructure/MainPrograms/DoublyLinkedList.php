<?php
include '/home/admin1/Documents/Fellowship/Data/DataStructure/MainPrograms/DoublyListNode.php';
class DoublyLinkedList
{
public $head;
public $tail;
function __construct()
{
    $this->head=NULL;
    $this->tail=NULL;
}
function addFront($data)
{
    $newNode=new DoublyListNode($data);
    if($this->head == NULL)
    {
        $this->head=$this->tail=&$newNode;
    }
    else{
        $this->head->previous=&$newNode;
        $newNode->next=$this->head;
        $this->head=&$newNode;
    }
}
function display()
{
    while($this->tail != null){
        echo $this->tail->data," ";
        $this->tail=$this->tail->previous;
    }
}
function display1()
{
    while($this->head != null){
        echo $this->head->data," ";
        $this->head=$this->head->next;
    }
}
}


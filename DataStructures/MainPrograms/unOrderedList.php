<?php
class Node{
    public $data;
    public $next;
    function __constructor($data){
        $this->data=$data;
        $this->next=NULL;
    }
}
?>
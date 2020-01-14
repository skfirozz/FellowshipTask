<?php
class DoublyListNode
{
    public $next;
    public $previous;
    public $data;
    function __construct($data)
    {
        $this->data=$data;
    }
}
?>
<?php
/********************************************************************
* @Execution : Fellowship/OOps/Oops/MainPrograms $ php node.php
* @description :this is for node
* @Purpose : creating a node for linked list
* @function : Utility/utility
* @file : node.php
* @author : skfirozz <shaikfiroz838@gmail.com>
* @version : 7.2.24
* @since : 11-01-2020
*********************************************************************/
class ListNode
{
    public $data;
    public $next;
    function __construct($data)
    {
        $this->data = $data;
        $this->next = NULL;
    }
}
?>
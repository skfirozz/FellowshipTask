<?php
class Test{
    public $name;
    public $lastName;
    function __clone()
    {
        $this->name='firoz';
        $this->lastName='shaik';
    }
}
$obj1=new Test();
?>
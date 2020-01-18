<?php
abstract class User{
    public $mediator;
    public  $name;
    public function __construct($mediator,$name)
    {
        $this->mediator=$mediator;
        $this->name=$name;
    }
    public abstract function send($message);
    public abstract function receive($message);
}
?>
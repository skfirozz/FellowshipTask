<?php
require_once 'user.php';
require_once 'chatMediatorImpl.php';
class UserImpl extends User{
    public function __construct($mediator,$name)
    {
        parent::__construct($mediator,$name);
    }
    public function send($message)
    {
        echo $this->name,"   sending message-- ",$message,"\n";
        ChatMediatorImpl::sendMessage($message,$this);
    }
    public function receive($message)
    {
      echo "Received Message--",$message,"\n";
    }
}
?>
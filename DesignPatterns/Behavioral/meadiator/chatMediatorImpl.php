<?php
include 'chatMediator.php';
class ChatMediatorImpl implements ChatMediator{
    public  $users;
    public function __construct()
    {
        $this->users=array();
    }
    public function addUser($user)
    {
        $this->users[]=$user;
    }
    public function sendMessage($message, $user)
    {
        UserImpl::receive($message);
    }
}
?>
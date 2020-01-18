<?php
interface ChatMediator{
    public function sendMessage($message,$user);
    public function addUser($user);
}
?>
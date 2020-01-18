<?php
/********************************************************************
* @Execution : Fellowship/DesignPatterns/DesignPatterns/mediator $ php ChatClient.php
* @description :mediator design pattern in Behavioiural
* @Purpose : mediator design Pattern in Behavioiural
* @file : ChatClient.php
* @author : skfirozz <shaikfiroz838@gmail.com>
* @version : 7.2.24
* @since : 18-01-2020
*********************************************************************/
include 'chatMediatorImpl.php';
include 'UserImpl.php';
function  chatClient()
{
    $objChat=new ChatMediatorImpl();
    $user1=new UserImpl($objChat,'Firoz');
    $user2=new UserImpl($objChat,'Akhilesh');
    $user3=new UserImpl($objChat,'koti');
    $user4=new UserImpl($objChat,'Karim');
    $objChat->addUser($user1);
    $objChat->addUser($user2);
    $objChat->addUser($user3);
    $objChat->addUser($user4);
    $user1->send('hi All');
}
chatClient();
?>
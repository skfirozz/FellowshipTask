<?php
/********************************************************************
* @Execution : Fellowship/DesignPatterns/DesignPatterns/Visitor $ php run.php
* @description :Visitor design pattern in Behavioiural
* @Purpose : Visitor design Pattern in Behavioiural
* @file : run.php
* @author : skfirozz <shaikfiroz838@gmail.com>
* @version : 7.2.24
* @since : 18-01-2020
*********************************************************************/
require_once 'CartVisiImpl.php';
require_once 'Fruit.php';;
require_once 'book.php';
function clientCode(array $components, cartVisitor $visitor)
{
    foreach ($components as $component) {
        $component->accept($visitor);
    }
}
$components = [
    new Book("Half GirlFriend", 200, 5),
    new Fruit(150, "Apple"),
];
$visitorOne = new CartVisitImpl;
clientCode($components, $visitorOne);
echo "\n";
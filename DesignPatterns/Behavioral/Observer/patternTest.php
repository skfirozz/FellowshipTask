<?php
/********************************************************************
* @Execution : Fellowship/DesignPatterns/DesignPatterns/Observer $ php patternTest.php
* @description :Observer design pattern in Behavioiural
* @Purpose : Observer design Pattern in Behavioiural
* @file : ChatClient.php
* @author : skfirozz <shaikfiroz838@gmail.com>
* @version : 7.2.24
* @since : 18-01-2020
*********************************************************************/
require_once 'patternSubject.php';
echo "BEGIN TESTING OBSERVER PATTERN\n";
echo "\n";
$patternGossiper = new PatternSubject();
$patternGossipFan = new PatternObserver();
$patternGossiper->attach($patternGossipFan);
$patternGossiper->updateFavorites('Sehwag, Kohli, Sachin');
$patternGossiper->updateFavorites('Sehwag, Kohli, Dhoni');
$patternGossiper->detach($patternGossipFan);
$patternGossiper->updateFavorites('Sehwag, Kohli, Pathan');
echo "END TESTING OBSERVER PATTERN\n";
?>
<?php
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
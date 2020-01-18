<?php
include '/home/admin1/Documents/Fellowship/Design Patterns/DesignPatterns/Behavioral/Observer/observer.php';
class PatternObserver extends AbstractObserver{
    public function __construct()
    {
    }
    public function update(AbstractSubject $subject)
    {
        echo "*IN PATTERN OBSERVER - NEW UPDATE ALERT*\n";
        echo " new favorite patterns: " . $subject->getFavorites() . "\n";
        echo "*IN PATTERN OBSERVER - PATTERN UPDATE ALERT OVER*\n\n";
    }
}
?>
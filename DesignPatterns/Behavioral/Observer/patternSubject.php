<?php
include '/home/admin1/Documents/Fellowship/Design Patterns/DesignPatterns/Behavioral/Observer/subject.php';
include '/home/admin1/Documents/Fellowship/Design Patterns/DesignPatterns/Behavioral/Observer/patternObserver.php';
class PatternSubject extends AbstractSubject
{
    private $favouritePatterns = null;
    private $observers = array();
    public function __construct()
    {

    }
    public function attach(AbstractObserver $observe_in)
    {
        $this->observers[] = $observe_in;
        echo "Dhoni attached to squad\n\n";
    }
    public function detach(AbstractObserver $observe_in)
    {
       $index=array_search($observe_in,$this->observers);
       unset($this->observers[$index]);
       echo "deleted\n";
    }
    public function notify()
    {
        foreach ($this->observers as $obs) {
            $obs->update($this);
        }
    }
    public function updateFavorites($newFavorites)
    {
        $this->favorites = $newFavorites;
        $this->notify();
    }
    /**
     * function to detach the updated data
     * @return favorites
     */
    public function getFavorites()
    {
        return $this->favorites;
    }
}

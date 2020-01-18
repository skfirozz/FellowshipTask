<?php
abstract class AbstractSubject{
    abstract public function attach(AbstractObserver $observe_in);
    abstract public function detach(AbstractObserver $observe_in);
    abstract public function notify();
    abstract public function getFavorites();
}
?>
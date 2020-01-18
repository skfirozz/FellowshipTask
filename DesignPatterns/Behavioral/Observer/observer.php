<?php
abstract class AbstractObserver{
    abstract public function update(AbstractSubject $subject);
}
?>
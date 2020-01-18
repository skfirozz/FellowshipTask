<?php
interface CartVisitor{
    public function visitBook(Book $element);
    public function visitFruit(Fruit $element);
}
?>
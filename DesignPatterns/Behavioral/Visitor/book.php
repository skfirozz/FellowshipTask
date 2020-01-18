<?php
require_once 'Item.php';
class Book implements ItemElement{
    private $name;
    private $price;
    private $quantity;
    public function __construct($name,$price,$quantity)
    {
        $this->name=$name;
        $this->price=$price;
        $this->quantity=$quantity;
    }
    public function getName(){
        return $this->name;
    }
    public function getPrice(){
        return $this->price;
    }
    public function getQuantity(){
        return $this->quantity;
    }
    public function accept(cartVisitor $visitor)
    {
        $visitor->visitBook($this);
    }
}
?>
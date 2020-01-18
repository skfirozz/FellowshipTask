<?php
require_once 'Item.php';
class Fruit implements ItemElement{
    public $price;
    public $type;
    public function __construct($price,$type)
    {
        $this->price=$price;
        $this->type=$type;
    }
    public function getPrice(){
        return $this->price;
    }
    public function getType(){
        return $this->type;
    }
    public function accept(\CartVisitor $visitor)
    {
        $visitor->visitFruit($this);
    }
}
?>
<?php
require_once 'CartVisitor.php';
class CartVisitImpl implements CartVisitor{
    public function visitBook(Book $element)
    {
        echo "Book Details: \n";
        echo "Name--",$element->getName(),"\nPrice--",$element->getPrice(),"\nQuantity--",$element->getQuantity(),"\n";
    }
    public function visitFruit(Fruit $element)
    {
        echo "Fruit Details:\n ";
        echo "Type--",$element->getType(),"\nPrice--",$element->getPrice(),"\n";
    }   

} 
?>
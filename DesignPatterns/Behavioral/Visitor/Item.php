<?php
interface ItemElement{
    public function accept(CartVisitor $visitor);
}
?>
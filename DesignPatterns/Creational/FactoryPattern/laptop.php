<?php
class Laptop{
    public $brand;
    public $ram;
    public $harddisk;
    public function __construct($brand,$ram,$harddisk)
    {
        $this->brand=$brand;
        $this->ram=$ram;
        $this->harddisk=$harddisk;
    }
    public function brand($brand){
        return $this->brand;
    }
    public function ram($ram){
        return $this->ram;
    }
    public function harddisk($harddisk){
        return $this->harddisk;
    }
}
<?php
class PC
{
    public $brand;
    public $ram;
    public $harddisk;
    public $windows;
    public function PC($brand, $ram, $harddisk, $windows)
    {
        $this->brand = $brand;
        $this->ram = $ram;
        $this->harddisk = $harddisk;
        $this->windows = $windows;
    }
    public function brand()
    {
        return $this->brand;
    }
    public function ram()
    {
        return $this->ram;
    }
    public function harddisk()
    {
        return $this->harddisk;
    }
    public function windows()
    {
        return $this->windows;
    }
}

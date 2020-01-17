<?php
class EagerInitialization{
    
    public static $obj=new EagerInitialization();
    private function __construct()
    {
    }
    
    public static function  getInstance()
    {
        return $obj;
    }
}
?>
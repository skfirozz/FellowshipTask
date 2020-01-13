<?php
class LazyInitialization{
    private static $instance;
    private function __construct()
    {
    }
    public static function  getInstance(){
        if(!isset($instance))
            $instance=new LazyInitialization();
        return $instance;
    } 
}
?>
<?php
class EagerInitialization{
    private static $instance;
    private function __construct()
    {
    }
    public static function  getInstance(){
        if(!isset($instance)){
            $instance=new EagerInitialization();
        }
        return $instance;
    } 
}
?>
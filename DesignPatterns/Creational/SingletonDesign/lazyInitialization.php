<?php
/********************************************************************
* @Execution : Fellowship/DesignPatterns/DesignPatterns/Creational/SingletonDesign $ php lazyInitialization.php
* @description :lazy Initialization design pattern in Creational
* @Purpose : lazy Initialization design Pattern in Creational
* @file : lazyInitialization.php
* @author : skfirozz <shaikfiroz838@gmail.com>
* @version : 7.2.24
* @since : 18-01-2020
*********************************************************************/
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
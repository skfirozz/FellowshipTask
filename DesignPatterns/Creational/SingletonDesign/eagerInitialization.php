<?php
/********************************************************************
* @Execution : Fellowship/DesignPatterns/DesignPatterns/Creational/SingletonDesign $ php eagerInitialization.php
* @description :eager Initialization design pattern in Creational
* @Purpose : eager Initialization design Pattern in Creational
* @file : eagerInitialization.php
* @author : skfirozz <shaikfiroz838@gmail.com>
* @version : 7.2.24
* @since : 18-01-2020
*********************************************************************/
class EagerInitialization{
    public static $obj;
    public static function  getInstance()
    {
        return self::$obj;
    }
}
?>
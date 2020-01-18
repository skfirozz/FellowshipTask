<?php
/********************************************************************
* @Execution : Fellowship/DesignPatterns/DesignPatterns/Creational/SingletonDesign $ php threadSafe.php
* @description :thread Safe Initialization design pattern in Creational
* @Purpose : thread safe Initialization design Pattern in Creational
* @file : threadSafe.php
* @author : skfirozz <shaikfiroz838@gmail.com>
* @version : 7.2.24
* @since : 18-01-2020
*********************************************************************/
class ThreadSafe{
    private static $instance;
    private function __construct()
    {

    }
    public static  function   getInstance()
    {
        if(!isset($instance))
        $instance=new ThreadSafe();
        return $instance;
    }
}
?>
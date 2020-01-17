<?php
class EagerInitialization{
    public static $obj;
    public static function  getInstance()
    {
        return self::$obj;
    }
}
?>
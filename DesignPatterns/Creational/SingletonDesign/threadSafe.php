<?php
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
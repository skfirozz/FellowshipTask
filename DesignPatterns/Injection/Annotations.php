<?php
/*
 *@class
 */
class Foo
{
    /**
     * @var integer
     * @range(0, 100)
     * @label('Number of Bars')
     */

    public $bar;
/**
 *
 * @construct(@var integer)
 */
    public function __construct($data)
    {
        $this->bar = $data;
    }
}

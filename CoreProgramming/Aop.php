<?php

class A
{
    /**
     * Undocumented function
     *@before fun2()
     * @return void
     */
    public function fun()
    {
        echo "hi\n";
    }
    public function fun2()
    {
        echo "before\n";
        return 10;
    }
}
// $obj=new A();
// $obj->fun();
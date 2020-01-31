<?php
class A
{
    private $name = 'Injected  Dpendency';
    function display()
    {
        echo $this->name."\n";
    }
}

class B
{
    private $a;
    function __construct(A $a)
    {
        $this->a = $a;
    }

    function display()
    {
        $this->a->display();
    }
}

class C{
    private $b;
    function __construct(B $b)
    {
        $this->b = $b;
    }

    function display()
    {
        $this->b->display();
    }
}

function dependencies()
{
    return['b'=>function ()
    {
        $a = new A();
        return new B($a);
    },'c'=>function ()
    {
        $a = new A();
        $b = new B($a);  
        return  new C($b);
    }];
}

function main()
{
    $dp = dependencies();
    $obj = call_user_func($dp['b']);
    echo $obj->display();
    
}
main();
?>
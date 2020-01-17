<?php
include '/home/admin1/Documents/Fellowship/Design Patterns/DesignPatterns/Structural/ProxyDesignPattern/TerminalImpl.php';
include '/home/admin1/Documents/Fellowship/Design Patterns/DesignPatterns/Structural/ProxyDesignPattern/TerminalExecution.php';
include '/home/admin1/Documents/Fellowship/Design Patterns/DesignPatterns/Structural/ProxyDesignPattern/Terminal.php';
class commandExc
{
    public function main()
    {
        $tExec = new TerminalExe("firoz", "firoz111");
        $tExec->run("ls -ltr");
    }
}
$obj = new commandExc();
$obj->main();

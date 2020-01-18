<?php
/********************************************************************
* @Execution : Fellowship/DesignPatterns/DesignPatterns/Structural/ProxyDesignPattern $ php commandExe.php
* @description :Proxy design pattern in Structural
* @Purpose : Proxy design Pattern in Structural
* @file : commandExe.php
* @author : skfirozz <shaikfiroz838@gmail.com>
* @version : 7.2.24
* @since : 18-01-2020
*********************************************************************/
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

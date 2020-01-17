<?php
include '/home/admin1/Documents/Fellowship/Design Patterns/DesignPatterns/Structural/ProxyDesignPattern/Terminal.php';
class TerminalImpl implements Terminal{
    public function runCommand($cmd)
    {
        $output=shell_exec($cmd);
        echo $cmd,"\n";
    }
}
?>
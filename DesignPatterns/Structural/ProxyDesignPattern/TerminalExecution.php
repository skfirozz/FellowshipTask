<?php
class TerminalExe implements Terminal{
    public $isAdmin=false;
    public function __construct($user,$password){
        global $isAdmin;
        if('firoz'==$user && 'firoz111'==$password)
            $isAdmin=true;
        else
            echo "Invalid Credentials\n"; 
    }
    public function run($cmd)
    {
        global $isAdmin;
        $termialRun=new TerminalImpl();
        if ($isAdmin) {
            $termialRun->runCommand($cmd);
        }
    }

}
?>